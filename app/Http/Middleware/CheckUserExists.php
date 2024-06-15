<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CheckUserExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        $userId = $request->route('id');

        try {
            User::findOrFail($userId);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }

        return $next($request);
    }
}
