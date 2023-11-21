@extends('layouts.app')
@section('content')
    {{--  Experience --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.resume.experience.create') }}" target="blank">Create New
        Experience</a>
    <div class="card">
        <div class="card-body">
            @if (session()->has('experience'))
                <div class="alert alert-success">
                    {{ session()->get('experience') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Duration</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiences as $experience)
                        <tr>

                            <td>{{ $experience->duration }}</td>
                            <td>{{ $experience->position }}</td>
                            <td>{{ $experience->companyName }}</td>
                            <td>{{ $experience->address }}</td>
                            <td>{{ $experience->description }}</td>
                            <td>
                                <form class="mt-2" action="{{ route('experience.destroy', $experience->id) }}"
                                    method="POST">

                                    <a class="btn btn-warning"
                                        href="{{ route('backend.resume.experience.edit', $experience->id) }}"
                                        target="_blank">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{--  Education --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.resume.education.create') }}" target="blank">Create New
        Education</a>
    <div class="card">
        <div class="card-body">
            @if (session()->has('education'))
                <div class="alert alert-success">
                    {{ session()->get('education') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Duration</th>
                        <th scope="col">School/Institute Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Program</th>
                        <th scope="col">Group</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $education)
                        <tr>

                            <td>{{ $education->duration }}</td>
                            <td>{{ $education->instituteName }}</td>
                            <td>{{ $education->address }}</td>
                            <td>{{ $education->program }}</td>
                            <td>{{ $education->group }}</td>
                            <td>{{ $education->description }}</td>
                            <td>
                                <form class="mt-2" action="{{ route('education.destroy', $education->id) }}"
                                    method="POST">

                                    <a class="btn btn-warning"
                                        href="{{ route('backend.resume.education.edit', $education->id) }}"
                                        target="_blank">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{--  Professional Skills --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.resume.professionalSkills.create') }}" target="blank">Create New
        Professional Skills</a>
    <div class="card">
        <div class="card-body">
            @if (session()->has('skills'))
                <div class="alert alert-success">
                    {{ session()->get('skills') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Professional Skills Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>

                            <td>{{ $skill->skills_Name }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('professionalSkill.destroy', $skill->id) }}"
                                    method="POST">

                                    {{-- <a class="btn btn-warning"
                                        href="{{ route('backend.resume.education.edit', $education->id) }}"
                                        target="_blank">Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{--  Skills Language --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.resume.skillLanguage.create') }}" target="blank">Create New
        Skills Language</a>
    <div class="card">
        <div class="card-body">
            @if (session()->has('skillLanguage'))
                <div class="alert alert-success">
                    {{ session()->get('skillLanguage') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Skill Language Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($skillLanguages as $skillLanguage)
                        <tr>

                            <td>{{ $skillLanguage->skills_languageName }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('skillLanguage.destroy', $skillLanguage->id) }}"
                                    method="POST">

                                    {{-- <a class="btn btn-warning"
                                        href="{{ route('backend.resume.education.edit', $education->id) }}"
                                        target="_blank">Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
