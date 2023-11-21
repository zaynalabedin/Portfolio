@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Education</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('education-update',$educations->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="textarea" name="duration" value="{{ $educations->duration }}" class="form-control">
                            <span class="text-danger">
                                @error('duration')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>School/Institute Name</label>
                            <input type="textarea" name="instituteName" value="{{ $educations->instituteName }}" class="form-control">
                            <span class="text-danger">
                                @error('instituteName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $educations->address }}">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Program</label>
                            <input type="text" name="program" class="form-control" value="{{ $educations->program }}">
                            <span class="text-danger">
                                @error('program')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Group</label></br>

                            <input type="text" name="group" value="{{ $educations->group }}" class="form-control">


                            <span class="text-danger">
                                @error('group')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="{{ $educations->description }}">
                            <span class="text-danger">
                                @error('description')
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
