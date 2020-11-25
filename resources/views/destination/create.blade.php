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

                    <form action="{{ route('destination.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                   <label for="title">Title</label>
                                   <input type="text" class="form-control" name="title" id="title" >
                            </div>
                            <div class="form-group">
                                   <label for="description">Description</label>
                                   <input id="description" type="hidden" name="description">
                                   <trix-editor input="description"></trix-editor>
                                   
                            </div>
                            <div class="form-group">
                                   <label for="difficulty_level">Difficulty Level</label>
                                   <input type="text" class="form-control" name="difficulty_level" id="difficulty_level" >
                            </div>
                            <div class="form-group">
                                   <label for="featured_image">Featured Image</label>
                                   <input type="file" class="form-control" name="featured_image" id="featured_image" >
                            </div>
                            <div class="form-group">
                                   <label for="tentative_budget">Tentative Budget</label>
                                   <input type="text" class="form-control" name="tentative_budget" id="tentative_budget" >
                            </div>
                            <div class="form-group">
                                   <label for="best_season">Best Season</label>
                                   <input type="text" class="form-control" name="best_season" id="best_season" >
                            </div>
                            <div class="form-group">
                                   <label for="type">Type</label>
                                   <input type="text" class="form-control" name="type" id="type" >
                            </div>
                            <div class="form-group">
                                   <label for="estimated_days">Estimated Days</label>
                                   <input type="text" class="form-control" name="estimated_days" id="estimated_days" >
                            </div>

                            <input type="submit" value="Save" class="btn btn-primary">

                    
                     </form>

                </div>
            </div>
        </div>
    </div>
</div>  
 


@endsection

@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js"></script>
@endsection

@section('css')
   <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css">  
@endsection
