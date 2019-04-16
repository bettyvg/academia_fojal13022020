<?php $__env->startSection('content'); ?>
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
             <input type="text" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->nombre); ?>" <?php endif; ?> name="nombre" required="true" placeholder="Nombre">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

                       <input type="text" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_paterno); ?>" <?php endif; ?> name="apat" required="true" placeholder="Apellido paterno">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

                       <input type="text" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_materno); ?>" <?php endif; ?> name="amat" required="true" placeholder="Apellido materno">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <input type="number" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->area); ?>" <?php endif; ?> name="area" required="true" placeholder="Area">
          </div>
        </div>
          <!-- /.col -->
        <div class="row">
          <div class="col-md-6">

             <input type="number" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->puesto); ?>" <?php endif; ?> name="puesto" required="true" placeholder="Puesto">
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-6">

                <input type="number" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->extension); ?>" <?php endif; ?> name="extension" required="true" placeholder="Extensión">
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-6">

              <input type="text" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->usuario); ?>" <?php endif; ?> name="usuario" required="true" placeholder="Usuario">
          </div>
          <!-- /.col -->
          <div class="col-md-6">

             <input type="email" class="form-control" <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->correo_electronico); ?>" <?php endif; ?> name="correo" required="true" placeholder="Correo">
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-6">

                 <input type="password" class="form-control" name="contrasena" <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?> placeholder="Contraseña">
          </div>
          <!-- /.col -->
          <div class="col-md-6">


            <input type="password" class="form-control" name="confirma-contrasena" <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?> placeholder="Confirma la contraseña">
          </div>
        </div>
        <?php if(isset($edit_user)): ?>
        <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>

        <?php endif; ?>
<br>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary ">Guardar</button>
          </div>
          <div class="col-md-6">
            <a href="<?php echo e(route('inicio')); ?>" type="button" class="btn btn-default pull-right" name="regresar">Regresar</a>
          </div>
            <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
        </div>

      </div>
    </div>

        </form>
        <br>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
                    <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                        <?php echo e($alert->message); ?>

                    </div>
        <?php endif; ?>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\academia_fojal\resources\views/usuarios/usuarios3.blade.php */ ?>