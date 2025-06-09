<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use BeyondCode\Comments\Comment;

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
            $today = Carbon::today();
    return view('home', [
        'cards' => [
            ['label' => 'Total Users',       'value' => User::count()],
            ['label' => 'New Users Today',   'value' => User::whereDate('created_at', $today)->count()],
            ['label' => 'Total Posts',       'value' => Post::count()],
            ['label' => 'Draft Posts',       'value' => Post::where('published', '0')->count()],
            ['label' => 'Total Comments',    'value' => Comment::count()],
            // ['label' => 'Pending Comments',  'value' => Comment::where('approved', false)->count()],
            ['label' => 'Total Services',    'value' => Service::count()],
            // ['label' => 'Testimonials',      'value' => Testimonial::where('approved', true)->count()],
        ]
    ]);

    }
}
