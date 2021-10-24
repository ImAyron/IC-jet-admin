<?php

namespace App\Http\Controllers;

use App\Models\User;
use stdClass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        //$this->authorize('is_admin');

        $user_counters = new stdClass;
        $user_counters->all_users = $this->user->all()->count();
        $user_counters->administrator_users = $this->user->where('profile','administrator')->count();
        $user_counters->user_users = $this->user->where('profile','user')->count();

        $users = $this->user->paginate(5);

        return view('dashboard',['users'=>$users,
                            'user_counters'=>$user_counters]);
    }


}
