@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Skills Language</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('skillLanguage-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Skill Language Name</label>
                            <input type="textarea" name="skills_languageName" value="{{ old('skills_languageName') }}" class="form-control" placeholder="Enter Skills Language">
                            <span class="text-danger">
                                @error('skills_languageName')
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
