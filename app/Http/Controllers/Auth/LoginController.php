<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


        use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


        protected function authenticated(Request $request, $user)
{
    // Get the user's role
    $userRole = $user->role;

    // Check user role and redirect accordingly
    if ($userRole === 'admin' || $userRole === 'teacher') {
        return redirect()->route('courses.index')->with('success', 'You have successfully logged in as an ' . ucfirst($userRole));
    } else {
        return redirect()->route('courses.show', ['course' => $user->id])->with('success', 'You have successfully logged in as a Student');
    }
}


}
