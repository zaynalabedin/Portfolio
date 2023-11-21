@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Education</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('education-store') }}" method="POST" enctype="multipart/form-data">
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
                            <label>School/Institute Name</label></br>
                            {{-- <textarea name="description" style="width:100%"> --}}
                            <input type="text" name="instituteName" value="{{ old('instituteName') }}" class="form-control" placeholder="Enter School or Institute Name">
                            {{-- </textarea> --}}

                            <span class="text-danger">
                                @error('instituteName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Enter Institute Address">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Program</label>
                            <input type="text" name="program" class="form-control" value="{{ old('program') }}" placeholder="Enter Certificate Name">
                            <span class="text-danger">
                                @error('program')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Group</label>
                            <input type="text" name="group" class="form-control" value="{{ old('group') }}" placeholder="Enter Major Group">
                            <span class="text-danger">
                                @error('group')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="{{ old('description') }}" placeholder="Enter description">
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
