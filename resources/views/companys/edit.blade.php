<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb mb-5">
            <div class="pull-left">
                <br>
                <h2>Edit company</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
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
  <br>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $company->name }}" required>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Logo:</label>
                    <input class="form-control" type="file" name="logo" id="formFileMultiple" multiple>
                    <input type="text" class="form-control" name="old_logo" value="{{ $company->logo }}" readonly>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $company->email }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Website:</strong>
                    <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $company->website }}" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
    </form>


</div>

</body>
</html>
