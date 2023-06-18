@extends('layouts.master')
@section('title')
Admin panel
@endsection
@section('content')




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


@endsection


@section('scripts')

@endsection
