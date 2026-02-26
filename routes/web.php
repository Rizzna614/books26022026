<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/addbook", function () {
    return view("addBook");
});

Route::post("/booklist", [BookController::class, "create"]);
