<?php $__env->startSection('content'); ?>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">

                  </div>
                  <div class="col-sm-6">

                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="tabla-usuarios" class="table table-bordered table-hover dataTable" role="grid">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Area</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Puesto</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Extensión</th>
                  <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo e($usuario->nombre); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->apellido_paterno); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->apellido_materno); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->correo_electronico); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->area); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->puesto); ?></td>
                    <td class="sorting_1"><?php echo e($usuario->extension); ?></td>
                    <td class="sorting_1">
                      <a href='../edit-user/<?php echo e($usuario->id_usuario); ?>' type="button" class="btn btn-primary">
                        <i class="fa fa-fw fa-edit"> </i>
                      </a>
                      <button type="button" id="delete_user" onclick="delete_usuario(this.value)" class="btn btn-danger" value="<?php echo e($usuario->id_usuario); ?>">
                        <i class="fa fa-fw fa-trash-o"></i>
                      </button>
                    </td>

                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

              </table>
            </div>
          </div>
    </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\academia_fojal\resources\views/usuarios/usuarios.blade.php */ ?>