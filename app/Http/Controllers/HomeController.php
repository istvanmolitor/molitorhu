<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\SkillCategory;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $jobs = Experience::with('skills')
            ->orderBy('sort_order')
            ->get()
            ->map(fn (Experience $experience): array => [
                'role' => $experience->role,
                'company' => $experience->company,
                'period' => $experience->period,
                'description' => $experience->description,
                'tags' => $experience->skills->pluck('name')->all(),
            ])
            ->all();

        $skills = SkillCategory::with('skills')
            ->orderBy('sort_order')
            ->get()
            ->mapWithKeys(fn (SkillCategory $category): array => [
                $category->name => $category->skills->pluck('name')->all(),
            ])
            ->all();

        $schools = Education::orderBy('sort_order')
            ->get()
            ->map(fn (Education $education): array => [
                'degree' => $education->degree,
                'school' => $education->school,
                'period' => $education->period,
            ])
            ->all();

        return view('welcome', [
            'jobs' => $jobs,
            'skills' => $skills,
            'schools' => $schools,
        ]);
    }
}
