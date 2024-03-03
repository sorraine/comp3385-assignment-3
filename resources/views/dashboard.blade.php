@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @foreach ($clients as $client)
    <div class="card text-center">
        <img src="{{ url('storage/' . $client->company_logo) }}" alt="" class="card-img-top">
        <div class="card-body">
            <h4 class-title>{{ $client->name }}</h4>
            <p class="card-text">
                <strong>{{ $client->email }}</strong> <br>
                <strong>{{ $client->telephone }}</strong> <br>
                <strong>{{ $client->address }}</strong>
            </p>
        </div>
    </div>
    @endforeach
@endsection
