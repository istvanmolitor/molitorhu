<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\PageText;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * @var array<string, string>
     */
    private const PAGE_TEXTS = [
        'meta_title' => 'Molitor István — Senior PHP / Laravel fejlesztő',
        'meta_description' => 'Molitor István szakmai portfóliója: Senior PHP / Laravel fejlesztő, backend architektúra és API fejlesztés.',

        'hero_name' => 'Molitor István',
        'hero_title' => 'Senior PHP / Laravel fejlesztő',
        'hero_description' => '20+ év tapasztalat PHP és Laravel alapú backend rendszerek, komplex '
            .'üzleti alkalmazások és nagy terhelésű rendszerek fejlesztésében, '
            .'kiegészülve modern JavaScript frontend technológiákkal (Vue, React).',
        'hero_location' => 'Budapest, Magyarország',
        'hero_email' => 'istvanmolitor@gmail.com',

        'about_heading' => 'PHP/Laravel háttérrel rendelkező fejlesztő, aki az adatvezérelt megoldások felé bővíti a szakmai fókuszát.',
        'about_paragraph_1' => 'Több mint 20 év tapasztalattal rendelkezem webfejlesztőként, fő fókuszomban '
            .'a PHP és Laravel alapú backend rendszerek állnak. Jelentős tapasztalatom van '
            .'komplex üzleti alkalmazások, webshopok, admin felületek és nagy terhelésű '
            .'rendszerek fejlesztésében, valamint modern JavaScript frontend technológiák '
            .'(Vue, React) használatában.',
        'about_paragraph_2' => 'Az elmúlt években egyre komolyabban kezdett érdekelni az adattudomány, ezért '
            .'célzott képzéseken vettem részt Python-alapú adatelemzés és gépi tanulás '
            .'területén. Célom, hogy szoftverfejlesztői hátteremet adatvezérelt problémák '
            .'megoldásában kamatoztassam, és szakmailag ebbe az irányba mozduljak el.',

        'contact_heading' => 'Dolgozzunk együtt.',
        'contact_description' => 'Van egy webes ötleted, amit megvalósítanál? Írj bátran.',
        'contact_email' => 'istvanmolitor@gmail.com',
    ];

    /**
     * @var array<string, list<string>>
     */
    private const SKILLS = [
        'Backend' => ['PHP', 'Laravel', 'Livewire', 'Filament', 'MySQL', 'MSSQL', 'MongoDB', 'ElasticSearch'],
        'Frontend' => ['JavaScript', 'Node.js', 'Vue.js', 'React', 'jQuery', 'CSS3', 'SCSS', 'Bootstrap', 'Tailwind'],
        'Eszközök' => ['Docker', 'Git', 'Jira', 'Linux', 'Photoshop', 'Adobe XD', 'Figma', 'Serpa', 'Postman', 'Vite', 'Composer'],
        'Adattudomány' => ['Python', 'Scikit-learn', 'Pandas', 'NumPy', 'Matplotlib', 'Seaborn', 'Jupyter', 'Google Colab', 'SQL'],
        'AI' => ['ChatGPT', 'Claude', 'Claude Code', 'GitHub Copilot', 'Junie', 'Lovable', 'Hugging Face'],
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
     * Seed page texts, skill categories, skills, educations and experiences
     * with the data that used to live in config/portfolio.php.
     */
    public function run(): void
    {
        $this->seedPageTexts();

        $skills = $this->seedSkills();
        $this->seedEducations();
        $this->seedExperiences($skills);
    }

    private function seedPageTexts(): void
    {
        foreach (self::PAGE_TEXTS as $key => $value) {
            PageText::create([
                'key' => $key,
                'value' => $value,
            ]);
        }
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
