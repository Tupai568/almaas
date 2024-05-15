<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\DataUser;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {



        if (auth()->guest()) {
            abort(403);
        } else {
            $Data = DataUser::with(['user', 'jabatan'])->where('user_id', auth()->user()->id)->get();

            if ($Data[0]->jabatan->name == "User") {
                abort(403);
            }
        }


        return $next($request);
    }
}
