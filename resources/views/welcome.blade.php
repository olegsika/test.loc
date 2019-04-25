<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestTask</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="container">
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="site" class="col-form-label">Site:</label>
                        <input name="site" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-form-label">File:</label>
                        <input name="file" type="file" class="form-control" >
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Site</th>
                    <th>File</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{$feedback->site}}</td>
                        <td><img class="rounded-circle" src="{{ asset('/storage/'. $feedback->file) }}" width="50px" height="50pz"></td>
                        <td>{{ $feedback->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
