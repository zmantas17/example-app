<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AllCategory extends Controller
{
    public function forma()
    {
        return view("pages.add-category");
    }

    

    public function storeCategory(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        Event::create([
            'title' => request('title')
        ]);
        return redirect("/");
    }
}
