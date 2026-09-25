<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedFields;
use Database\Factories\SkillCategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'name_en', 'sort_order'])]
class SkillCategory extends Model
{
    /** @use HasFactory<SkillCategoryFactory> */
    use HasFactory;

    use HasLocalizedFields;

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class)->orderBy('sort_order');
    }
}
