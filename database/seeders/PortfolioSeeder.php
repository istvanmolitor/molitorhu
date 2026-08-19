<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * @var array<string, list<string>>
     */
    private const SKILLS = [
        'Backend' => ['PHP', 'Laravel', 'Livewire', 'Filament', 'MySQL', 'MSSQL', 'MongoDB', 'ElasticSearch'],
        'Frontend' => ['JavaScript', 'Node.js', 'Vue.js', 'React', 'jQuery', 'CSS3', 'SCSS', 'Bootstrap', 'Tailwind'],
        'Eszközök & Adattudomány' => ['Docker', 'Git', 'Jira', 'Linux', 'Python', 'Scikit-learn', 'Pandas', 'Matplotlib', 'Photoshop', 'Adobe XD', 'Figma', 'Serpa'],
    ];

    /**
     * @var list<array{degree: string, school: string, started_year: int, ended_year: ?int}>
     */
    private const EDUCATIONS = [
        [
            'degree' => 'Adattudomány szak',
            'school' => 'Óbudai Egyetem',
            'started_year' => 2026,
            'ended_year' => null,
        ],
        [
            'degree' => 'Műszaki informatikai szak, Hálózati technológiák szakirány',
            'school' => 'Kecskeméti Főiskola Gépipari és Automatizálási Műszaki Főiskolai Kar',
            'started_year' => 2005,
            'ended_year' => 2009,
        ],
        [
            'degree' => 'Informatikai szak',
            'school' => 'Kelenföldi Műszaki Középiskola',
            'started_year' => 2001,
            'ended_year' => 2005,
        ],
    ];

    /**
     * @var list<array{role: string, company: string, started_year: int, ended_year: ?int, description: string, tags: list<string>}>
     */
    private const EXPERIENCES = [
        [
            'role' => 'Backend Fejlesztő',
            'company' => 'Atlas Soft Kft.',
            'started_year' => 2026,
            'ended_year' => null,
            'description' => 'Webfejlesztői feladatok ellátása PHP és Laravel technológiákkal.',
            'tags' => ['PHP', 'Symfony', 'PostgreSQL', 'Docker'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Central Médiacsoport Zrt.',
            'started_year' => 2023,
            'ended_year' => 2026,
            'description' => 'Vezető hazai hírportálok és médiaoldalak fejlesztése (nosalty.hu, hazipatika.com, hirstart.hu, startlap.hu, 24.hu, kiderul.hu).',
            'tags' => ['PHP', 'Laravel', 'Nette', 'MySQL', 'Docker', 'React'],
        ],
        [
            'role' => 'Fullstack fejlesztő',
            'company' => 'Jármű Kontroll Magyarország Kft.',
            'started_year' => 2021,
            'ended_year' => 2023,
            'description' => 'Backend rendszerek fejlesztése és karbantartása.',
            'tags' => ['PHP', 'Laravel', 'MySQL', 'Docker', 'Vue.js'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'RIEL Elektronikai Kft.',
            'started_year' => 2017,
            'ended_year' => 2021,
            'description' => 'Webalkalmazások fejlesztése (riel.hu).',
            'tags' => ['PHP', 'Laravel', 'Vue.js'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Webtown-Informatika Kft.',
            'started_year' => 2013,
            'ended_year' => 2017,
            'description' => 'Webalkalmazások fejlesztése (webtown.hu).',
            'tags' => ['PHP', 'MySQL', 'JQuery'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'eOX Kft.',
            'started_year' => 2012,
            'ended_year' => 2013,
            'description' => 'Webalkalmazások fejlesztése (eox.hu).',
            'tags' => ['PHP', 'JavaScript'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Tandofer Informatikai Kft.',
            'started_year' => 2010,
            'ended_year' => 2012,
            'description' => 'Webalkalmazások fejlesztése (tandofer.hu).',
            'tags' => ['PHP', 'JavaScript'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Silithus Kft.',
            'started_year' => 2008,
            'ended_year' => 2010,
            'description' => 'Webalkalmazások fejlesztése PHP alapokon.',
            'tags' => ['PHP', 'JavaScript'],
        ],
    ];

    /**
     * Seed skill categories, skills, educations and experiences with the
     * data that used to live in config/portfolio.php.
     */
    public function run(): void
    {
        $skills = $this->seedSkills();
        $this->seedEducations();
        $this->seedExperiences($skills);
    }

    /**
     * @return array<string, Skill> skill lookup keyed by lowercase name
     */
    private function seedSkills(): array
    {
        $lookup = [];

        foreach (array_values(self::SKILLS) as $categoryIndex => $items) {
            $categoryName = array_keys(self::SKILLS)[$categoryIndex];

            $category = SkillCategory::create([
                'name' => $categoryName,
                'sort_order' => $categoryIndex,
            ]);

            foreach ($items as $skillIndex => $name) {
                $skill = Skill::create([
                    'skill_category_id' => $category->id,
                    'name' => $name,
                    'sort_order' => $skillIndex,
                ]);

                $lookup[Str::lower($name)] = $skill;
            }
        }

        return $lookup;
    }

    private function seedEducations(): void
    {
        foreach (self::EDUCATIONS as $index => $school) {
            Education::create([
                'degree' => $school['degree'],
                'school' => $school['school'],
                'started_year' => $school['started_year'],
                'ended_year' => $school['ended_year'],
                'sort_order' => $index,
            ]);
        }
    }

    /**
     * @param  array<string, Skill>  $skillLookup
     */
    private function seedExperiences(array $skillLookup): void
    {
        $fallbackCategory = SkillCategory::query()->orderBy('sort_order')->first();

        foreach (self::EXPERIENCES as $index => $job) {
            $experience = Experience::create([
                'role' => $job['role'],
                'company' => $job['company'],
                'started_year' => $job['started_year'],
                'ended_year' => $job['ended_year'],
                'description' => $job['description'],
                'sort_order' => $index,
            ]);

            $skillIds = [];

            foreach ($job['tags'] as $tag) {
                $key = Str::lower($tag);

                if (! isset($skillLookup[$key])) {
                    $skillLookup[$key] = Skill::create([
                        'skill_category_id' => $fallbackCategory->id,
                        'name' => $tag,
                        'sort_order' => Skill::query()->where('skill_category_id', $fallbackCategory->id)->count(),
                    ]);
                }

                $skillIds[] = $skillLookup[$key]->id;
            }

            $experience->skills()->sync($skillIds);
        }
    }
}
