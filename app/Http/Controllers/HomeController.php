<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Artist;
use App\Models\Career;
use App\Models\CareerForm;
use App\Models\Demo;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role != null)
            return view('admin.dashboard.index', [
                'title' => 'Dashboard',
                'artist' => Artist::count(),
                'news' => News::count(),
                'event' => Event::count(),
                'about' => About::count(),
                'demo' => Demo::count(),
                'careers' => Career::count(),
                'form_careers' => CareerForm::count(),
            ]);
        else
            return view('home');
    }
}
