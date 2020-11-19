@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 markers list </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('markers.create') }}" title="Create a marker"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>lat/long</th>
            <th>public</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($markers as $marker)
            <tr>
                <td>{{ $marker->id }}</td>
                <td>{{ $marker->name }}</td>
                <td>{{ $marker->description }}</td>
                <td>{{ $marker->lat }} | {{ $marker->long }}</td>
                <td>{{ $marker->is_public }}</td>
                <td>{{ date_format($marker->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('markers.destroy', $marker->id) }}" method="POST">

                        <a href="{{ route('markers.edit', $marker->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $markers->links() }}

@endsection
