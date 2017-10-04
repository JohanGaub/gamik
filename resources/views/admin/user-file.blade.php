@extends('admin.template')
@extends('layout.navbar')

@section('content')

    <div class="game-file">
        <div class="d-flex justify-content-center">
            <form class="col-sm-3">
                <h2 class="text-center">User File</h2>
                <div class="form-group">
                    <label for="name">Firstname</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div><div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div><div class="form-group">
                        <label for="example-email-input">Email</label>
                        <input class="form-control" type="email" value="YourEmail@exemple.com" id="example-email-input">
                    </div><div class="form-group">
                        <label for="name">User</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-12">
                <a><i class="fa fa-home fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection
