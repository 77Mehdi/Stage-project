<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Collaborateure;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'mle' => ['required'],
            'serves'=>['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);  

        $Collaborateure = new Collaborateure();
        $Collaborateure->nome = $request->name;
        $Collaborateure->prenom = $request->prenom;
        $Collaborateure->mle = $request->mle;
        $Collaborateure->service = $request->serves;
        $Collaborateure->email = $request->email;

        

      

        $user = User::create([
            
            'name' => $request->name,
            'prenom' => $request->prenom,
            'mle' => $request->mle,
            'serves' => $request->serves,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $Collaborateure->save();

        event(new Registered($user));

       
   

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
