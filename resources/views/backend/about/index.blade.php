@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.about.create') }}" target="blank">Create About</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">About Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $about)
                        <tr>

                            <td>{{ $about->about_name }}</td>
                            

                            
                            <td>

                                    <a class="btn btn-warning" href="{{ route('backend.about.edit',$about->id) }}"
                                        target="_blank">Edit</a>    

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
