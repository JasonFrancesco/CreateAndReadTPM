<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home() 
    {
       
        $a = "Yang Mulia majelis Hakim Konstitusi Benz";
        $list_hakim = Book::all();
        return view('home',[
            "message" => $a,
            "list_hakim" => $list_hakim
        ]);
    }
   
 }
