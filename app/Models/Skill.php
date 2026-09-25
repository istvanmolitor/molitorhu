<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedFields;
use Database\Factories\SkillFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['skill_category_id', 'name', 'name_en', 'sort_order'])]
class Skill extends Model
{
    /** @use HasFactory<SkillFactory> */
    use HasFactory;

    use HasLocalizedFields;

    public function skillCategory(): BelongsTo
    {
        return $this->belongsTo(SkillCategory::class);
    }

    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class);
    }
}
