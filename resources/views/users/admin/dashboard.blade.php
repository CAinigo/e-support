@extends('layouts.layout')

@section('content')
  <h1>Admin</h1>

  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
  </form>
@endsection