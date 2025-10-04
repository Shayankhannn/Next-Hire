<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userAttr =  $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' =>[ 'required','confirmed',Password::min(8)], 
        ]);
       $employerAttr =  $request->validate([
            'employer' => ['required'],
            'logo' => ['required',File::types('jpg','png','jpeg','webp ')],
        ]);

        $user = User::create($userAttr);
        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            "name"=>$employerAttr["employer"],
            "logo"=>$logoPath,
        ]);

        Auth::login($user);

        return redirect('/');

    }

}
