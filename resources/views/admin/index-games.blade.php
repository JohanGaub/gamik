@extends('admin.template')
@extends('layout.navbar')

@section('content')
    <div class="index-game">
    <h1 class="text-center">Games</h1>
    <table class="table table-hover">

        <tr>
            <th><input type="checkbox" aria-label="Checkbox for following text input"></th>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Year</th>
            <th>Studio</th>
            <th>Summary</th>
            <th>Categories</th>
            <th>Platforms</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <th scope="row">1</th>
            <td>Zelda</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <th scope="row">2</th>
            <td>Mario</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-11 ml-sm-auto">
            <a><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
        </div>
        <div class="col-sm-1 pull-right">
            <a><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
     <a><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
    </div>



@endsection
