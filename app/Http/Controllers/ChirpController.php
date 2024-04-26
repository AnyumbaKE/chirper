<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validate);

        return redirect()->route('chirps.index');

    }
}