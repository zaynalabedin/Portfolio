@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">Professional Skills</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('professionalSkill-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Skill Name</label>
                            <input type="textarea" name="skills_Name" value="{{ old('skills_Name') }}" class="form-control" placeholder="Enter professionalSkill">
                            <span class="text-danger">
                                @error('skills_Name')
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
