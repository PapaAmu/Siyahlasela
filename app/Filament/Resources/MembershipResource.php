<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembershipResource\Pages;
use App\Models\Membership;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\BadgeColumn;

class MembershipResource extends Resource
{
    protected static ?string $model = Membership::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->schema([
                        Forms\Components\TextInput::make('full_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->required()
                            ->maxLength(20),
                        Forms\Components\Select::make('gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('age')
                            ->required()
                            ->numeric()
                            ->minValue(0),
                        Forms\Components\Textarea::make('home_address')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Church Information')
                    ->schema([
                        Forms\Components\TextInput::make('church_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('church_location')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pastor_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pastor_contact')
                            ->required()
                            ->maxLength(20),
                    ])->columns(2),

                Forms\Components\Section::make('Next of Kin')
                    ->schema([
                        Forms\Components\TextInput::make('next_of_kin_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('next_of_kin_relationship')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('next_of_kin_phone')
                            ->required()
                            ->maxLength(20),
                    ])->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'Pending' => 'Pending',
                                'Active' => 'Active',
                                'Inactive' => 'Inactive',
                            ])
                            ->default('Pending')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('age'),

                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'Pending',
                        'success' => 'Active',
                        'danger' => 'Inactive',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Joined')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Active' => 'Active',
                        'Inactive' => 'Inactive',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMemberships::route('/'),
            'create' => Pages\CreateMembership::route('/create'),
            'edit' => Pages\EditMembership::route('/{record}/edit'),
                // The View page is automatically handled by `ViewAction` in Filament
        ];
    }
}
