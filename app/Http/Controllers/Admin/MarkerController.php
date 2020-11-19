<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MarkerRequest;
use App\Models\Marker;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MarkerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Paginator::useBootstrap();
        $this->middleware('auth'); //@todo admin_only
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $markers = Marker::latest()->paginate(10);
        return view('admin.marker.index')->with(['markers' => $markers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarkerRequest $request)
    {
        Marker::create($request->all());

        return redirect()->route('markers.index')
            ->with('success', 'Marker created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Marker $marker)
    {
        return view('admin.marker.edit', compact('marker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarkerRequest $request, Marker $marker)
    {
        $marker->update($request->all());

        return redirect()->route('markers.index')
            ->with('success', 'Marker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marker $marker)
    {
        $marker->delete();

        return redirect()->route('markers.index')
            ->with('success', 'Marker deleted successfully');
    }
}
