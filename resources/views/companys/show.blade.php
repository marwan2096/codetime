@extends('layouts.master')

@section('title', 'Admin panel')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $company->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="font-size: 18px;">Name:</strong>
                <span style="font-size: 18px;">{{ $company->name }}</span>
            </div>
        </div>
        <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="font-size: 18px;">Email:</strong>
                <span style="font-size: 18px;">{{ $company->email }}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="font-size: 18px;">Logo:</strong>
                <br>
                @if ($company->logo)
                    <img src="{{ asset($company->logo) }}" alt="Company Logo" width="200px">
                @else
                    N/A
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
            <div class="form-group">
                <strong style="font-size: 18px;">Website:</strong>
                <span style="font-size: 18px;">{{ $company->website ?? 'N/A' }}</span>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
