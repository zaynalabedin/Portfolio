@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">About Description</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('about-update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>About Description :</label>
                            <textarea type="text" name="about_name" value={{ $about->about_name }} cols="30" rows="10" class="form-control"></textarea>
                            <span class="text-danger">
                                @error('about_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection
