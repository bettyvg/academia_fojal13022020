@extends('main')
@section('content')
<section>

<form method="post">
  <div class="box box-default" >
      <div class="box-header with-border">
        <h3 class="box-title">Crear nuevo usuario</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="margin: 15px">
        <div class="row">
          <div class="col-md-6">
             <input type="text" class="form-control" @if(isset($edit_user)) value="{{$edit_user->nombre}}" @endif name="nombre" required="true" placeholder="Nombre">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

                       <input type="text" class="form-control" @if(isset($edit_user)) value="{{$edit_user->apellido_paterno}}" @endif name="apat" required="true" placeholder="Apellido paterno">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

                       <input type="text" class="form-control" @if(isset($edit_user)) value="{{$edit_user->apellido_materno}}" @endif name="amat" required="true" placeholder="Apellido materno">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <input type="number" class="form-control" @if(isset($edit_user)) value="{{$edit_user->area}}" @endif name="area" required="true" placeholder="Area">
          </div>
        </div>
          <!-- /.col -->
        <div class="row">
          <div class="col-md-6">

             <input type="number" class="form-control" @if(isset($edit_user)) value="{{$edit_user->puesto}}" @endif name="puesto" required="true" placeholder="Puesto">
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-6">

                <input type="number" class="form-control" @if(isset($edit_user)) value="{{$edit_user->extension}}" @endif name="extension" required="true" placeholder="Extensión">
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-6">

              <input type="text" class="form-control" @if(isset($edit_user)) value="{{$edit_user->usuario}}" @endif name="usuario" required="true" placeholder="Usuario">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

             <input type="email" class="form-control" @if(isset($edit_user)) value="{{$edit_user->correo_electronico}}" @endif name="correo" required="true" placeholder="Correo">
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-6">

                 <input type="password" class="form-control" name="contrasena" @if(!isset($edit_user)) required="true" @endif placeholder="Contraseña">
          </div>
          <!-- /.col -->
          <div class="col-md-6">


            <input type="password" class="form-control" name="confirma-contrasena" @if(!isset($edit_user)) required="true" @endif placeholder="Confirma la contraseña">
          </div>
        </div>
        @if(isset($edit_user))
        <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>

        @endif
<br>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary ">Guardar</button>
          </div>
          <div class="col-md-6">
            <a href="{{route('inicio')}}" type="button" class="btn btn-default pull-right" name="regresar">Regresar</a>
          </div>
            <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
        </div>

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

</section>

@endsection
