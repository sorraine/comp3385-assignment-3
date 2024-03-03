@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>

    <form class="float-end" action="{{ route('clients.create') }}"> 
    <button type="submit" class="btn btn-primary">Create New Client</button>
    </form>

    

    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


    <div class="row row-cols-1 row-cols-md-3 g-4">
    
    @foreach ($clients as $client)
    <div class="col">
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
    </div>
    @endforeach

</div>

   
@endsection
