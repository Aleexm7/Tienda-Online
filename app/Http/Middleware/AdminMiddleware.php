<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // El usuario no está autenticado
            return redirect('/login');
        }

        if (!Auth::user()->hasRole('admin')) {
            // No tiene el rol de administrador
            return redirect('/')->with('Acceso denegado');
        }

        // if (Auth::user()->hasRole('admin')) {
        //     // No tiene el rol de administrador
        //     return view('dashboardadmin');
        // }


        // Continuar con la petición si tiene el rol
        return $next($request);
    }
}
