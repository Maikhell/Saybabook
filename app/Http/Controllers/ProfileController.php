<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View as ViewContract;

class ProfileController extends Controller
{
    private function getUserHeaderData()
    {
        $userHeaderData = User::where('id', Auth::id())
            ->select('id', 'username', 'image')
            ->first();

        if (!$userHeaderData) {
            return redirect()->route('login');
        }
        return $userHeaderData;
    }
    public function showMyBooksHeader(): ViewContract|RedirectResponse
    {
        $userHeaderData = $this->getUserHeaderData();
        if ($userHeaderData instanceof RedirectResponse) {
        }
        return view('mybooks', compact('userHeaderData'));
    }
    public function showUserBooksHeader(): ViewContract|RedirectResponse
    {
        $userHeaderData = $this->getUserHeaderData();
        if ($userHeaderData instanceof RedirectResponse) {
        }
        return view('userbooks', compact('userHeaderData'));
    }

}
