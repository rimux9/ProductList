<!DOCTYPE html>
<html>
<head>
    <title>Laravel CSV import</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container" style="margin-top: 5rem;">
    @if($message = Session::get('success'))
    <div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Puiku!</strong> {{ $message }}
    </div>
    @endif
    {!! Session::forget('success') !!}
    <br />
    <h2 class="text-title">Atsisiusti arba Importuoti i DB CSV faila </h2>
    <a href="{{ route('exportExcel', 'csv') }}"><button class="btn btn-success">Atsisiusk CSV</button></a>
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="import_file" />
        <button class="btn btn-primary">Importuoti Faila</button>
    </form>
</div>

</body>
</html>
