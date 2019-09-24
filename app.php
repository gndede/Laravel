<?php

$app->singleton(
	Illuminate\Contracts\Debug\ExceptionHandler::Class,
	App\Exceptions\Handler::class
);

$app->singleton(
	Illuminate\Contracts\Console\kerne::class,
	App\Console\Kernel::class
);

/*
|----------------------------------------------------------------------------
|Register Middleware
|----------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a 
| route or middleware that'll assigned to some specific routes.
|*/

/* $app->mddleware([
| Illuminate\Cookie\Middleware\EncryptCookies::class,])
| Illuminate\Cookie\Middleware\AddQueueCookiesToResponse::class
| Illuminate\Session\Middleware\StartSession::class,
| Illuminate\View\Middleware\ShareErrorsFromSession::class,
| Laravel\Lumen\Http\Middleware\VerifyCstfToken::class,
|
]); */

])
//line 67

$app->routeMiddleware([
	Laravel\Lumen\Http\Middleware\VerifyCsrfToken::Class
]);


/*
|
|----------------------------------------------------------------------------
|Register Service Provider
|----------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this rule.
|
*/