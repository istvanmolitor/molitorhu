<?php

namespace App\Models;

use Database\Factories\PageTextFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['key', 'value'])]
class PageText extends Model
{
    /** @use HasFactory<PageTextFactory> */
    use HasFactory;
}
