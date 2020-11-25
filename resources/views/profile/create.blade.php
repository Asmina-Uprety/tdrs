@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/profile/{{ $profile->id }}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                    <label for="difficulty_level">Difficulty Level</label>
                                    <input type="text" class="form-control" name="difficulty_level" id="difficulty_level" value="{{ $profile->difficulty_level }}" >
                            </div>
                            <div class="form-group">
                                    <label for="interest">Interest</label>
                                    <input type="text" class="form-control" name="interest" id="interest" value="{{ $profile->interest }}" >
                                    
                            </div>
                            <div class="form-group">
                                    <label for="tentative_budget">Tentative Budget</label>
                                    <input type="text" class="form-control" name="tentative_budget" id="tentative_budget"  value="{{ $profile->tentative_budget }}" >
                            </div>
                
                            <input type="submit" value="Save" class="btn btn-primary">

                                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>  



@endsection

