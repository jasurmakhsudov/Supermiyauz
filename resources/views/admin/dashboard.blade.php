@extends('layouts.master')

@section('title', 'Welcome to Admin Panel')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            
        </div>
    </nav>
    @yield('content')

</div>

@endsection