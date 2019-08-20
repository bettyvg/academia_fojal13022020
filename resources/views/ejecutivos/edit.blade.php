@extends('main')
@section('content')

<h1>Editar el ejecutivo: {{$usuario->nombre}}</h1>

<form action="{{route('ejecutivos.edit', $usuario->id)}}" method="PATCH" class="form-horizontal">

    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
        <div class="container-fluid " style="margin: 40px 0px 0px 0px">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Modificación de ejecutivo</a>{{$usuario->nombre}}</li>
                        </ul>

                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <label for="nombreejecutivo" class="col-sm-4">Nombre</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="nombre_ejecutivo" id="nombre_ejecutivo" required="true">
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="AccionistaNombre" class="col-sm-4">Apellido paterno</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" required="true">
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <div class="form-group">

                                                                <label for="AccionistaNombre" class="col-sm-4">Apellido materno</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="estatus" id="estatus" value="activo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    @endsection
@stop