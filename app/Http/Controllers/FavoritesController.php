<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Micropost;

class FavoritesController extends Controller
{
    public function store(string $micropostId)
    {
       
        \Auth::user()->addFavorite(intval($micropostId));
        return back();
    }
    
    public function destroy(string $micropostId)
    {
        
        \Auth::user()->unFavorite(intval($micropostId));
        return back();
    }
}