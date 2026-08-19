<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                TextInput::make('started_year')
                    ->label('Tól')
                    ->numeric()
                    ->required(),
                TextInput::make('ended_year')
                    ->label('Ig')
                    ->numeric()
                    ->helperText('Üresen hagyva: jelenleg.'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('skills')
                    ->relationship('skills', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->columnSpanFull(),
            ]);
    }
}
