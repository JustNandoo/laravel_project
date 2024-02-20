@extends('dashboard.views.layouts.main')

@section('container')

<h1>Selamat datang, {{auth()->user()->name ?? "Anonymus"}}</h1>

@endsection