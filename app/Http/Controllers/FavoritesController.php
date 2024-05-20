<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Micropost;

class FavoritesController extends Controller
{
    public function store(string $micropostId)
    {
        $micropost = Micropost::findOrFail(intval($micropostId));
        \Auth::user()->addFavorite($micropost->id);
        return back();
    }
    
    public function destroy(string $micropostId)
    {
        $micropost = Micropost::findOrFail(intval($micropostId));
        \Auth::user()->removeFavorite($micropost->id);
        return back();
    }
}