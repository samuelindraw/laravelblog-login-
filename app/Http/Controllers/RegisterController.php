<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=> 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        //$variable request menyimpan data input 
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' =>  ['required','min:3','max:255','email:dns'],
            'password' => 'required|min:5|max:255'
        ]);
        //untuk ngedecrpt data
        //cara ambil v 
        //$validatedData['password'] = bycrpt($validatedData['password']);
        //dd('registrasi oke');
       //    return $request->all();
       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
       //$request->session()->flash('success','Registration Success');
       return redirect('/login')->with('success','Registration Success');
    }
}
