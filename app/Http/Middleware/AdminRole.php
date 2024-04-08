<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminRole
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        $routeName = $request->route()->getName();

        switch ($routeName) {
            case 'cars.index':
            case 'cars.create':
            case 'cars.edit':
            case 'cars.destroy':
                return redirect()->route('cars.index')->with('error', 'Negalimas veiksmas.');
            default:
                return redirect()->route('owners.index')->with('error', 'Negalimas veiksmas.');
        }
    }
}
