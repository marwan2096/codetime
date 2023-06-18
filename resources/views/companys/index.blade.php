@extends('layouts.master')

@section('title', 'Admin panel')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Companies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success text-lg font-weight-bold" href="{{ route('companies.create') }}">Create New Company</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered custom-table">
        <tr>
            <th class="text-lg">ID</th>
            <th class="text-lg">Name</th>
            <th class="text-lg">Email</th>
            <th class="text-lg">Logo</th>
            <th class="text-lg">Website</th>
            <th class="text-lg">Actions</th>

        </tr>
        @foreach ($companys as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                    @if ($company->logo)
                        <img src="{{ asset($company->logo) }}" alt="Company Logo" width="60px">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $company->website }}</td>

                <td>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('companies.show', $company->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $companys->links() }}
@endsection

@section('scripts')
    <!-- Additional scripts can be included here if needed -->
@endsection
