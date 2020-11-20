@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ count($map_markers) . (Auth::check() ? " " : " public ") . __('Markers') . " found"}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('/') }}" method="get">
                        <div class="form-group">
                            <input
                                type="text"
                                name="q"
                                class="form-control"
                                placeholder="Search..."
                                value="{{ request('q') }}"
                            />
                        </div>
                    </form>
                        @map([
                            'lat' => 50.45466,
                            'lng' => 30.5238,
                            'zoom' => 1,
                            'markers' => $map_markers
                        ])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
