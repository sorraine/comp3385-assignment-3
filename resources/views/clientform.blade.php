
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Feedback Form</h1>
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

            <form action="/clients" enctype="multipart/form-data" method="post">            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                <p class="form-text fw-semibold">Format:xxx-xxx-xxxx.</p>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
            </div>
            <div class="mb-3">
                <label for="companylogo" class="form-label">Company Logo <span class="text-danger">*</span></label>
                <input type="file" name="companylogo" id="companylogo" class="form-control">
                <p class="form-text text-body-secondary">Only image files (e.g. jpg, png) are allowed and files must be less than 2MB</p>            </div>

            <div>
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
        </form>
    </div>
@endsection

