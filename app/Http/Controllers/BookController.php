<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function addBooks(Request $request): RedirectResponse{

        $incomingFields = $request->validate([
            'bookTitle' => ['required'], // Book Title
            'bookDescription' => ['required'], //Synopsis/Introduction
            'bookAuthor' =>['required'], // Book Author
            'bookStatus' => ['required'], //Reading/Completed/OnHold/PlantoRead/Dropped
            'bookCategory' => ['required'], //Book/Manga
            'bookGenre' => ['required'],//Fiction Non-fiction etc.
            'bookLink' => ['required'],//Book Online Link
            'dateAdded' => ['required']
        ]);
    }
}
