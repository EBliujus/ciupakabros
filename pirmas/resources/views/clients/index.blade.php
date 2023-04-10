@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Client List</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id Nr.</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Personal ID</th>
                                <th>Sąskaitos Nr.</th>
                                <th>Balance</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                            @forelse ($clients as $client) : 
                                <tr>
                                    <td>{{ $client -> id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>{{ $client->personalId }}</td>
                                    <td>{{ $client->iban }}</td>
                                    <td>{{ $client->balance }}</td>
                                    <td>
                                        <div class="myg-container">
                                            <a href="{{route('clients-show', $client)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('clients-edit', $client)}}" class="btn btn-success">Edit</a>
                                            <form action="{{route('clients-delete', $client)}}" method="post">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="card-body">
                                <div class="client-line">No Accounts</div>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection