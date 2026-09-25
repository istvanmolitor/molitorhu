<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedFields;
use Database\Factories\EducationFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['degree', 'degree_en', 'school', 'school_en', 'started_year', 'ended_year', 'sort_order'])]
class Education extends Model
{
    /** @use HasFactory<EducationFactory> */
    use HasFactory;

    use HasLocalizedFields;

    protected $table = 'educations';

    protected function period(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->ended_year
                ? "{$this->started_year} — {$this->ended_year}"
                : "{$this->started_year} —",
        );
    }
}
