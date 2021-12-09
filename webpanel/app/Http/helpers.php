<?php

/**
 * Tree list helpers
 */

/**
 * Tree list helper for selectbox
 *
 * @param array|collection $categories
 * @param string|int $parentId
 * @param string $prefix
 * @return void
 */
function selectTreeList($categories, $parentId = null, $prefix = '-')
{
    foreach ($categories as $category) {
        echo PHP_EOL . '<option ' . ($parentId === $category->id ? ' selected ' : '') . ' value="' . $category->id . '">' . ($prefix . ' ' . $category->title) . '</option>';

        selectTreeList($category->children, $parentId, $prefix . '-');
    }
}

function siderBarMenuTree($nodes)
{
    foreach ($nodes as $node) {
        echo '<li class="nav-item">
            <a href="" class="text-uppercase active">' . $node->title . '</a>
        </li>';

        selectTreeList($node->children);
    }
}

/**
 *
 * @param string $route
 * @param boolean $widcard
 * @return string
 */
function activeMenu(string $route, $widcard = true): string
{
    $route = trim('admin/' . $route, '/') . ($widcard ? '*' : '');

    return (request()->is($route) ?  ' active ' : '');
}

/**
 *
 * @param string $route
 * @param boolean $widcard
 * @return string
 */
function frontendActiveMenu(string $route, $widcard = true): string
{
    return isRoute($route, $widcard)  ?  ' active ' : '';
}

/**
 * @param string $route
 * @param boolean $widcard
 * @return string
 */
function isRoute(string $route, $widcard = true): string
{
    $route = str_replace(config('app.url'), '', $route);

    $route = trim($route, '/') . ($widcard ? '*' : '');

    return request()->is($route);
}

/**
 * @param string $source
 * @param string $value
 * @return string
 */
function isSelected(string $source, string $value): string
{
    return $source === $value ? ' selected ' : '';
}

/**
 *
 * @param string $key
 * @return mixed
 */
function setting(string $key, string $default = ''): ?string
{
    return optional(App\Setting::where('key', $key)->first(['value']))->value
        ?: $default;
}

/**
 * @param string $phone
 * @return string
 */
function phoneNumber(string $phone): string
{
    return preg_replace('/\D/', '', $phone);
}
