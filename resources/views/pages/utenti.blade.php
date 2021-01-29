@extends('layouts.app')

@section('title', 'Utenti')

@section('content')

<h1>Utenti</h1>

<table border="1">
  <tr>
    <td>Id</td>
    <td>First name</td>
    <td>Last name</td>
    <td>Email</td>
    <td>Gender</td>
    <td>Image</td>
  </tr>
  @foreach($users as $user)
  <tr>
    <td> {{ $user['id'] }} </td>
    <td> {{ $user['first_name'] }} </td>
    <td> {{ $user['last_name'] }} </td>
    <td> {{ $user['email'] }} </td>
    <td> {{ $user['gender'] }} </td>
    <td> {{ $user['image'] }} </td>
  </tr>
  @endforeach
</table>

@endsection