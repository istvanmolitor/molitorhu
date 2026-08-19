<?php

namespace App\Models;

use Database\Factories\ExperienceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['role', 'company', 'started_year', 'ended_year', 'description', 'sort_order'])]
class Experience extends Model
{
    /** @use HasFactory<ExperienceFactory> */
    use HasFactory;

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->orderBy('sort_order');
    }

    protected function period(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->ended_year
                ? "{$this->started_year} — {$this->ended_year}"
                : "{$this->started_year} — jelenleg",
        );
    }
}
