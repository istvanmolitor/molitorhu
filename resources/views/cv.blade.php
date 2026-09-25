<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $hero['name'] }}</title>
        <style>
            @page {
                margin: 28px 40px;
            }

            body {
                font-family: 'DejaVu Sans', sans-serif;
                font-size: 11px;
                color: #1e293b;
            }

            h1 {
                margin: 0;
                font-size: 24px;
                color: #0f172a;
            }

            .title {
                margin: 4px 0 0;
                font-size: 13px;
                font-weight: bold;
                color: #4f46e5;
            }

            .meta {
                margin-top: 8px;
                font-size: 10px;
                color: #64748b;
            }

            .meta span + span::before {
                content: "  •  ";
            }

            section {
                margin-top: 18px;
            }

            h2 {
                font-size: 11px;
                letter-spacing: 1px;
                text-transform: uppercase;
                color: #4f46e5;
                border-bottom: 1px solid #e2e8f0;
                padding-bottom: 4px;
                margin: 0 0 10px;
            }

            p {
                margin: 0 0 6px;
                line-height: 1.5;
            }

            .item {
                margin-bottom: 12px;
            }

            .item-heading {
                width: 100%;
            }

            .item-heading .role {
                font-size: 12px;
                font-weight: bold;
                color: #0f172a;
            }

            .item-heading .period {
                float: right;
                font-size: 10px;
                color: #64748b;
            }

            .item .company {
                font-size: 10.5px;
                font-weight: bold;
                color: #4f46e5;
                margin-bottom: 4px;
            }

            .tags span {
                display: inline-block;
                margin: 4px 4px 0 0;
                padding: 2px 8px;
                border: 1px solid #cbd5e1;
                border-radius: 10px;
                font-size: 9px;
                color: #475569;
            }

            .skill-category {
                margin-bottom: 6px;
            }

            .skill-category .category {
                font-weight: bold;
                color: #0f172a;
            }
        </style>
    </head>
    <body>
        <h1>{{ $hero['name'] }}</h1>
        <p class="title">{{ $hero['title'] }}</p>
        <p class="meta">
            <span>{{ $hero['location'] }}</span>
            <span>{{ $hero['email'] }}</span>
        </p>

        <section>
            <h2>{{ __('portfolio.sections.about') }}</h2>
            @foreach ($about['paragraphs'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </section>

        <section>
            <h2>{{ __('portfolio.sections.experience') }}</h2>
            @foreach ($jobs as $job)
                <div class="item">
                    <div class="item-heading">
                        <span class="period">{{ $job['period'] }}</span>
                        <span class="role">{{ $job['role'] }}</span>
                    </div>
                    <div class="company">{{ $job['company'] }}</div>
                    <p>{{ $job['description'] }}</p>
                    @if (count($job['tags']))
                        <div class="tags">
                            @foreach ($job['tags'] as $tag)
                                <span>{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </section>

        <section>
            <h2>{{ __('portfolio.sections.skills') }}</h2>
            @foreach ($skills as $category => $items)
                <div class="skill-category">
                    <span class="category">{{ $category }}:</span>
                    {{ implode(', ', $items) }}
                </div>
            @endforeach
        </section>

        <section>
            <h2>{{ __('portfolio.sections.education') }}</h2>
            @foreach ($schools as $school)
                <div class="item">
                    <div class="item-heading">
                        <span class="period">{{ $school['period'] }}</span>
                        <span class="role">{{ $school['degree'] }}</span>
                    </div>
                    <div class="company">{{ $school['school'] }}</div>
                </div>
            @endforeach
        </section>
    </body>
</html>
