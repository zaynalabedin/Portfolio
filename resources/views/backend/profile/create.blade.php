@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Profile</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('profile-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="textarea" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Image :</label></br>
                            {{-- <textarea name="description" style="width:100%"> --}}
                            <input type="file" name="image" class="form-control">
                            {{-- </textarea> --}}

                            <span class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection
