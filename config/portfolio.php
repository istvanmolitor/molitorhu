<?php

return [

    'meta' => [
        'title' => 'Molitor István — Senior PHP / Laravel fejlesztő',
        'description' => 'Molitor István szakmai portfóliója: Senior PHP / Laravel fejlesztő, backend architektúra és API fejlesztés.',
    ],

    'nav' => [
        ['label' => 'Rólam', 'href' => '#about'],
        ['label' => 'Tapasztalat', 'href' => '#experience'],
        ['label' => 'Készségek', 'href' => '#skills'],
        ['label' => 'Tanulmányok', 'href' => '#education'],
        ['label' => 'Kapcsolat', 'href' => '#contact'],
    ],

    'hero' => [
        'availability' => 'Elérhető új lehetőségekre',
        'name' => 'Molitor István',
        'title' => 'Senior PHP / Laravel fejlesztő',
        'description' => '20+ év tapasztalat PHP és Laravel alapú backend rendszerek, komplex '
            .'üzleti alkalmazások és nagy terhelésű rendszerek fejlesztésében, '
            .'kiegészülve modern JavaScript frontend technológiákkal (Vue, React).',
        'image' => 'images/molitor-istvan.jpg',
        'location' => 'Budapest, Magyarország',
        'email' => 'istvanmolitor@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/istv%C3%A1n-molitor-866779106/',
    ],

    'about' => [
        'heading' => 'PHP/Laravel háttérrel rendelkező fejlesztő, aki az adatvezérelt megoldások felé bővíti a szakmai fókuszát.',
        'paragraphs' => [
            'Több mint 20 év tapasztalattal rendelkezem webfejlesztőként, fő fókuszomban '
                .'a PHP és Laravel alapú backend rendszerek állnak. Jelentős tapasztalatom van '
                .'komplex üzleti alkalmazások, webshopok, admin felületek és nagy terhelésű '
                .'rendszerek fejlesztésében, valamint modern JavaScript frontend technológiák '
                .'(Vue, React) használatában.',
            'Az elmúlt években egyre komolyabban kezdett érdekelni az adattudomány, ezért '
                .'célzott képzéseken vettem részt Python-alapú adatelemzés és gépi tanulás '
                .'területén. Célom, hogy szoftverfejlesztői hátteremet adatvezérelt problémák '
                .'megoldásában kamatoztassam, és szakmailag ebbe az irányba mozduljak el.',
        ],
    ],

    'experience' => [
        [
            'role' => 'Webfejlesztő',
            'company' => 'Atlass Soft',
            'period' => '2026 — jelenleg',
            'description' => 'Webfejlesztői feladatok ellátása PHP és Laravel technológiákkal.',
            'tags' => ['PHP', 'Laravel'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Central Médiacsoport Zrt.',
            'period' => '2023 — 2026',
            'description' => 'Vezető hazai hírportálok és médiaoldalak fejlesztése (nosalty.hu, hazipatika.com, hirstart.hu, startlap.hu, 24.hu, kiderul.hu).',
            'tags' => ['PHP', 'Laravel', 'MySQL'],
        ],
        [
            'role' => 'Backend Fejlesztő',
            'company' => 'Jármű Kontroll Magyarország Kft.',
            'period' => '2021 — 2023',
            'description' => 'Backend rendszerek fejlesztése és karbantartása.',
            'tags' => ['PHP', 'Laravel', 'MySQL'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'RIEL Elektronikai Kft.',
            'period' => '2017 — 2021',
            'description' => 'Webalkalmazások fejlesztése (riel.hu).',
            'tags' => ['PHP', 'JavaScript'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Webtown-Informatika Kft.',
            'period' => '2013 — 2017',
            'description' => 'Webalkalmazások fejlesztése (webtown.hu).',
            'tags' => ['PHP', 'MySQL'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'eOX Kft.',
            'period' => '2012 — 2013',
            'description' => 'Webalkalmazások fejlesztése (eox.hu).',
            'tags' => ['PHP'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Tandofer Informatikai Kft.',
            'period' => '2010 — 2012',
            'description' => 'Webalkalmazások fejlesztése (tandofer.hu).',
            'tags' => ['PHP'],
        ],
        [
            'role' => 'Webfejlesztő',
            'company' => 'Silithus Kft.',
            'period' => '2008 — 2010',
            'description' => 'Webalkalmazások fejlesztése PHP alapokon.',
            'tags' => ['PHP'],
        ],
    ],

    'skills' => [
        'Backend' => ['PHP', 'Laravel', 'Livewire', 'Filament', 'MySQL', 'MSSQL', 'MongoDB', 'ElasticSearch'],
        'Frontend' => ['JavaScript', 'Node.js', 'Vue.js', 'React', 'jQuery', 'CSS3', 'SCSS', 'Bootstrap', 'Tailwind'],
        'Eszközök & Adattudomány' => ['Docker', 'Git', 'Jira', 'Linux', 'Python', 'Scikit-learn', 'Pandas', 'Matplotlib', 'Photoshop', 'Adobe XD', 'Figma', 'Serpa'],
    ],

    'education' => [
        [
            'degree' => 'Adattudomány szak',
            'school' => 'Óbudai Egyetem',
            'period' => '2026 —',
        ],
        [
            'degree' => 'Műszaki informatikai szak, Hálózati technológiák szakirány',
            'school' => 'Kecskeméti Főiskola Gépipari és Automatizálási Műszaki Főiskolai Kar',
            'period' => '2005 — 2009',
        ],
        [
            'degree' => 'Informatikai szak',
            'school' => 'Kelenföldi Műszaki Középiskola',
            'period' => '2001 — 2005',
        ],
    ],

    'contact' => [
        'heading' => 'Dolgozzunk együtt.',
        'description' => 'Nyitott vagyok új szakmai lehetőségekre és érdekes projektekre — írj bátran.',
        'email' => 'istvanmolitor@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/istv%C3%A1n-molitor-866779106/',
    ],

];
