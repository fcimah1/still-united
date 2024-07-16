<?php

namespace App\Providers;

use App\Models\Setting;
use App\Repository\AdminRepository;
use App\Repository\BlogRepository;
use App\Repository\CategoryRepository;
use App\Repository\ContactRepository;
use App\Repository\Interface\IAdminRepository;
use App\Repository\Interface\IBlogRepository;
use App\Repository\Interface\ICategoryRepository;
use App\Repository\Interface\IContactRepository;
use App\Repository\Interface\IPartnerAndClientRpository;
use App\Repository\Interface\IRequestAQuoteRepository;
use App\Repository\Interface\IServiceRepository;
use App\Repository\Interface\ISettingRepository;
use App\Repository\Interface\ITagRepository;
use App\Repository\PartnerAndClientRpository;
use App\Repository\RequestAQuoteRepository;
use App\Repository\ServiceRepository;
use App\Repository\SettingRepository;
use App\Repository\TagRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IContactRepository::class, ContactRepository::class);
        $this->app->singleton(ISettingRepository::class, SettingRepository::class);
        $this->app->singleton(IPartnerAndClientRpository::class, PartnerAndClientRpository::class);
        $this->app->singleton(IServiceRepository::class, ServiceRepository::class);
        $this->app->singleton(ICategoryRepository::class, CategoryRepository::class);
        $this->app->singleton(IAdminRepository::class, AdminRepository::class);
        $this->app->singleton(IBlogRepository::class, BlogRepository::class);
        $this->app->singleton(ITagRepository::class, TagRepository::class);
        $this->app->singleton(IRequestAQuoteRepository::class, RequestAQuoteRepository::class);

        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(!app()->runningInConsole()){
            $setting = Setting::firstOr(function () {
                return Setting::create([
                    'name' => 'My Website',
                    'description' => 'This is my website',
                    'logo' => 'logo.png',
                    'favicon' => 'favicon.png',
                    'email' => 'info@mywebsite.com',
                    'phone' => '1234567890',
                    'address' => '123 Main St, City, State, Country',
                    'facebook' => 'https://www.facebook.com',
                    'twitter' => 'https://www.twitter.com',
                    'instagram' => 'https://www.instagram.com',
                    'whatsapp' => 'https://www.whatsapp.com',
                ]);
            });
            view()->share('setting', $setting);
        }
    }
}
