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
        'hero_title' => 'Senior szoftverfejlesztő',
        'hero_description' => '20+ év szakmai tapasztalat nagy terhelésű webes platformok, '
            .'mikroszolgáltatás-alapú architektúrák és komplex, adatalapú üzleti '
            .'rendszervezérlések tervezésében és fejlesztésében.',
        'hero_location' => 'Budapest, Magyarország',
        'hero_email' => 'istvanmolitor@gmail.com',

        'about_heading' => 'Két évtized tapasztalattal rendelkező szakember vagyok.',
        'about_paragraph_1' => 'Szakterületem a nagy terhelésű webes platformok, mikroszolgáltatás-alapú architektúrák és komplex, adatalapú üzleti rendszervezérlések tervezése és fejlesztése.',
        'about_paragraph_2' => 'Jelenleg az Óbudai Egyetem Adattudomány MSc levelező szakán tanulok. Célom, hogy sokéves backend fejlesztői tapasztalatomat modern, adatalapú, AI-integrált webes rendszerek építésében használjam fel.',

        'contact_heading' => 'Dolgozzunk együtt.',
        'contact_description' => 'Szakemberre van szükségetek? Írj bátran!',
        'contact_email' => 'istvanmolitor@gmail.com',
    ];

    /**
     * @var array<string, string>
     */
    private const PAGE_TEXTS_EN = [
        'meta_title' => 'Molitor István — Senior PHP / Laravel Developer',
        'meta_description' => 'Professional portfolio of Molitor István: Senior PHP / Laravel developer, backend architecture and API development.',

        'hero_name' => 'Molitor István',
        'hero_title' => 'Senior Software Developer',
        'hero_description' => '20+ years of professional experience designing and building '
            .'high-traffic web platforms, microservice-based architectures, and complex, '
            .'data-driven business systems.',
        'hero_location' => 'Budapest, Hungary',
        'hero_email' => 'istvanmolitor@gmail.com',

        'about_heading' => 'I am a professional with two decades of experience.',
        'about_paragraph_1' => 'My specialty is designing and developing high-traffic web '
            .'platforms, microservice-based architectures, and complex, data-driven business '
            .'systems.',
        'about_paragraph_2' => 'I am currently studying in the part-time Data Science MSc '
            .'program at Óbuda University. My goal is to leverage my many years of backend '
            .'development experience in building modern, data-driven, AI-integrated web systems.',

        'contact_heading' => "Let's work together.",
        'contact_description' => 'Need a professional? Feel free to reach out.',
        'contact_email' => 'istvanmolitor@gmail.com',
    ];

    /**
     * @var array<string, list<string>>
     */
    private const SKILLS = [
        'Backend' => ['PHP', 'Laravel', 'Livewire', 'Filament', 'MySQL', 'MSSQL', 'MongoDB', 'ElasticSearch', 'Redis'],
        'Frontend' => ['JavaScript', 'Node.js', 'Vue.js', 'React', 'jQuery', 'CSS3', 'SCSS', 'Bootstrap', 'Tailwind'],
        'Eszközök' => ['Docker', 'Git', 'Jira', 'Linux', 'Photoshop', 'Adobe XD', 'Figma', 'Serpa', 'Postman', 'Vite', 'Composer'],
        'Adattudomány' => ['Python', 'Django', 'Scikit-learn', 'Pandas', 'NumPy', 'Matplotlib', 'Seaborn', 'Jupyter', 'Google Colab', 'SQL'],
        'AI' => ['ChatGPT', 'Claude', 'Claude Code', 'GitHub Copilot', 'Junie', 'Lovable', 'Hugging Face'],
    ];

    /**
     * @var array<string, string>
     */
    private const SKILL_CATEGORIES_EN = [
        'Backend' => 'Backend',
        'Frontend' => 'Frontend',
        'Eszközök' => 'Tools',
        'Adattudomány' => 'Data Science',
        'AI' => 'AI',
    ];

    /**
     * @var list<array{degree: string, degree_en: string, school: string, school_en: string, started_year: int, ended_year: ?int}>
     */
    private const EDUCATIONS = [
        [
            'degree' => 'Adattudomány MSc (levelező)',
            'degree_en' => 'Data Science MSc (part-time)',
            'school' => 'Óbudai Egyetem Neumann János Informatikai Kar',
            'school_en' => 'Óbuda University, John von Neumann Faculty of Informatics',
            'started_year' => 2026,
            'ended_year' => null,
        ],
        [
            'degree' => 'Machine Learning Engineer tanfolyam',
            'degree_en' => 'Machine Learning Engineer Course',
            'school' => 'Cubix',
            'school_en' => 'Cubix',
            'started_year' => 2023,
            'ended_year' => 2023,
        ],
        [
            'degree' => 'Műszaki informatikai szak, Hálózati technológiák szakirány',
            'degree_en' => 'Technical Informatics, Network Technologies specialization',
            'school' => 'Kecskeméti Főiskola Gépipari és Automatizálási Műszaki Főiskolai Kar',
            'school_en' => 'Kecskemét College, Faculty of Mechanical and Automation Engineering',
            'started_year' => 2005,
            'ended_year' => 2009,
        ],
        [
            'degree' => 'Informatikai szak',
            'degree_en' => 'Information Technology',
            'school' => 'Kelenföldi Műszaki Középiskola',
            'school_en' => 'Kelenföld Technical Secondary School',
            'started_year' => 2001,
            'ended_year' => 2005,
        ],
    ];

    /**
     * @var list<array{role: string, role_en: string, company: string, company_en: string, started_year: int, ended_year: ?int, description: string, description_en: string, tags: list<string>}>
     */
    private const EXPERIENCES = [
        [
            'role' => 'Full Stack Fejlesztő',
            'role_en' => 'Full Stack Developer',
            'company' => 'Central Médiacsoport Zrt.',
            'company_en' => 'Central Médiacsoport Zrt.',
            'started_year' => 2023,
            'ended_year' => 2026,
            'description' => 'Nagy látogatottságú weboldalak fejlesztése (nosalty.hu, hazipatika.com, hirstart.hu, startlap.hu, 24.hu, kiderul.hu).',
            'description_en' => 'Development of high-traffic websites (nosalty.hu, hazipatika.com, hirstart.hu, startlap.hu, 24.hu, kiderul.hu).',
            'tags' => ['PHP', 'Laravel', 'Nette', 'MySQL', 'Docker', 'React'],
        ],
        [
            'role' => 'Backend Fejlesztő',
            'role_en' => 'Backend Developer',
            'company' => 'Jármű Kontroll Magyarország Kft.',
            'company_en' => 'Jármű Kontroll Magyarország Kft.',
            'started_year' => 2021,
            'ended_year' => 2023,
            'description' => 'Ügyfelek számára készült flottakövető adminisztrációs felület fejlesztése.',
            'description_en' => 'Development of a fleet-tracking administration interface for clients.',
            'tags' => ['PHP', 'Laravel', 'MySQL', 'Docker', 'Vue.js'],
        ],
        [
            'role' => 'Full Stack Fejlesztő',
            'role_en' => 'Full Stack Developer',
            'company' => 'RIEL Elektronikai Kft.',
            'company_en' => 'RIEL Elektronikai Kft.',
            'started_year' => 2017,
            'ended_year' => 2021,
            'description' => 'Webshop, belső ügyviteli rendszer és VIR adatszinkron fejlesztése (riel.hu).',
            'description_en' => 'Development of a webshop, internal business management system, and management information system data sync (riel.hu).',
            'tags' => ['PHP', 'Laravel', 'Vue.js'],
        ],
        [
            'role' => 'Full Stack Fejlesztő',
            'role_en' => 'Full Stack Developer',
            'company' => 'Webtown-Informatika Kft.',
            'company_en' => 'Webtown-Informatika Kft.',
            'started_year' => 2013,
            'ended_year' => 2017,
            'description' => 'Weboldalak, VIR rendszer fejlesztése (webtown.hu).',
            'description_en' => 'Development of websites and a management information system (webtown.hu).',
            'tags' => ['PHP', 'MySQL', 'JQuery'],
        ],
        [
            'role' => 'Full Stack Fejlesztő',
            'role_en' => 'Full Stack Developer',
            'company' => 'Tandofer Informatikai Kft.',
            'company_en' => 'Tandofer Informatikai Kft.',
            'started_year' => 2010,
            'ended_year' => 2013,
            'description' => 'VIR-rendszerekhez integrált webshopok fejlesztése (tandofer.hu).',
            'description_en' => 'Development of webshops integrated with management information systems (tandofer.hu).',
            'tags' => ['PHP', 'JavaScript'],
        ],
        [
            'role' => 'Backend Fejlesztő',
            'role_en' => 'Backend Developer',
            'company' => 'Silithus Kft.',
            'company_en' => 'Silithus Kft.',
            'started_year' => 2008,
            'ended_year' => 2010,
            'description' => 'Közbeszerzési rendszer fejlesztése a Bács-Kiskun Megyei Önkormányzat számára.',
            'description_en' => 'Development of a public procurement system for the Bács-Kiskun County Government.',
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
                'value_en' => self::PAGE_TEXTS_EN[$key],
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
                'name_en' => self::SKILL_CATEGORIES_EN[$categoryName],
                'sort_order' => $categoryIndex,
            ]);

            foreach ($items as $skillIndex => $name) {
                $skill = Skill::create([
                    'skill_category_id' => $category->id,
                    'name' => $name,
                    'name_en' => $name,
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
                'degree_en' => $school['degree_en'],
                'school' => $school['school'],
                'school_en' => $school['school_en'],
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
                'role_en' => $job['role_en'],
                'company' => $job['company'],
                'company_en' => $job['company_en'],
                'started_year' => $job['started_year'],
                'ended_year' => $job['ended_year'],
                'description' => $job['description'],
                'description_en' => $job['description_en'],
                'sort_order' => $index,
            ]);

            $skillIds = [];

            foreach ($job['tags'] as $tag) {
                $key = Str::lower($tag);

                if (! isset($skillLookup[$key])) {
                    $skillLookup[$key] = Skill::create([
                        'skill_category_id' => $fallbackCategory->id,
                        'name' => $tag,
                        'name_en' => $tag,
                        'sort_order' => Skill::query()->where('skill_category_id', $fallbackCategory->id)->count(),
                    ]);
                }

                $skillIds[] = $skillLookup[$key]->id;
            }

            $experience->skills()->sync($skillIds);
        }
    }
}
