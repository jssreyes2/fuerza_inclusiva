<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class CheckRoleViewFrontedEmployer
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {

            #Si es distinto de rol Empleador o Candidato
            if (isset($user->rol->slug_text) and ($user->rol->slug_text != 'empleador')) {
                return redirect()->route('logout');
            }

            return $next($request);
        }

        return redirect()->route('logout');
    }
}
