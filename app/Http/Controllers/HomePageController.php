<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class HomePageController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register')
        ]);
    }

    /**
     * @return Response
     */
    public function twoFactor(): Response
    {
        return Inertia::render('Auth/TwoFactor');
    }

    /**
     * @return Response
     */
    public function verifyOtp(): Response
    {
        return Inertia::render('Auth/VerifyOtp');
    }
}
