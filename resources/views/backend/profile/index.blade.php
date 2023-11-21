@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.profile.create') }}" target="blank">Add Profile</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>

                            <td>{{ $profile->name }}</td>
                            

                            <td>
                                <img src="{{ asset('public/image/' . $profile->image) }}"
                                    style="height: 80px; width:120px;">
                            </td>
                            <td>
                               

                                    <a class="btn btn-warning" href="{{ route('backend.profile.edit',$profile->id) }}"
                                        target="_blank">Edit</a>
                                   
                                    
                                    
                                

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
