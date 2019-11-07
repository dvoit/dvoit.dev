<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //REMOVING login and register abilities from WELCOME.BLADE.PHP
    //The below html only has removed the @ annotation before 'if', 'endif', 'else', 'auth', and 'endauth'.
    /**
     * if (Route::has('login'))
     *   <div class="top-right links">
     *     auth
     *       <a href="{{ url('/home') }}">Home</a>
     *     else
     *       <a href="{{ route('login') }}">Login</a>
     *       if (Route::has('register'))
     *         <a href="{{ route('register') }}">Register</a>
     *       endif
     *     endauth
     *   </div>
     * endif
    */

    //ALSO removed auth links (login/logout/register from APP.BLADE.PHP)
    //The below html only has removed the @ annotation before 'guest', 'if', 'endif', 'else', and 'endguest'.
    /**
     * guest
     *   <li class="nav-item">
     *     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
     *   </li>
     *   if (Route::has('register'))
     *     <li class="nav-item">
     *     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
     *     </li>
     *   endif
     * else
     *   <li class="nav-item dropdown">
     *     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
     *       {{ Auth::user()->name }} <span class="caret"></span>
     *     </a>
     *     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
     *       <a class="dropdown-item" href="{{ route('logout') }}"
     *         onclick="event.preventDefault();
     *         document.getElementById('logout-form').submit();">
     *         {{ __('Logout') }}
     *       </a>
     *       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     *         csrf
     *       </form>
     *     </div>
     *   </li>
     * endguest
     */
    return view('welcome');
});

Route::get('/about', function () {
   return view('about');
});

Auth::routes([
    /** I'm removing registration for now. */
    'register' => false,
    'about' => true
]);

//Don't need a home page right now, show 404 for now.
//Route::get('/home', 'HomeController@index')->name('home');

//Redirect users attempting to reach /login (don't want it for now) to welcome page.
Route::get('/login', 'Auth\LoginController@redirectToWelcomePage');
