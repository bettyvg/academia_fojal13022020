<?php $__env->startSection('content'); ?>
    <section>
        <form action="modificacionusuarios" method="put" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificación de usuario</a></li>
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
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->nombre); ?>"
                                                                               <?php endif; ?>

                                                                               class="form-control"
                                                                               placeholder="Nombre"
                                                                               value="<?php echo e(old('nombre')); ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_paterno); ?>"
                                                                               <?php endif; ?>

                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="<?php echo e(old('apat')); ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->apellido_materno); ?>"
                                                                               <?php endif; ?>

                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="<?php echo e(old('amat')); ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select required='true' class="form-control"
                                                                                name="area"
                                                                                id="area" value="<?php echo e(old('area')); ?>">
                                                                            <option value="">Área a la que pertenece..
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_direcciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $direccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($direccion->id_direccion); ?>"><?php echo e($direccion->nombre); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <select class="form-control" name="puesto"
                                                                                id="puesto">
                                                                            <option value="">Seleccione puesto..
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                </div>


                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="extension" type="text"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->extension); ?>"
                                                                               <?php endif; ?>
                                                                               class="form-control"
                                                                               onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                               placeholder="Extensión telefónica"
                                                                               value="<?php echo e(old('extension')); ?>">
                                                                        <div style="color: #fe4138"><?php echo $errors->first('extension', '<small>:message</small>'); ?></div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select required='true' class="form-control"
                                                                                name="perfil"
                                                                                id="perfil" value="<?php echo e(old('perfil')); ?>">
                                                                            <option value="">Seleccionar perfil
                                                                                usuario..
                                                                            </option>
                                                                            <?php $__currentLoopData = $cat_perfiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perfiles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($perfiles->id_perfil); ?>"
                                                                                ><?php echo e($perfiles->nombre); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo" type="email"
                                                                               <?php if(isset($edit_user)): ?> value="<?php echo e($edit_user->correo_electronico); ?>"
                                                                               <?php endif; ?>
                                                                               class="form-control"
                                                                                placeholder="Correo"
                                                                               value="<?php echo e(old('correo')); ?>">
                                                                        <div style="color: #fe4138"><?php echo $errors->first('correo', '<small>:message</small>'); ?></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena" type="password"
                                                                               <?php if(!isset($edit_user)): ?>
                                                                               <?php endif; ?>
                                                                               class="form-control"
                                                                               placeholder="Contraseña">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"
                                                                               type="password"
                                                                               <?php if(!isset($edit_user)): ?>
                                                                               <?php endif; ?>
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña">
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <?php if(isset($edit_user)): ?>
                                                                <p><b>Nota:</b> Si no requiere cambiar la contraseña,
                                                                    dejar en blanco el campo "Contraseña" y "Repetir
                                                                    contraseña"</p>

                                                            <?php endif; ?>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="submit"
                                                                                class="btn btn-primary waves-effect waves-light">
                                                                            Modificar
                                                                        </button>
                                                                        <input type="hidden" name="_token"
                                                                               id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                                    </div>
                                                                </div>
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
        </form>
        <br>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
            <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                <?php echo e($alert->message); ?>

            </div>
        <?php endif; ?>
        <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\academia_fojal\resources\views/ModificaUsuarios.blade.php */ ?>