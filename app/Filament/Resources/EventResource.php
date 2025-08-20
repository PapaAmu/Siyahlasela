<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Event Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'strike',
                                'blockquote', 'bulletList', 'orderedList',
                                'link', 
                            ]),
                        
                        Forms\Components\DatePicker::make('date')
                            ->required()
                            ->minDate(today())
                            ->default(today()),
                        
                        Forms\Components\TimePicker::make('time')
                            ->required()
                            ->seconds(false),
                        
                        Forms\Components\Toggle::make('is_online')
                            ->label('Online Event')
                            ->reactive()
                            ->inline(false),
                        
                        Forms\Components\TextInput::make('meeting_url')
                            ->label('Meeting URL')
                            ->url()
                            ->maxLength(255)
                            ->visible(fn (callable $get) => $get('is_online'))
                            ->required(fn (callable $get) => $get('is_online')),
                        
                        Forms\Components\TextInput::make('location')
                            ->label('Physical Location')
                            ->maxLength(255)
                            ->visible(fn (callable $get) => !$get('is_online'))
                            ->required(fn (callable $get) => !$get('is_online')),
                        
                        Forms\Components\FileUpload::make('image')
                            ->label('Event Image')
                            ->image()
                            ->directory('events')
                            ->maxSize(2048)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Recurrence Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_recurring')
                            ->label('Recurring Event')
                            ->reactive()
                            ->inline(false),
                        
                        Forms\Components\Select::make('recurrence_pattern')
                            ->label('Recurrence Pattern')
                            ->options([
                                'daily' => 'Daily',
                                'weekly' => 'Weekly',
                                'monthly' => 'Monthly',
                                'yearly' => 'Yearly',
                            ])
                            ->visible(fn (callable $get) => $get('is_recurring'))
                            ->required(fn (callable $get) => $get('is_recurring')),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Publication Status')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('draft'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->defaultImageUrl(url('/images/event-placeholder.jpg')),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->tooltip(fn (Event $record): string => $record->title),
                
                Tables\Columns\TextColumn::make('date')
                    ->label('Event Date')
                    ->date('M d, Y')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('time')
                    ->label('Time')
                    ->time('g:i A'),
                
                Tables\Columns\IconColumn::make('is_online')
                    ->label('Online')
                    ->boolean()
                    ->trueIcon('heroicon-o-video-camera')
                    ->falseIcon('heroicon-o-map-pin'),
                
                Tables\Columns\TextColumn::make('location')
                    ->label('Location')
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\IconColumn::make('is_recurring')
                    ->label('Recurring')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('recurrence_pattern')
                    ->label('Recurrence')
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'draft',
                        'success' => 'published',
                        'danger' => 'cancelled',
                    ])
                    ->icons([
                        'heroicon-o-pencil' => 'draft',
                        'heroicon-o-check-circle' => 'published',
                        'heroicon-o-x-circle' => 'cancelled',
                    ]),
                
                Tables\Columns\TextColumn::make('created_by')
                    ->label('Created By')
                    ->formatStateUsing(function ($state) {
                        if ($state && $user = \App\Models\User::find($state)) {
                            return $user->name;
                        }
                        return 'System';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('updated_by')
                    ->label('Updated By')
                    ->formatStateUsing(function ($state) {
                        if ($state && $user = \App\Models\User::find($state)) {
                            return $user->name;
                        }
                        return 'System';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'cancelled' => 'Cancelled',
                    ]),
                
                Tables\Filters\Filter::make('is_online')
                    ->label('Online Events')
                    ->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_online', true)),
                
                Tables\Filters\Filter::make('is_recurring')
                    ->label('Recurring Events')
                    ->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_recurring', true)),
                
                Tables\Filters\Filter::make('upcoming_events')
                    ->label('Upcoming Events')
                    ->query(fn (Builder $query): Builder => $query->where('date', '>=', today())),
                
                Tables\Filters\Filter::make('past_events')
                    ->label('Past Events')
                    ->query(fn (Builder $query): Builder => $query->where('date', '<', today())),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('publish')
                        ->label('Publish Selected')
                        ->action(function ($records) {
                            $records->each->update(['status' => 'published']);
                        })
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-check-circle')
                        ->color('success'),
                    
                    Tables\Actions\BulkAction::make('draft')
                        ->label('Mark as Draft')
                        ->action(function ($records) {
                            $records->each->update(['status' => 'draft']);
                        })
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-pencil')
                        ->color('warning'),
                    
                    Tables\Actions\BulkAction::make('cancel')
                        ->label('Cancel Selected')
                        ->action(function ($records) {
                            $records->each->update(['status' => 'cancelled']);
                        })
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-x-circle')
                        ->color('danger'),
                ]),
            ])
            ->defaultSort('date', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'published')->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'success';
    }
}