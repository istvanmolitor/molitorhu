<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\SkillCategory;
use App\Repositories\PageTextRepository;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private readonly PageTextRepository $pageTexts) {}

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
            'meta' => [
                'title' => $this->pageTexts->get('meta_title'),
                'description' => $this->pageTexts->get('meta_description'),
            ],
            'hero' => [
                'name' => $this->pageTexts->get('hero_name'),
                'title' => $this->pageTexts->get('hero_title'),
                'description' => $this->pageTexts->get('hero_description'),
                'image' => config('portfolio.hero.image'),
                'location' => $this->pageTexts->get('hero_location'),
                'email' => $this->pageTexts->get('hero_email'),
            ],
            'about' => [
                'heading' => $this->pageTexts->get('about_heading'),
                'paragraphs' => [
                    $this->pageTexts->get('about_paragraph_1'),
                    $this->pageTexts->get('about_paragraph_2'),
                ],
            ],
            'contact' => [
                'heading' => $this->pageTexts->get('contact_heading'),
                'description' => $this->pageTexts->get('contact_description'),
                'email' => $this->pageTexts->get('contact_email'),
            ],
        ]);
    }
}
