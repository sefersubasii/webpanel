<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    /**
     * Sperate Front and Back 404 pages
     *
     * @return void
     */
    protected function registerErrorViewPaths()
    {
        $viewScopePath = config('view.frontend');

        if (request()->is('admin') || request()->is('admin/*')) {
            $viewScopePath = config('view.backend');
        }

        $viewScopePath .= '/errors';

        View::replaceNamespace('errors', [
            $viewScopePath,
            base_path('vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views')
        ]);
    }
}
