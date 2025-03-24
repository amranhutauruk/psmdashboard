<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use App\Filament\Resources\LaporanProduksiResource;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Widgets\ChartProduksiEstateSatu;
use App\Filament\Widgets\LaporanProduksiEstate1Chart;
use App\Filament\Widgets\LaporanProduksiEstate2Chart;
use App\Filament\Widgets\LaporanProduksiPlasmaChart;
use App\Filament\Widgets\LaporanBulananProduksiEstate1Chart;
use App\Filament\Widgets\LaporanBulananProduksiEstate2Chart;
use App\Filament\Widgets\BudgetEstate1Chart;
use App\Filament\Widgets\BudgetPlasmaChart;





class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->brandName('PT. Permata Sawit Mandiri')
            ->brandLogo(asset('assets/img/psm.jpg'))
            ->brandLogoHeight('2.5rem')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,

                LaporanProduksiEstate1Chart::class,
                LaporanProduksiPlasmaChart::class,
                LaporanBulananProduksiEstate1Chart::class,
                LaporanBulananProduksiEstate2Chart::class,
                BudgetEstate1Chart::class,
                BudgetPlasmaChart::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
