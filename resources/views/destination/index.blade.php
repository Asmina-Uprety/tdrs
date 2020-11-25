@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Destination</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($destinations as $destination)
                                <tr>
                                    <td>{{ $destination->title }}</td>
                                    <td><img src="/images/{{ $destination->featured_image  }}" class="img-fluid" ></td>
                                    <td>
                                        {{ $destination->type }}
                                    </td>
                                    <td>
                                        Edit / Delete
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
