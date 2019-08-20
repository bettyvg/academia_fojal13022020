@extends('main')
@section('content')
    <section>
        @if(isset($alert))
            <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                <div class="col-12">
                    <div  class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$alert->message}}
                    </div>
                </div>
                @endif
        <form action="{{route('EvaluacionCapacitadores')}}" method="post" class="form-horizontal">
            @csrf

                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Encuesta de satisfacción</a></li>

                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                                <br>
                                                                <div><h4>Datos <span
                                                                                class="table-project-n">Personales</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="fecha" id="fecha"
                                                                               type="date"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Fecha del curso"
                                                                               value="{{old('fecha')}}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="nombrepar" id="nombrepar"
                                                                               type="text"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre del participante"
                                                                               value="{{old('nombrepar')}}">
                                                                    </div>

                                                                    <div class="from-group">
                                                                        <select
                                                                                class="form-control"
                                                                                name="id_capacitador"
                                                                                required="true"
                                                                                id="id_capacitador">
                                                                            <option value="">Seleccionar
                                                                                capacitador..
                                                                            </option>
                                                                            @foreach($cat_capacitador as $capacitadores)
                                                                                <option value="{{$capacitadores->id_capacitador}}" @if(old('id_capacitador')==$capacitadores->id_capacitador)selected="selected"@endif>{{$capacitadores->nom_cap." ". $capacitadores->apellido_paterno." ".$capacitadores->apellido_materno}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                required="true"
                                                                                name="id_tema"
                                                                                id="id_tema">
                                                                            <option value="">Sesión
                                                                            </option>
                                                                            @foreach($cat_temas as $temas)
                                                                                <option value="{{$temas->id_tema}}" @if(old('id_tema')==$temas->id_tema)selected="selected"@endif> {{$temas->num_sesion." - ".$temas->tema}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                required="true"
                                                                                name="cve_compuesta_ent_mun"
                                                                                id="cve_compuesta_ent_mun">
                                                                            <option value="">Municipio
                                                                            </option>
                                                                            @foreach($cat_municipios as $municipios)
                                                                                <option value="{{$municipios->cve_compuesta_ent_mun}}" @if(old('cve_compuesta_ent_mun')==$municipios->cve_compuesta_ent_mun)selected="selected"@endif> {{$municipios->nom_mun}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select
                                                                                class="form-control"
                                                                                name="id_institucion"
                                                                                required="true"
                                                                                id="id_institucion">
                                                                            <option value="">Institución
                                                                            </option>
                                                                            @foreach($cat_instituciones as $institucion)
                                                                                <option value="{{$institucion->id_institucion}}" @if(old('id_institucion')==$institucion->id_institucion)selected="selected"@endif>{{$institucion->nombre_inst}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <br>
                                                                </div>

                                                                <h4>Evaluación capacitador</h4>

                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="puntualidad" id="puntualidad">
                                                                            <option value="">Puntualidad..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="dominiotema" id="dominiotema">
                                                                            <option value="">Dominio del tema..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="exposicion" id="exposicion">
                                                                            <option value="">Técnica de exposición..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="ejemplos" id="ejemplos">
                                                                            <option value="">Ejemplos aplicados a las empresas ..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="ejercicios" id="ejercicios">
                                                                            <option value="">Ejercicios al finalizar cada tema..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="empatiagrupo" id="empatiagrupo">
                                                                            <option value="">Empatía con el grupo..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="fluidez" id="fluidez">
                                                                            <option value="">Fluidez para hablar..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="todostemas" id="todostemas">
                                                                            <option value="">El capacitador impartió todos los temas..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoEvalucion"  name="capresolver" id="capresolver">
                                                                            <option value="">Capacidad de resolver preguntas sobre el tema que impartió..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreoeva1" name="monitoreoeva1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreoeva2" name="monitoreoeva2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                </div>

                                                                <h4>Logistica del curso</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoLogistica"  name="lugar" id="lugar">
                                                                            <option value="">Servicio del lugar en dónde se realizó el curso..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoLogistica"  name="equipo" id="equipo">
                                                                            <option value="">Equipo y herramientas para la exposición del capacitador...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreolog1" name="monitoreolog1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 2 malos y 2 regulares</label>
                                                                            <input type="text" id="monitoreolog2" name="monitoreolog2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br><br><br>
                                                                </div>

                                                                <h4>Contenido y materiales</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="objetivoscurso" id="objetivoscurso">
                                                                            <option value="">Considera que se cumplieron los objetivos del curso..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="contenidocurso" id="contenidocurso">
                                                                            <option value="">El contenido del curso se puede aplicar...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoContenido"  name="contenidocuaderno" id="contenidocuaderno">
                                                                            <option value="">Considera adecuado el contenido de los cuadernos de trabajo ..</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreocontenido1" name="monitoreocontenido1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreocontenido2" name="monitoreocontenido2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <br><br><br>
                                                                    <br><br><br><br>

                                                                </div>

                                                                <h4>Organizacón del equipo FOJAL</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="registroorg" id="registroorg">
                                                                            <option value="">Considera adecuado el tiempo que tarda en registrarse en las instalaciones de fojal</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="atencionorg" id="atencionorg">
                                                                            <option value="">Comó considera la atención del personal de recepción...</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select  required="true" class="form-control MonitoreoOrganizacion"  name="registrocursos" id="registrocursos">
                                                                            <option value="">Considera que el registro para los cursos es…</option>
                                                                            <option value="Excelente">Excelente</option>
                                                                            <option value="Bueno">Bueno</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Malo">Malo</option>
                                                                            <option value="x">Ninguno</option>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group ">
                                                                        <div class="form-group col-lg-6" >
                                                                            <label for="formGroupExampleInput">Monitoreo 1 malo y 1 regular</label>
                                                                            <input type="text" id="monitoreoorg1" name="monitoreoorg1" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="form-group col-lg-6">
                                                                            <label for="formGroupExampleInput">Monitoreo 3 malos y 3 regulares</label>
                                                                            <input type="text" id="monitoreoorg2" name="monitoreoorg2" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    </div>
                                                                    <br><br><br><br>
                                                                </div>

                                                                <h4>Comentarios</h4>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <h5>Comentarios adicionales al curso</h5>
                                                                        <textarea name="comentariocurso" rows="10" cols="50" placeholder="Escribir comentario..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <h5>Tema que te gustaría añadir al curso</h5>
                                                                            <textarea name="temacurso" rows="10" cols="50" placeholder="Escribir comentario..."></textarea>
                                                                        </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                        Enviar
                                                                    </button>

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

        <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>
    </section>
@endsection
