@foreach ($menus as $menu)
    @if(isset($menu['children']) && $menu['children'])
        <li class="nav-item d-block w-100 {{ isset($children)  ? 'ml-2' : ''}}">
            <div class="panel panel-default">
                <a class="{{ isset($children)  ? 'nav-link p-1 small font-weight-500' : 'parentMenu text-uppercase'}}" role="button" data-toggle="collapse" href="#{{ $menu['slug'] }}"  aria-expanded="false"  aria-controls="{{ $menu['slug'] }}">
                    {{ $menu['title'] }}
                </a>
                <div id="{{ $menu['slug'] }}" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <ul class="nav">
                            @include('layouts._partials.products.sidebar', [
                                'menus' => $menu['children'],
                                'children' => true
                            ])
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    @elseif(isset($children) && $children)
        <li class="d-block w-100 ml-2 {{ isset($menu['children']) ? 'nav-item' : '' }}">
            <a href="{{ route('frontend.product.category_product.show', $menu['slug']) }}" class="nav-link p-1 small font-weight-500 {{ $menu['active'] ? 'active' : '' }}">
                {{ $menu['title'] }}
            </a>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('frontend.product.category_product.show', $menu['slug']) }}" class="text-uppercase {{ $menu['active'] ? 'active' : '' }}">{{ $menu['title'] }}</a>
        </li>
    @endisset
@endforeach