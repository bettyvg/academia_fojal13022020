<?php $__env->startSection('content'); ?>
    <section>

        <form action="" method="post" class="form-horizontal">


        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Registro capacitador</a></li>
                                <li><a href="#modificacion">Modificación de capacitadores</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">
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
                                                                           title="Nombre"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->nombre); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="apat" id="apat" type="text"
                                                                           title="Apellido paterno"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->apellido_paterno); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido paterno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="amat" id="amat" type="text"
                                                                           title="Apellido materno"
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
                                                                        <option value="none" selected="" disabled="">Municipio</option>
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
                                                                           title="Fecha de nacimiento"
                                                                           class="form-control"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->fecha_nacimiento); ?>" <?php endif; ?>
                                                                           required="true">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="rfc" id="rfc" type="text"
                                                                           onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                                                           title="RFC"
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
                                                                    <input name="telefono" id="telefono" type="number"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->telefono); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Teléfono">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="usuario"  type="text"
                                                                           <?php if(isset($registro)): ?> required="true" value="<?php echo e($registro->escolaridad); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Usuario">
                                                                </div>
                                                                <div class="form-group">

                                                                    <input name="ocupacion"  type="text"
                                                                           <?php if(isset($registro)): ?> required="true" value="<?php echo e($registro->ocupacion); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Contraseña">
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



                                <!-- Tabla de registros capacitores   -->
                                <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacion">
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
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Genero</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estado de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Municipio</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >RFC</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Teléfono</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Usuario</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de registro</th>
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
                                <!-- Tabla de registros de evaluación -->







                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\academia_fojal\resources\views/capacitadores.blade.php */ ?>