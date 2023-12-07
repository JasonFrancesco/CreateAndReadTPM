<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakimController extends Controller
{
    public function redirectToCreateHakimPage()
    {
        return view('create_book');
    }


    public function createHakim(Request $request)
    {
        // dd($request -> jabatan);
    Book::create([
            'Jabatan' => $request -> jabatan_hakim_input ,
            'author' => $request -> author_input 
            // 'updated_at' => now()
        ]);

        return redirect('/');
    }     
}