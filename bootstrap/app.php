<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

    // dans bootstrap/app.php

$app = new Illuminate\Foundation\Application(
    dirname(__DIR__)
);

// ici d’autres configurations…

$app->withMiddleware(function (\Illuminate\Foundation\Configuration\Middleware $middleware) {
    // Ajouter le middleware SetLocale dans le groupe web
    $middleware->web(append: [
        \App\Http\Middleware\SetLocale::class,
        
    ]);
    class SetLocale
{
    public function handle($request, Closure $next)
    {
        // On récupère la langue stockée en session (fr ou en)
        // Si aucune langue n’est trouvée, on utilise la langue par défaut du site
        $locale = Session::get('locale', config('app.locale'));

        // Laravel utilise cette langue pour toutes les traductions
        App::setLocale($locale);

        // On continue le chargement de la page
        return $next($request);
    }
}
    
    // Si tu le veux globalement (pour toutes les routes), tu pourrais utiliser append() directement :
     $middleware->append(\App\Http\Middleware\SetLocale::class);
});

