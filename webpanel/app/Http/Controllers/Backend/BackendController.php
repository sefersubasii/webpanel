<?php

namespace App\Http\Controllers\Backend;

use App\Page;
use App\User;
use App\Slider;
use App\Address;
use App\Product;
use App\Category;
use App\HomeProduct;
use App\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class BackendController extends Controller
{
    public function index()
    {
        $widgets = Cache::remember('backend.index.counts', now()->addHours(24), function () {
            $categories = $this->getWidgetData(Category::count(), 'Kategoriler', route('categories.index'));
            $products = $this->getWidgetData(Product::count(), 'Ürünler', route('products.index'));
            $homeProducts = $this->getWidgetData(HomeProduct::count(), 'Anasayfa Ürünleri', route('home-products.index'));
            $sliders = $this->getWidgetData(Slider::count(), 'Slider', route('sliders.index'));
            $pages = $this->getWidgetData(Page::count(), 'Sayfalar', route('pages.index'));
            $socialMedia = $this->getWidgetData(SocialMedia::count(), 'Sosyal Medya', route('social-media.index'));
            $addresses = $this->getWidgetData(Address::count(), 'Adresler', route('addresses.index'));
            $users = $this->getWidgetData(User::count(), 'Kullanıcılar', route('users.index'));

            return compact(
                'categories',
                'products',
                'homeProducts',
                'sliders',
                'socialMedia',
                'addresses',
                'users'
            );
        });

        return view('index', compact('widgets'));
    }

    private function getWidgetData(string $count, string $title, string $url, string $icon = 'ion-stats-bars', $background = 'success'): array
    {
        $backgroundPalette = ['primary', 'info', 'warning', 'success', 'danger'];
        shuffle($backgroundPalette);

        return [
            'title' => $title,
            'icon' => $icon,
            'count' => $count,
            'url' => $url,
            'bg' => $backgroundPalette[0],
        ];
    }
}
