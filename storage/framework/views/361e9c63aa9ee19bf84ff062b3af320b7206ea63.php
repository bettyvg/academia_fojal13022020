
<?php $__env->startSection('content'); ?>
    <section>
        <form action="<?php echo e(route('usuarios')); ?>" method="post" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Crear usuarios</a></li>
                                    <li><a href="#modificacionusuarios"> Modificar usuarios</a></li>
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
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->nombre); ?>" <?php endif; ?>
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_paterno); ?>" <?php endif; ?>
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_materno); ?>" <?php endif; ?>
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="area" id="area" type="number"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->area); ?>" <?php endif; ?>
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Area">
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <input name="puesto"  type="number"
                                                                            <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->puesto); ?>" <?php endif; ?>
                                                                             class="form-control"
                                                                             required="true" placeholder="Puesto">
                                                                    </div>
                                                                </div>



                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="extension"  type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->extension); ?>" <?php endif; ?>
                                                                               class="form-control"
                                                                               required="true" placeholder="Extensión">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                                        <input name="usuario"  type="password"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->usuario); ?>" <?php endif; ?>
                                                                               class="form-control"
                                                                               required="true" placeholder="Usuario">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo"  type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->correo_electronico); ?>" <?php endif; ?>
                                                                               class="form-control"
                                                                               required="true" placeholder="Correo">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena"  type="password"
                                                                               <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?>
                                                                               class="form-control"
                                                                               placeholder="Contraseña">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"  type="password"
                                                                               <?php if(!isset($edit_user)): ?> required="true" <?php endif; ?>
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña">
                                                                    </div>



                                                                </div>
                                                            </div>
                                                            <?php if(isset($edit_user)): ?>
                                                                <p> <b>Nota:</b> Si no requiere cambiar la contraseña, dejar en blanco el campo "Contraseña" y "Repetir contraseña"</p>

                                                            <?php endif; ?>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="submit"
                                                                                class="btn btn-primary waves-effect waves-light">
                                                                            Guardar
                                                                        </button>
                                                                        <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tabla de registros usuarios   -->
                                    <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacionusuarios">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <div id="toolbar">
                                                                    <select class="form-control dt-tb">
                                                                        <option value="all">Exportar todo</option>
                                                                        <option value="selected">Exportar Seleccionados
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <table id="table" data-toggle="table"
                                                                       data-pagination="true"
                                                                       data-show-columns="true"
                                                                       data-show-pagination-switch="true"
                                                                       data-show-toggle="true" data-resizable="true"
                                                                       data-cookie="true"
                                                                       data-cookie-id-table="saveId"
                                                                       data-show-export="true"
                                                                       data-click-to-select="true"
                                                                       data-toolbar="#toolbar">
                                                                    <thead>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true"></th>
                                                                        <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Area</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Puesto</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >extension</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Acciones</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $detalle_registrousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1"></td>
                                                                            <td class="sorting_1"><?php echo e($registro->nombre); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->apellido_paterno); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->apellido_materno); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->correo_electronico); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->area); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->puesto); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->extension); ?></td>
                                                                            <td class="sorting_1">
                                                                                <a href='../edit-user/<?php echo e($registro->id_usuario); ?>' type="button" class="btn btn-primary">
                                                                                    <i class="fa fa-fw fa-edit"> </i>
                                                                                </a>
                                                                                <button type="button" id="delete_user" onclick="delete_usuario(this.value)" class="btn btn-danger" value="<?php echo e($registro->id_usuario); ?>">
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tabla de registros de usuraios -->

                                </div>
                            </div>
                        </div>
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
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/academia_fojal/resources/views/usuarios.blade.php */ ?>