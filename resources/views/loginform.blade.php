
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>LOGIN</h1>
        <br>

        @if ($errors->any())
             <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
 </div>
@endif

        <form method="POST" action="{{ url('/feedback/send') }}">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

