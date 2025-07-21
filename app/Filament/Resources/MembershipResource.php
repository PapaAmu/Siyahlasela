<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembershipResource\Pages;
use App\Models\Membership;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MembershipResource extends Resource
{
    protected static ?string $model = Membership::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Personal Information
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
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
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                Forms\Components\TextInput::make('age')
                    ->disabled(), // age can be calculated, optional
                Forms\Components\Textarea::make('home_address')
                    ->required(),

                // Church Information
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

                // Emergency / Next of Kin
                Forms\Components\TextInput::make('next_of_kin_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('next_of_kin_relationship')
                    ->maxLength(255),
                Forms\Components\TextInput::make('next_of_kin_phone')
                    ->required()
                    ->maxLength(20),
                Forms\Components\Textarea::make('next_of_kin_address'),

                // Spiritual Info (optional)
                Forms\Components\TextInput::make('baptized')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ministry_interest')
                    ->maxLength(255),

                // Status
                Forms\Components\Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Active' => 'Active',
                        'Inactive' => 'Inactive',
                    ])
                    ->default('Pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('last_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('status')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('M d, Y')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
        ];
    }
}