@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input name="name" type="text" class="form-control">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input name="email" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="site" class="col-form-label">Site:</label>
                <input name="site" type="text" class="form-control" >
                @error('site')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="file" class="col-form-label">File:</label>
                <input name="file" type="file" class="form-control" >
                @error('file')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
        <hr>
        <table id="table" class="sortable table">
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
</div>
@endsection
