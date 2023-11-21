@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <p class="text-center pt-2 text-bold">Contact Message</p>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>

                            <td>{{ $contact->fullName }}</td>
                            <td>{{ $contact->eamil }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->message }}</td>


                            <td>
                                <form class="mt-2" action="{{ route('contacts.destroy',$contact->id) }}" method="POST">


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
