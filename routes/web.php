<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\{Site, URL};

Route::statamic(
    '/sitemaps.xml',
    'utilities/sitemap/index',
    [
        'layout' => null,
        'content_type' => 'application/xml',
    ],
);

Site::all()->each(function (Statamic\Sites\Site $site): void {
    $relativeUrl = URL::makeRelative($site->url());

    Route::statamic(
        URL::tidy($relativeUrl.'/sitemap.xml'),
        'utilities/sitemap/show',
        [
            'layout' => null,
            'content_type' => 'application/xml',
        ],
    );
});
