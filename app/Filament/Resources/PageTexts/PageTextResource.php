<?php

namespace App\Filament\Resources\PageTexts;

use App\Filament\Resources\PageTexts\Pages\CreatePageText;
use App\Filament\Resources\PageTexts\Pages\EditPageText;
use App\Filament\Resources\PageTexts\Pages\ListPageTexts;
use App\Filament\Resources\PageTexts\Schemas\PageTextForm;
use App\Filament\Resources\PageTexts\Tables\PageTextsTable;
use App\Models\PageText;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageTextResource extends Resource
{
    protected static ?string $model = PageText::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    public static function form(Schema $schema): Schema
    {
        return PageTextForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageTextsTable::configure($table);
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
            'index' => ListPageTexts::route('/'),
            'create' => CreatePageText::route('/create'),
            'edit' => EditPageText::route('/{record}/edit'),
        ];
    }
}
