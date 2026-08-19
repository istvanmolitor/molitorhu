<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('skill_category_id')
                    ->relationship('skillCategory', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
