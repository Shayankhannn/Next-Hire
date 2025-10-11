<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
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
            'company_name' => ['required'],
            'companySize' => ['required', Rule::in(['1-10 (Startup / Small)','11-50 (Small to Medium)','51-200 (Medium)','201-500 (Large)','500+ (Enterprise)'])],
            'company_description' => ['nullable','string'],
            'logo' => ['required',File::types(['png','jpg','jpeg','webp '])],
        ]);

        $user = User::create($userAttr);
        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            "name"=>$employerAttr["employer"],
            "company_name"=>$employerAttr["company_name"],
            "companySize"=>$employerAttr["companySize"] ,
            "company_description"=>$employerAttr["company_description"] ?? null,
            "logo"=>$logoPath,
        ]);

        Auth::login($user);

        return redirect('/');

    }

}
