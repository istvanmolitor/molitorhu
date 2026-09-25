<?php

namespace App\Filament\Resources\SkillCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Név (HU)')
                    ->required(),
                TextInput::make('name_en')
                    ->label('Név (EN)'),
            ]);
    }
}
