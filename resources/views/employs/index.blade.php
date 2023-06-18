@extends('layouts.master')
@section('title')
Admin panel
@endsection
@section('content')


<br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New employees</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
        <td>{{ $employee->company->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->phone }}</td>
        <td>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


    {{ $employees->links() }}


    
    @endsection

    @section('scripts')


    @endsection
