<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;            // Laravel URL facade
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url as SitemapUrl;     // Spatie Url tag (aliased)
use App\Models\Blog;                           // adjust if needed
use App\Models\Event;                          // adjust or remove if unused

class BuildSitemap extends Command
{
    protected $signature = 'app:build-sitemap';
    protected $description = 'Generate sitemap.xml for clearrisk.ai';

    public function handle(): int
    {
        // Ensure absolute URLs use APP_URL and HTTPS in prod
        URL::forceRootUrl(config('app.url'));
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        $sitemap = Sitemap::create();

        // Static routes
        $sitemap
            ->add(SitemapUrl::create(route('home'))->setPriority(1.0))
            ->add(SitemapUrl::create(route('about-us')))
            ->add(SitemapUrl::create(route('audit-management')))
            ->add(SitemapUrl::create(route('enterprise-risk-management')))
            ->add(SitemapUrl::create(route('pricing')))
            ->add(SitemapUrl::create(route('contactUS-us')))
            ->add(SitemapUrl::create(route('blogs.index')))
            ->add(SitemapUrl::create(route('events.index')));

        // Dynamic: blogs
        if (class_exists(Blog::class)) {
            Blog::query()
                ->where('status', '1')
                ->select(['slug', 'updated_at'])
                ->orderByDesc('updated_at')
                ->chunk(500, function ($rows) use ($sitemap) {
                    foreach ($rows as $row) {
                        $sitemap->add(
                            SitemapUrl::create(route('blogs.show', ['slug' => $row->slug]))
                                ->setLastModificationDate($row->updated_at ?? now())
                                ->setPriority(0.8)
                        );
                    }
                });
        }

        // Dynamic: events (only if you have events.show)
        if (class_exists(Event::class) && Route::has('events.show')) {
            Event::query()
                ->where('is_public', true)
                ->select(['slug', 'updated_at'])
                ->orderByDesc('updated_at')
                ->chunk(500, function ($rows) use ($sitemap) {
                    foreach ($rows as $row) {
                        $sitemap->add(
                            SitemapUrl::create(route('events.show', ['slug' => $row->slug]))
                                ->setLastModificationDate($row->updated_at ?? now())
                                ->setPriority(0.7)
                        );
                    }
                });
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated at: ' . public_path('sitemap.xml'));
        return self::SUCCESS;
    }
}
