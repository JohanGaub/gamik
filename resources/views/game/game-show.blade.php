@extends('admin.template')
@extends('layout.navbar')
@section('content')
    <div class="game-file">
        <h1>Game name</h1>
        <div class="row mt-4">
            <div class="media">
                <button type="button" data-toggle="modal" data-target="#myModal">
                    <img class="d-flex align-self-center mr-3" src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" alt="Game placeholder image" width = "150px"/>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Game name</h4>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" width="100%"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="row">
                        <h5 class="mt-0 ml-4">Summary:</h5>
                        <p class="ml-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus odio leo, et molestie risus cursus id. Ut sem nibh, tincidunt id eleifend imperdiet, varius vitae libero.
                            Vestibulum ultrices ante libero, eget pharetra enim volutpat ut. Nulla et ex metus. Aenean non purus velit. Nam non sem tellus. Vivamus sit amet libero eget eros euismod molestie.
                            Nunc lacinia suscipit felis, id posuere ex efficitur nec. Aenean aliquet, justo at facilisis scelerisque, ligula neque efficitur arcu, et hendrerit urna ex eget magna.</p>

                        <h5 class="mt-0 ml-4">Year:</h5>
                        <h5 class="mt-0 ml-2">Category:</h5>
                        <h5 class="mt-0 ml-2">Studio:</h5>
                        <h5 class="mt-0 ml-2">Platform:</h5>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
            <h5 class="mt-3">Comments:</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus odio leo, et molestie risus cursus id. Ut sem nibh, tincidunt id eleifend imperdiet, varius vitae libero.
                Vestibulum ultrices ante libero, eget pharetra enim volutpat ut. Nulla et ex metus. Aenean non purus velit. Nam non sem tellus. Vivamus sit amet libero eget eros euismod molestie.
                Nunc lacinia suscipit felis, id posuere ex efficitur nec. Aenean aliquet, justo at facilisis scelerisque, ligula neque efficitur arcu, et hendrerit urna ex eget magna.</p>
        </div>
        <div class="row ">
            <a class="m-auto"><i class="fa fa-plus-circle fa-3x " aria-hidden="true"></i></a>
        </div>
        <div class="row">
            <a><i class="fa fa-home fa-3x" aria-hidden="true"></i></a>
            <a><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>



























    <div class="row">
        <div class="col-6">

        </div>
        <div class="col">


        </div>
        <div class="col">


        </div>
@endsection