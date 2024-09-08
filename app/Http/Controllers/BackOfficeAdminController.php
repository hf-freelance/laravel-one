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
    public function control(Request $request): Response
    {
        $user = $request->user();
        $admin = $user->admin;
        
        if (!$admin) return Inertia::render('/');
        return  Inertia::render('BackOffice');;
    }
}
