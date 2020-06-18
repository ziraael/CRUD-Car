@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <h1 class="display-4 mt-4 mb-4">Car crud application</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="" id="shto-veture" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Shto nje veture</a>
                            
            <!-- Add Modal -->
            <div class="modal fade right" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-notify modal-success" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Preferencat e vetures</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        {{-- car prej resource e thirr store n controller --}}
                    <form action="{{route('car.store')}}" method="post">
                    @csrf

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Lloji</span>
                            </div>

                            <input type="text" class="form-control" name="lloji" placeholder="Shtypni llojin" required>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ngjyra</span>
                            </div>

                            <input type="text" class="form-control" name="ngjyra" placeholder="Shtypni ngjyren" required>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Viti</span>
                            </div>

                            <input type="number" class="form-control" name="viti" placeholder="Shtypni vitin" required>
                        </div>
                        
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Te kaluara</span>
                            </div>

                            <input type="number" class="form-control" name="kaluara" placeholder="Shtypni te kaluarat" required>
                        </div>
                        
                        <br>

                        <div class="input-group align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text">I demtuar</span>
                            </div>

                            <label class="mb-0 p-2" for="po_value">Po</label>
                            <input type="radio" id="po_value" name="demtuar" value="Po" required>
                            <label class="mb-0 p-2" for="jo_value">Jo</label>
                            <input type="radio" id="jo_value" name="demtuar" value="Jo" required>
                        </div>
                        
                        <br>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade left" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-notify modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rregullo preferencat e vetures</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    <form action="{{route('car.update','car_id')}}" method="post">
                    @csrf
                    @method('PUT')

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Lloji</span>
                            </div>

                            <input type="text" class="form-control" id="lloji" name="lloji" placeholder="Shtypni llojin" required>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ngjyra</span>
                            </div>

                            <input type="text" class="form-control" id="ngjyra" name="ngjyra" placeholder="Shtypni ngjyren" required>
                        </div>

                        <br>

                        <input type="hidden" id="car_id" name="car_id">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Viti</span>
                            </div>

                            <input type="number" class="form-control" id="viti" name="viti" placeholder="Shtypni vitin" required>
                        </div>
                        
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Te kaluara</span>
                            </div>

                            <input type="number" class="form-control" id="kaluara" name="kaluara" placeholder="Shtypni te kaluarat" required>
                        </div>
                        
                        <br>

                        <div class="input-group align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text">I demtuar</span>
                            </div>

                            <label class="mb-0 p-2" for="po_value">Po</label>
                            <input type="radio" id="po_value" name="demtuar" value="Po" required>
                            <label class="mb-0 p-2" for="jo_value">Jo</label>
                            <input type="radio" id="jo_value" name="demtuar" value="Jo" required>
                        </div>
                        
                        <br>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Perditso ndryshimet</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>

            {{-- Delete modal / are you sure --}}
            <div class="modal fade top" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-notify modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Fshirja e vetures</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="{{route('car.destroy','car_id')}}" method="post">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" id="car_id" name="car_id">
                                <h2 class="text-center p-3"><b>A jeni i sigurtë?</b></h2>

                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete car</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View information Modal -->
            <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-notify modal-warning" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Informatat e vetures</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    <form action="{{route('car.update','car_id')}}" method="post">
                    @csrf
                    @method('PUT')

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Lloji</span>
                            </div>

                            <input type="text" class="form-control" id="lloji" name="lloji" readonly>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ngjyra</span>
                            </div>

                            <input type="text" class="form-control" id="ngjyra" name="ngjyra" readonly>
                        </div>

                        <br>

                        <input type="hidden" id="car_id" name="car_id">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Viti</span>
                            </div>

                            <input type="number" class="form-control" id="viti" name="viti" readonly>
                        </div>
                        
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Te kaluara</span>
                            </div>

                            <input type="number" class="form-control" id="kaluara" name="kaluara" readonly>
                        </div>
                        
                        <br>

                        <div class="input-group align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text">I demtuar</span>
                            </div>

                            <label class="mb-0 p-2" for="po_value">Po</label>
                            <input type="radio" id="po_value" name="demtuar" value="Po" disabled>
                            <label class="mb-0 p-2" for="jo_value">Jo</label>
                            <input type="radio" id="jo_value" name="demtuar" value="Jo" disabled>
                        </div>
                        
                        <br>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>

            <div class="table-responsive text-center">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Lloji</th>
                            <th>Ngjyra</th>
                            <th>Viti</th>
                            <th>Te kaluara</th>
                            <th>I demtuar</th>
                            <th>Opsionet</th>
                        </tr>

                        <tbody>
                            @foreach ($cars as $kerri)
                                
                            <tr>
                                <td><strong>{{$kerri->id}}</strong></td>
                                <td>{{$kerri->lloji}}</td>
                                <td>{{$kerri->ngjyra}}</td>
                                <td>{{$kerri->viti}}</td>
                                <td>{{$kerri->kaluara}}</td>
                                <td>{{$kerri->demtuar}}</td>
                                <td id="buttonat">

                                    {{-- show btn --}}
                                    <a 
                                    data-car_id="{{$kerri->id}}" 
                                    data-lloji="{{$kerri->lloji}}" 
                                    data-ngjyra="{{$kerri->ngjyra}}" 
                                    data-viti="{{$kerri->viti}}" 
                                    data-kaluara="{{$kerri->kaluara}}" 
                                    data-demtuar="{{$kerri->demtuar}}" 
                                    data-toggle="modal" data-target="#exampleModalCenter4"><button class="btn btn-warning btn-sm">Show</button></a>
                                    
                                    {{-- edit btn --}}
                                    <a 
                                    data-car_id="{{$kerri->id}}" 
                                    data-lloji="{{$kerri->lloji}}" 
                                    data-ngjyra="{{$kerri->ngjyra}}" 
                                    data-viti="{{$kerri->viti}}" 
                                    data-kaluara="{{$kerri->kaluara}}" 
                                    data-demtuar="{{$kerri->demtuar}}" 
                                    data-toggle="modal" data-target="#exampleModalCenter2"><button class="btn btn-info btn-sm">Edit </button></a>

                                    {{-- delete btn --}}
                                    <a data-car_id="{{$kerri->id}}"  data-toggle="modal" data-target="#exampleModalCenter3"><button class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </thead>
                </table>
                {{$cars->links()}}
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/edit.js')}}"></script>
@endsection