<?php

namespace App\Repositories;

use App\Models\Education;
use App\Models\Experience;
use App\Models\SkillCategory;

class PortfolioRepository
{
    public function __construct(private readonly PageTextRepository $pageTexts) {}

    /**
     * @return array<string, mixed>
     */
    public function data(): array
    {
        $jobs = Experience::with('skills')
            ->orderBy('sort_order')
            ->get()
            ->map(fn (Experience $experience): array => [
                'role' => $experience->localized('role'),
                'company' => $experience->localized('company'),
                'period' => $experience->period,
                'description' => $experience->localized('description'),
                'tags' => $experience->skills->map(fn ($skill): string => $skill->localized('name'))->all(),
            ])
            ->all();

        $skills = SkillCategory::with('skills')
            ->orderBy('sort_order')
            ->get()
            ->mapWithKeys(fn (SkillCategory $category): array => [
                $category->localized('name') => $category->skills->map(fn ($skill): string => $skill->localized('name'))->all(),
            ])
            ->all();

        $schools = Education::orderBy('sort_order')
            ->get()
            ->map(fn (Education $education): array => [
                'degree' => $education->localized('degree'),
                'school' => $education->localized('school'),
                'period' => $education->period,
            ])
            ->all();

        return [
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
        ];
    }
}
