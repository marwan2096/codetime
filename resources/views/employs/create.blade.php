
@extends('layouts.master')
@section('title')
Admin panel
@endsection

@section('content')
<br><br>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add cemployee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
</div>



@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="company_id">Company:</label>
        <select name="company_id" class="form-control">
            <option value="">Select Company</option>
            @foreach($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection

@section('scripts')


@endsection
