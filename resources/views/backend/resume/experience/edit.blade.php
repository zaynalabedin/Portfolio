@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Experience</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('experience-update',$experiences->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Duration :</label>
                            <input type="textarea" name="duration" value="{{ $experiences->duration }}" class="form-control">
                            <span class="text-danger">
                                @error('duration')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Position :</label></br>

                            <input type="text" name="position" value="{{ $experiences->position }}" class="form-control">


                            <span class="text-danger">
                                @error('position')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Company Name :</label>
                            <input type="text" name="companyName" class="form-control" value="{{ $experiences->companyName }}">
                            <span class="text-danger">
                                @error('companyName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" name="address" class="form-control" value="{{ $experiences->address }}">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <input type="text" name="description" class="form-control" value="{{ $experiences->description }}">
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        {{-- <div class="form-group">
                            <label>Description :</label>
                            <textarea type="text" name="description" class="form-control" value="{{ $experiences->description }}"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection
