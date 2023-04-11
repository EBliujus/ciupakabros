@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id Nr.</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Personal ID</th>
        <th scope="col">Sąskaitos Nr.</th>
        <th scope="col">Balance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>{{$client->name}}  </td>
        <td>{{$client->surname}}  </td>
        <td>{{$client->personal_id}}  </td>
        <td>{{$client->iban}}  </td>
        <td>{{$client->balance}}  </td>
      </tr>
    </tbody>
  </table>
  <form action="{{ route('clients-add-money', $client) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Add Money</label>
        <input type="number" class="form-control" name="amount" value="{{ old('amount') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
</form>

<!-- Withdraw money form -->
<form action="{{ route('clients-withdraw-money', $client) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Withdraw Money</label>
        <input type="number" class="form-control" name="amount" value="{{ old('amount') }}" required>
    </div>
    <button type="submit" class="btn btn-danger">Withdraw</button>
</form>
  @endsection