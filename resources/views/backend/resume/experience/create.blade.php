@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Experience</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('experience-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="textarea" name="duration" value="{{ old('duration') }}" class="form-control" placeholder="Enter Duration Year">
                            <span class="text-danger">
                                @error('duration')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Position</label></br>
                            {{-- <textarea name="description" style="width:100%"> --}}
                            <input type="text" name="position" value="{{ old('position') }}" class="form-control" placeholder="Enter position">
                            {{-- </textarea> --}}

                            <span class="text-danger">
                                @error('position')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="companyName" class="form-control" value="{{ old('companyName') }}" placeholder="Enter Company Name">
                            <span class="text-danger">
                                @error('companyName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Enter Company address">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control" value="{{ old('description') }}" placeholder="Enter description"></textarea>
                            <span class="text-danger">
                                @error('description')
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
