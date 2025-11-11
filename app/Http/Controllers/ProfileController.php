<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View; 
use Illuminate\Contracts\View\View as ViewContract;
class ProfileController extends Controller
{
    public function showProfileHeader(): ViewContract
    {
        $userHeaderData = User::where('id', Auth::id())
            ->select('id', 'username', 'image')
            ->first();
        if (!$userHeaderData) {
            return redirect()->route('login');
        }
        return view('mybooks', compact('userHeaderData'));

    }
}
