<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function create ()
    {
        Book::create([
            $title = $request -> title,
            $author = $request -> author,
            $date = $request -> date,
            $desc = $request -> desc,
        ]);

        return view ("bookList");
    }
}
