<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_petugas' => 'required',
            'nip' => 'required',
            'pwd' => 'required',
            'kode_pkm' => 'required',
            'email' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'jenis_petugas' => $request->jenis_petugas,
            'nip' => $request->nip,
            'pwd' => $request->pwd,
            'kode_pkm' => $request->kode_pkm,
            'role_id' => 'petugas',
            'email' => $request->email,
        ]);


        $credentials = $request->only('username', 'password');
        // Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')
            ->withSuccess('You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /** 
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect()->route('login')
            ->withErrors([
                'email' => 'Please login to access the dashboard.',
            ])->onlyInput('email');
    }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}