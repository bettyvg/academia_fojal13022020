<?php $__env->startSection('content'); ?>

    <section>
        <form action="<?php echo e(route('vinculacion')); ?>" method="post" class="form-horizontal">
            <?php if(isset($alert)): ?>
                <div class="row" style="padding: 10px;">
                    <div class="col-12">
                        <div  class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo e($alert->message); ?>

                    </div>
                </div>
            <?php endif; ?>

                <?php if(isset($alert2)): ?>
                    <div class="row" style="padding: 10px;">
                        <div class="col-12">
                            <div class="alert alert-<?php echo e($alert2->type); ?>">
                                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                <?php echo e($alert2->message); ?>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>

             <div class="single-pro-review-area mt-t-30 mg-b-15 ">

                 <div class="breadcome-area">
                     <div class="container-fluid">
                         <div class="row">
                         </div>
                     </div>
                 </div>
             </div>


            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Registro plática informativa</a></li>
                                <li><a href="#modificacioninscritos"> Consulta de registros</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                    <form action="<?php echo e(route('registro')); ?>">

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                                                <div class="form-group">
                                                                    <br>
                                                                    <input name="nombre" id="nombre" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->nombre); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="apat" id="apat" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->apellido_paterno); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido paterno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="amat" id="amat" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->apellido_materno); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido materno">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <select name="genero" id="genero" class="form-control"
                                                                        <?php if(isset($registro)): ?> value="<?php echo e($registro->genero); ?>" <?php endif; ?>>
                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="estado" id="estado" <?php if(isset($registro)): ?> value="<?php echo e($registro->estado); ?>" <?php endif; ?>>
                                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                                        <?php $__currentLoopData = $cat_entidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($entidades->cve_ent); ?>"> <?php echo e($entidades->nom_ent); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="municipio" id="municipio">
                                                                        <option value="none" selected="" disabled="">Municipio de donde nos visita</option>
                                                                        <?php $__currentLoopData = $cat_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($municipios->cve_compuesta_ent_mun); ?>"> <?php echo e($municipios->nom_mun); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                    <input name="fechanacimiento" id="fechanacimiento" type="date"
                                                                           class="form-control"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->fecha_nacimiento); ?>" <?php endif; ?>
                                                                           required="true">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="rfc" id="rfc" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->rfc); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           required="true" placeholder="RFC">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="correo" id="correo" type="email"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->correo); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           required="true" placeholder="Correo">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="telefono" id="telefono" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->telefono); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Teléfono">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="escolaridad"  type="text"
                                                                           <?php if(isset($registro)): ?> required="true" value="<?php echo e($registro->escolaridad); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Escolaridad">
                                                                </div>
                                                                <div class="form-group">

                                                                    <input name="ocupacion"  type="text"
                                                                           <?php if(isset($registro)): ?> required="true" value="<?php echo e($registro->ocupacion); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Ocupación">
                                                                </div>


                                                            </div>
                                                        </div>

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
<?php /* C:\laragon\www\academia_fojal\resources\views/vinculacion.blade.php */ ?>