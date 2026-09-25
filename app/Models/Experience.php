<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedFields;
use Database\Factories\ExperienceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['role', 'role_en', 'company', 'company_en', 'started_year', 'ended_year', 'description', 'description_en', 'sort_order'])]
class Experience extends Model
{
    /** @use HasFactory<ExperienceFactory> */
    use HasFactory;

    use HasLocalizedFields;

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->orderBy('sort_order');
    }

    protected function period(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->ended_year
                ? "{$this->started_year} — {$this->ended_year}"
                : "{$this->started_year} — ".__('portfolio.experience.present'),
        );
    }
}
