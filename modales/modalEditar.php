    <div class="modal fade" id="editarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Registrar Nuevo Empleado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEmpleadoEdit" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="id" id="idempleado" />
                        <div class="mb-3">
                            <label class="form-label">carpeta</label>
                            <input type="text" name="carpeta" id="carpeta" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">citado</label>
                            <input type="text" name="citado" id="citado" class="form-control" />
                        </div>
                        
                      
                        <div class="mb-3">
                            <label class="form-label">direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">investigado</label>
                            <input type="text" name="investigado" id="investigado" class="form-control" />
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Seleccione el Delito</label>
                            <select name="delito" id="delito" class="form-select" required>
                                <option selected value="">Seleccione el Delito</option>
                                <?php
                                $cargos = array(
                                        "Contra El Patrimonio-DAÑO AGRAVADO",
                                        "Contra El Patrimonio-APROPIACIÓN ILÍCITA",
                                        "Contra El Patrimonio-DAÑO AGRAVADO",
                                        "Contra El Patrimonio-DAÑO SIMPLE",
                                        "Contra El Patrimonio-ESTAFA",
                                        "Contra El Patrimonio-EXTORSIÓN",
                                        "Contra El Patrimonio-FRAUDE INFORMÁTICO",
                                        "Contra El Patrimonio-HURTO",
                                        "Contra El Patrimonio-HURTO AGRAVADO",
                                        "Contra El Patrimonio-RECEPTACIÓN",
                                        "Contra El Patrimonio-ROBO",
                                        "Contra El Patrimonio-ROBO AGRAVADO",
                                        "Contra El Patrimonio-USURPACIÓN",
                                        "Contra El Patrimonio-USURPACIÓN AGRAVADA",
                                        "Contra La Administración de Justicia-DENUNCIA CALUMNIOSA",
                                        "Contra La Administración Pública-ABUSO DE AUTORIDAD",
                                        "Contra La Administración Pública-INGRESO INDEBIDO DE EQUIPOS O SISTEMAS DE COMUNICACIÓN Y/O FILMACIÓN EN CENTROS DE DETENCIÓN O RECLUSIÓN",
                                        "Contra La Administración Pública-RESISTENCIA Y DESOBEDIENCIA A LA AUTORIDAD",
                                        "Contra La Familia-OMISIÓN A LA ASISTENCIA FAMILIAR",
                                        "Contra La Fe Pública-FALSEDAD GENÉRICA",
                                        "Contra La Fe Pública-FALSIFICACIÓN DE DOCUMENTOS",
                                        "Contra La Libertad Sexual-TOCAMIENTOS INDEBIDOS EN MENOR",
                                        "Contra La Libertad-SECUESTRO",
                                        "Contra La Libertad-Violación de la Libertad Personal-ACOSO",
                                        "Contra La Salud Pública-TRÁFICO ILÍCITO DE DROGAS",
                                        "Contra La Seguridad Pública-PELIGRO POR MEDIO DE INCENDIO O EXPLOSIÓN",
                                        "Contra La Vida, El Cuerpo y La Salud-HOMICIDIO",
                                        "Contra La Vida, El Cuerpo y La Salud-LESIONES",
                                        "Contra La Vida, El Cuerpo y La Salud-HOMICIDIO (en grado de tentativa)",
                                        "Contra La Vida, El Cuerpo y La Salud-HOMICIDIO CULPOSO",
                                        "Contra La Vida, El Cuerpo y La Salud-LESIONES CULPOSAS",
                                        "Contra La Vida, El Cuerpo y La Salud-LESIONES CULPOSAS - ACCIDENTE DE TRÁNSITO",
                                        "Contra La Vida, El Cuerpo y La Salud-LESIONES CULPOSAS AGRAVADAS (INOBSERVANCIA DE LAS REGLAS DE TRÁNSITO)",
                                        "Contra La Vida, El Cuerpo y La Salud-LESIONES GRAVES",
                                        "Delito Informático Contra El Patrimonio-FRAUDE INFORMÁTICO",
                                        "Delito Informático Contra La Fe Pública-SUPLANTACIÓN DE IDENTIDAD",
                                        "Contra La Libertad-VIOLACIÓN SEXUAL",
                                        "Contra La Seguridad Pública-CONDUCCIÓN EN ESTADO DE EBRIEDAD",
                                        "Contra La Seguridad Pública-TENENCIA ILEGAL DE ARMAS DE FUEGO",
                                         
                                    );
                                    foreach ($cargos as $cargo) {
                                        echo "<option value='$cargo'>$cargo</option>";
                                    }
                                    ?>
                                </select>
                            </div>


                        <div class="mb-3">
                            <label class="form-label">agraviado</label>
                            <input type="text" name="agraviado" id="agraviado" class="form-control" />
                        </div>


                        <div class="mb-3">
                            <label class="form-label">disposicion</label>
                            <select name="disposicion" id="disposicion" class="form-select" required>
                                <option selected value="">Seleccione el Tipo de Disposición</option>
                                <?php
                                $cargos = array(
                                    "Disposición Fiscal de Apertura",
                                    "Disposición Fiscal de Archivo",
                                    "Disposición Fiscal de Derivación",
                                    "Providencia Fiscal",
                                    "Disposición Fiscal de Ampliación de la Investigación Preliminar",
                                    "Disposición Fiscal de Ampliación de la Investigación Preparatoria",
                                    "Disposición Fiscal de Formalización de la Investigación Preparatoria",
                                    "Disposición Fiscal de Conclusión de la Investigación Preparatoria",
                                    "Requerimiento Fiscal de Incoación de Proceso Inmediato",
                                    "Disposición Fiscal de Elevación",
                                    );
                                    foreach ($cargos as $cargo) {
                                        echo "<option value='$cargo'>$cargo</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                        <div class="mb-3">
                            <label class="form-label">disposicionnumero</label>
                            <input type="text" name="disposicionnumero" id="disposicionnumero" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">fecha</label>
                            <input type="text" name="fecha" id="fecha" class="form-control" />
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn_add" onclick="actualizarEmpleado(event)">
                                Actualizar datos del empleado
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>