<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ChirpController extends Controller
{
    public function index(): Response
    {
        return response(" Hello, World");
    }
}