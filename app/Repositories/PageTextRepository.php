<?php

namespace App\Repositories;

use App\Models\PageText;

class PageTextRepository
{
    public function get(string $key, ?string $default = null): ?string
    {
        return PageText::query()->where('key', $key)->value('value') ?? $default;
    }
}
