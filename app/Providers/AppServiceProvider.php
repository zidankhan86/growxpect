<?php

namespace App\Providers;

use App\Models\HomepageContent;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('settings')) {
                View::composer('*', function ($view) {
                    $view->with('setting', Setting::first());
                });
            }
            if (Schema::hasTable('homepage_contents')) {
                View::composer('*', function ($view) {
                    $cms = HomepageContent::query()
                        ->get(['section', 'field_key', 'field_value'])
                        ->flatMap(function ($item) {
                            return [
                                $item->field_key => $item->field_value,
                                $item->section . '_' . $item->field_key => $item->field_value,
                            ];
                        })
                        ->toArray();
                    $view->with('cms', $cms);
                });
            }
        } catch (\Exception $e) {
            // DB not connected or tables not ready during early boot
        }
    }
}
