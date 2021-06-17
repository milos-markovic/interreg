<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'selected-mob' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'title' => 'Social entrepreneurship for women in rural areas',
    'description' => 'Website description.',
    'collections' => [
        'index' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'about_project' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'objectives' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'partners' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'activities' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'blog_items' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'gallery' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'gallery/{filename}',
        ],
    ],
];
