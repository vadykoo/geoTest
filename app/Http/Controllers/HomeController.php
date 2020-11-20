<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $q = $request->q;
        if(Auth::check()) {
            $markers = Marker::query();
        } else {
            $markers = Marker::public();
        }

        $markers = $markers
        ->when($q, function ($query, $q) {
            return $query->where('description', 'like', "%{$q}%")
            ->orWhere('name', 'like', "%{$q}%");
        })
        ->latest()
        ->get();

        $map_markers = [];

        foreach ($markers as $marker) {
            $map_markers[] = [
            'title' => $marker->name,
            'lat' => $marker->lat,
            'lng' => $marker->long,
            'popup' => "<h3>$marker->name</h3><p>$marker->description</p>",
            ];
        }

        return view('home')->with(['markers' => $markers, 'map_markers' => $map_markers]);
    }
}
