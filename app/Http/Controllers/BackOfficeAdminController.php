<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class BackOfficeAdminController extends Controller
{
    /**
     * Display the admin view.
     */
    public function create(Request $request): Response | RedirectResponse 
    {
        $user = $request->user();
        $admin = $user->admin;

        $users = User::all();

        if ($admin == 1) return Inertia::render('BackOffice', ['users' => $users]);
        return redirect(route('dashboard'));
    }
}
