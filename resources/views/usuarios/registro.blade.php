@extends('main')
@section('content')
<section>
<form action="{{route('edit_user')}}" method="PUT" >
  <div class="box box-default" >

      <!-- /.box-header -->
      <div class="box-body" style="margin: 40px 0px 0px 0px">

          <div class="single-pro-review-area mt-t-30 mg-b-15 ">
              <div class="container-fluid ">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="product-payment-inner-st">
                              <ul id="myTabedu1" class="tab-review-design">
                                  <li class="active"><a href="#description">Modifica usuario</a></li>
                              </ul>

                              <div id="myTabContent" class="tab-content custom-product-edit">
                                  <div class="product-tab-list tab-pane fade active in" id="description">
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <div class="review-content-section">
                                                  <div id="dropzone1" class="pro-ad addcoursepro">
                                                      <form
                                                              class="dropzone dropzone-custom needsclick addcourse"
                                                              id="formulario-usuarios">
                                                          <div class="row">
                                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                  <div class="form-group">
                                                                      <input name="nombre" id="nombre" type="text"
                                                                             @if(isset($edit_user)) value="{{$edit_user->nombre}}"
                                                                             @endif
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Nombre">
                                                                  </div>

                                                                  <div class="form-group">
                                                                      <input name="apat" id="apat" type="text"
                                                                             @if(isset($edit_user)) value="{{$edit_user->apellido_paterno}}" @endif
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Apellido paterno">
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <input name="amat" id="amat" type="text"
                                                                             @if(isset($edit_user)) value="{{$edit_user->apellido_materno}}" @endif
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Apellido materno">
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <input name="area" id="area" type="number"
                                                                             @if(isset($edit_user)) value="{{$edit_user->area}}" @endif
                                                                             required="true"
                                                                             class="form-control"
                                                                             placeholder="Area">
                                                                  </div>

                                                                  <div class="form-group">
                                                                      <input name="puesto"  type="number"
                                                                             @if(isset($edit_user)) value="{{$edit_user->puesto}}" @endif
                                                                             class="form-control"
                                                                             placeholder="Puesto">
                                                                  </div>
                                                              </div>



                                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                  <div class="form-group">
                                                                      <input name="extension"  type="text"
                                                                             @if(isset($edit_user)) value="{{$edit_user->extension}}" @endif
                                                                             class="form-control"
                                                                             required="true" placeholder="Extensión">

                                                                  </div>
                                                                  <div class="form-group">
                                                                      <input name="correo"  type="text"
                                                                             @if(isset($edit_user)) value="{{$edit_user->correo_electronico}}" @endif
                                                                             class="form-control"
                                                                             required="true" placeholder="Correo">
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <input name="contrasena"  type="password"
                                                                             @if(!isset($edit_user)) required="true" @endif
                                                                             class="form-control"
                                                                             placeholder="Contraseña">
                                                                  </div>

                                                                  <div class="form-group">
                                                                      <input name="confirma-contrasena"  type="password"
                                                                             @if(!isset($edit_user)) required="true" @endif
                                                                             class="form-control"
                                                                             placeholder="Confirma contraseña">
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          @if(isset($edit_user))
                                                              <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>
                                                          @endif
                                                          <div class="row">
                                                              <div class="col-lg-6">

                                                                      <button type="submit"
                                                                              class="btn btn-info waves-effect waves-light">Guardar
                                                                      </button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <a href="{{route('usuarios')}}" type="button" class="btn btn-default pull-right" name="regresar">Cancelar</a>
                                                              </div>
                                                              <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                                                          </div>
                                                      </form>
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
<br>

      </div>
    </div>

        </form>
        <br>
        @if(isset($alert) && $alert != null && isset($alert->type))
                    <div class="alert alert-{{ $alert->type }}" role="alert">
                        {{ $alert->message }}
                    </div>
        @endif

      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

        <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>

</section>

@endsection
@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
@endsection