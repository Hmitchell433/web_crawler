<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 * php version 7.2
 *
 * @category Web_Framework
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 * @license  https://laravel.com/ MIT
 * @link     https://laravel.com/
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class
 *
 * @category Controller
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 * @license  https://laravel.com/ MIT
 * @link     https://laravel.com/
 */

class PageController extends Controller
{
    /**
     * Display the "not found" page.
     *
     * @return \Illuminate\View\View
     */
    public function notfound()
    {
        return view('404');
    }
}
