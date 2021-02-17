<?php
namespace App\Http\Middleware;
use App;
use Closure;

class Localization {
    /**
     * Handle an incoming request, check session language, if not, the fallback language (en) will be used.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if (session()->has('locale')) {
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }
} 