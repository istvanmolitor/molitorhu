<?php

namespace App\Repositories;

use App\Models\PageText;

class PageTextRepository
{
    public function get(string $key, ?string $default = null): ?string
    {
        $pageText = PageText::query()->where('key', $key)->first();

        return $pageText?->localized('value') ?? $default;
    }
}
