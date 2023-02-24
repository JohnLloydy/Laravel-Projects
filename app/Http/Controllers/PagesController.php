<?php

namespace App\Http\Controllers;
use App\Models\ModelName;

class PagesController extends Controller
{
    public function index()
    {
        $ModalName = new ModelName();
        return view('index') -> with('content', $ModalName-> data());
    }
}