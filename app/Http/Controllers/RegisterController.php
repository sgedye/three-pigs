<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("pages.register");
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            "name" => "required|max:255"
        ]);

        // store
        User::create([
            "name" => $request->name
        ]);

        // redirect
        return redirect()->route("dashboard");
        
        //dd($request->name);
    }
}
