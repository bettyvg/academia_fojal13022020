
<?php $__env->startSection('content'); ?>
    <section>
        <form action="" method="post" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Crear usuarios</a></li>
                                    <li><a href="#reviews"> Modificar usuarios</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                                        <form action="<?php echo e(route('usuarios3')); ?>"
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
                                                                    <div class="form-group">
                                                                        <input name="extension"  type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->extension); ?>" <?php endif; ?>
                                                                               class="form-control"
                                                                               required="true" placeholder="Extensión">

                                                                    </div>




                                                                </div>



                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="extension"  type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->extension); ?>" <?php endif; ?>
                                                                               class="form-control"
                                                                               required="true" placeholder="Rol de usuario">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="usuario"  type="text"
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
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                                                                            </table>
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
<?php /* /var/www/html/academia_fojal/resources/views/ModificaUsuarios1.blade.php */ ?>