<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bomberos y Protección Civil - Santiago Tulantepec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <style>
        :root {
            --rojo-institucional: #7a0000;
            --rojo-hover: #960000;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #212529;
            position: relative;
            min-height: 100vh;
            background-color: #121212;
        }

        .bg-slide {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -2;
            background-image: url('escudo.jpg'), url('escudo (2).jpg'), url('escudo.jpeg'), url('escudo.png'), url('escudo.jpg.jpg');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #1c232d;
        }

        .bg-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background: rgba(15, 20, 26, 0.55);
        }

        .header-oficial {
            background-color: var(--rojo-institucional);
            color: #ffffff;
            border-bottom: 4px solid #400000;
            padding: 12px 20px;
        }
        .escudo-logo {
            height: 52px; width: auto;
            border-radius: 50%;
            background-color: #fff;
            padding: 2px;
            filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.6));
            object-fit: cover;
        }
        .barra-navegacion-superior {
            background-color: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border-bottom: 2px solid #dee2e6;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
        }
        .dropdown-toggle-apartados {
            background-color: #1a1a1a !important;
            color: white !important;
            border-radius: 4px;
            padding: 8px 20px !important;
            font-weight: 700;
        }
        .dropdown-toggle-apartados:hover {
            background-color: var(--rojo-institucional) !important;
        }
        .card-contenedor {
            background-color: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(6px);
            border-radius: 8px;
        }
        .table-custom th {
            background-color: #1a1a1a;
            color: white;
            font-size: 0.82rem;
            text-align: center;
            vertical-align: middle;
        }
        .btn-rojo {
            background-color: var(--rojo-institucional);
            color: white;
            font-weight: 600;
        }
        .btn-rojo:hover {
            background-color: var(--rojo-hover);
            color: white;
        }
        #pantallaLogin {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-login {
            background-color: rgba(20, 24, 30, 0.95);
            backdrop-filter: blur(10px);
            border-top: 5px solid var(--rojo-institucional);
            width: 100%; max-width: 440px;
            border-radius: 8px;
            color: white;
        }
        .creditos-traslucidos {
            position: fixed;
            bottom: 12px; left: 15px;
            background-color: rgba(18, 18, 18, 0.75);
            color: #ffffff;
            backdrop-filter: blur(6px);
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 0.68rem;
            line-height: 1.4;
            z-index: 9000;
            border: 1px solid rgba(255, 255, 255, 0.18);
            pointer-events: none;
            opacity: 0.8;
        }
        .share-flotante {
            position: fixed;
            top: 12px; right: 15px;
            z-index: 9500;
        }

        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu > .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: -6px;
            margin-right: -1px;
            display: none;
        }
        .dropdown-submenu:hover > .dropdown-menu,
        .dropdown-submenu > .dropdown-menu.show {
            display: block;
        }

        /* --- ADAPTABILIDAD RESPONSIVE PARA CELULARES --- */
        @media (max-width: 768px) {
            .header-oficial h4 {
                font-size: 1.1rem !important;
            }
            .header-oficial small {
                font-size: 0.75rem !important;
            }
            .creditos-traslucidos {
                position: relative !important;
                bottom: auto !important;
                left: auto !important;
                margin: 20px 10px !important;
                text-align: center;
                pointer-events: auto;
            }
            .card-body {
                padding: 10px !important;
            }
        }
    </style>
</head>
<body>

    <div class="bg-slide"></div>
    <div class="bg-overlay"></div>

    <!-- BOTÓN FLOTANTE SUPERIOR PARA QR -->
    <div id="widgetCompartir" class="share-flotante" style="display: none;">
        <button class="btn btn-dark btn-sm shadow border border-secondary text-white fw-bold px-3 py-1" data-bs-toggle="modal" data-bs-target="#modalCompartirQR" style="background-color: rgba(26,26,26,0.9); font-size: 0.75rem;">
            <i class="bi bi-qr-code text-danger me-1"></i> QR / Celular
        </button>
    </div>

    <!-- MODAL DE QR -->
    <div class="modal fade" id="modalCompartirQR" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content bg-dark text-white border-secondary">
                <div class="modal-header border-secondary py-2">
                    <h6 class="modal-title fw-bold"><i class="bi bi-phone text-danger"></i> Escanear con Celular</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-3">
                    <p class="small text-secondary mb-2">Conéctate y escanea:</p>
                    <div id="contenedorQR" class="bg-white p-2 d-inline-block rounded mb-3"></div>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" id="urlCompartir" class="form-control text-center bg-secondary text-white border-0" readonly>
                        <button class="btn btn-rojo" type="button" onclick="copiarEnlace()"><i class="bi bi-clipboard"></i></button>
                    </div>
                    <div id="copiadoAlerta" class="text-success small d-none">¡Enlace copiado!</div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DE CONTRASEÑA PARA APARTADO 56 (Clave: 12345) -->
    <div class="modal fade" id="modalPassword56" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content bg-dark text-white border-secondary">
                <div class="modal-header border-secondary py-2">
                    <h6 class="modal-title fw-bold text-danger"><i class="bi bi-shield-lock"></i> Seguridad 56</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" onclick="cancelarPassword56()"></button>
                </div>
                <div class="modal-body text-center p-3">
                    <p class="small text-secondary mb-2">Ingrese contraseña (12345):</p>
                    <input type="password" id="inputPass56" class="form-control form-control-sm text-center mb-2" placeholder="Clave">
                    <div id="errorPass56" class="text-danger small mb-2 d-none">Contraseña incorrecta.</div>
                    <button class="btn btn-rojo btn-sm w-100 fw-bold" onclick="validarPassword56()">ENTRAR</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PANTALLA DE ACCESO (Clave: bomberos1) -->
    <div id="pantallaLogin">
        <div class="card card-login p-4 shadow-lg text-center">
            <div class="mb-3">
                <img src="escudo (2).jpg" onerror="this.onerror=null; this.src='escudo.jpg';" alt="Escudo de Bomberos" class="escudo-logo mb-2" style="height: 80px; width: 80px;">
                <h4 class="fw-bold m-0 mt-1">Acceso Restringido</h4>
                <p class="text-secondary small mt-1">H. Cuerpo de Bomberos y Protección Civil<br>Santiago Tulantepec</p>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label small">Contraseña de acceso:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese clave">
                    <button class="btn btn-outline-secondary" type="button" id="btnTogglePass" onclick="togglePassword()"><i class="bi bi-eye"></i></button>
                </div>
            </div>
            <button class="btn btn-rojo w-100 fw-bold py-2" onclick="verificarPassword()">INGRESAR AL SISTEMA</button>
            <div id="errorLogin" class="text-danger text-center mt-2 small d-none">Contraseña incorrecta. (Clave: bomberos1)</div>
        </div>
    </div>

    <!-- SISTEMA PRINCIPAL -->
    <div id="contenidoSistema" style="display: none;">
        
        <header class="header-oficial shadow-sm">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="d-flex align-items-center gap-3">
                    <img src="escudo (2).jpg" onerror="this.onerror=null; this.src='escudo.jpg';" alt="Escudo Oficial" class="escudo-logo" style="width: 52px; height: 52px;">
                    <div>
                        <h4 class="m-0 fw-bold" style="font-size: 1.3rem;">H. CUERPO DE BOMBEROS Y PROTECCIÓN CIVIL</h4>
                        <small class="text-light opacity-80">Municipio de Santiago Tulantepec - Control Operativo 2026</small>
                    </div>
                </div>
                <button onclick="location.reload()" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</button>
            </div>
        </header>

        <!-- BARRA SUPERIOR CON MENÚ DESPLEGABLE DE APARTADOS -->
        <div class="barra-navegacion-superior sticky-top py-2">
            <div class="container-fluid px-3 d-flex justify-content-between align-items-center">
                <span class="fw-bold text-dark small"><i class="bi bi-shield-fill-exclamation text-danger"></i> CONTROL OPERATIVO</span>
                
                <div class="dropdown">
                    <button class="btn dropdown-toggle dropdown-toggle-apartados" type="button" id="btnApartadosPrincipal" data-bs-toggle="dropdown" aria-expanded="false" onclick="manejarVisibilidadWidget(false)">
                        <i class="bi bi-folder2-open me-1"></i> APARTADOS
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow" aria-labelledby="btnApartadosPrincipal">
                        
                        <!-- SUBMENÚ: REGISTRO DE SERVICIOS -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle d-flex justify-content-between align-items-center" href="#">
                                <span><i class="bi bi-calendar-check text-danger me-2"></i> Registro de Servicios</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark shadow">
                                <li><h6 class="dropdown-header text-uppercase text-danger fw-bold" style="font-size: 0.7rem;">MESES 2026</h6></li>
                                <?php 
                                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                foreach ($meses as $mes): 
                                    $id = strtolower($mes);
                                ?>
                                    <li><a class="dropdown-item item-tab-link" href="#" onclick="abrirPestana('tab-<?php echo $id; ?>', event)"><i class="bi bi-calendar-event me-2"></i><?php echo $mes; ?> 2026</a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item item-tab-link" href="#" onclick="abrirPestana('apartado-novedades', event, true)"><i class="bi bi-journal-text me-2"></i> Novedades</a></li>
                        <li><a class="dropdown-item" href="#" onclick="solicitarAcceso56(event)"><i class="bi bi-file-earmark-medical me-2"></i> 56</a></li>
                        <li><a class="dropdown-item item-tab-link" href="#" onclick="abrirPestana('apartado-vehicular', event)"><i class="bi bi-truck me-2"></i> Parque Vehicular</a></li>
                        <li><a class="dropdown-item item-tab-link" href="#" onclick="abrirPestana('apartado-inventario', event)"><i class="bi bi-box-seam me-2"></i> Inventario</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item item-tab-link" href="#" onclick="abrirPestana('apartado-ia', event)"><i class="bi bi-stars text-danger me-2"></i> Asistente IA Local (Ollama)</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4 px-3 px-md-4 pb-5">

            <div class="tab-content mb-5">
                
                <!-- TABLAS DE REGISTRO DE SERVICIOS POR MES -->
                <?php foreach ($meses as $mes): 
                    $id = strtolower($mes);
                ?>
                    <div class="tab-pane fade" id="tab-<?php echo $id; ?>">
                        <div class="card card-contenedor shadow-lg border-0">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 flex-wrap gap-2">
                                <h5 class="m-0 fw-bold text-dark fs-6 fs-md-5"><i class="bi bi-calendar-check text-danger me-2"></i>Registro de Servicios - <?php echo $mes; ?> 2026</h5>
                                <button class="btn btn-sm btn-rojo" onclick="agregarFilaServicio('tabla-<?php echo $id; ?>')"><i class="bi bi-plus-lg"></i> Agregar Fila</button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-0 align-middle table-custom" id="tabla-<?php echo $id; ?>">
                                        <thead>
                                            <tr>
                                                <th style="width: 8%;">Número</th>
                                                <th style="width: 18%;">Servicio</th>
                                                <th style="width: 10%;">Unidad</th>
                                                <th style="width: 8%;">Cantidad</th>
                                                <th style="width: 25%;">Materiales / Maquinaria / Herramientas</th>
                                                <th style="width: 12%;">Unidad de Medida</th>
                                                <th style="width: 14%;">Hoja de Atención / Reportante</th>
                                                <th style="width: 5%;">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" value="001"></td>
                                                <td><input type="text" class="form-control form-control-sm" value="Incendio en pastizal"></td>
                                                <td><input type="text" class="form-control form-control-sm" value="Unidad 04"></td>
                                                <td><input type="text" class="form-control form-control-sm" value="1"></td>
                                                <td><textarea class="form-control form-control-sm" rows="1">Matafuegos, batefuegos, 500L agua</textarea></td>
                                                <td><input type="text" class="form-control form-control-sm" value="Servicio"></td>
                                                <td><input type="text" class="form-control form-control-sm" value="REP-102 / Juan P."></td>
                                                <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- APARTADO 1: NOVEDADES -->
                <div class="tab-pane fade" id="apartado-novedades">
                    <div class="card card-contenedor shadow-lg border-0">
                        <div class="card-header bg-dark text-white py-3">
                            <h5 class="m-0 fw-bold"><i class="bi bi-journal-text me-2"></i> REPORTE</h5>
                        </div>
                        <div class="card-body">
                            <div class="border p-3 rounded bg-light mb-3">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Guardia:</label>
                                        <input type="text" id="inputGuardia" class="form-control form-control-sm" placeholder="Nombre de guardia" oninput="guardarDatosNovedades()">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Cabinero:</label>
                                        <input type="text" id="inputCabinero" class="form-control form-control-sm" placeholder="Nombre de cabinero" oninput="guardarDatosNovedades()">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Fecha:</label>
                                        <input type="date" id="inputFechaNovedad" class="form-control form-control-sm" oninput="guardarDatosNovedades()">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Reporte y Bitácora de Novedades:</label>
                                <textarea id="inputTextoNovedades" class="form-control" rows="8" placeholder="Escriba las novedades relevantes de la jornada..." oninput="guardarDatosNovedades()"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- APARTADO 2: 56 (CLAVE 12345) -->
                <div class="tab-pane fade" id="apartado-56">
                    <div class="card card-contenedor shadow-lg border-0">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3 flex-wrap gap-2">
                            <h5 class="m-0 fw-bold fs-6 fs-md-5"><i class="bi bi-file-earmark-medical me-2"></i> REGISTRO Y CONTROL DE 56</h5>
                            <button class="btn btn-sm btn-rojo" onclick="agregarFila56()"><i class="bi bi-plus-lg"></i> Agregar Registro</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle table-custom mb-0" id="tabla56">
                                    <thead>
                                        <tr>
                                            <th>Día</th>
                                            <th>Mes</th>
                                            <th>Unidad</th>
                                            <th>L/F</th>
                                            <th>Costo</th>
                                            <th>02</th>
                                            <th>Viáticos</th>
                                            <th>Colonia / Clínica / Hospital</th>
                                            <th>Rojo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-sm" value="05"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Octubre"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="U-02"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Local"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="$0.00"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="2"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="$150"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Hospital General Tulantepec"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="N/A"></td>
                                            <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- APARTADO 3: PARQUE VEHICULAR -->
                <div class="tab-pane fade" id="apartado-vehicular">
                    <div class="card card-contenedor shadow-lg border-0">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3 flex-wrap gap-2">
                            <h5 class="m-0 fw-bold fs-6 fs-md-5"><i class="bi bi-truck me-2"></i> ESTADO DEL PARQUE VEHICULAR</h5>
                            <button class="btn btn-sm btn-rojo" onclick="agregarFilaVehicular()"><i class="bi bi-plus-lg"></i> Agregar Unidad</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle table-custom mb-0" id="tablaVehicular">
                                    <thead>
                                        <tr>
                                            <th>Unidad</th>
                                            <th>Marca</th>
                                            <th>Año</th>
                                            <th>Situación</th>
                                            <th>Servicio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-sm" value="Unidad 04"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Ford F-350"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="2018"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Operativa / En servicio"></td>
                                            <td><input type="text" class="form-control form-control-sm" value="Ataque rápido y rescate"></td>
                                            <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- APARTADO: INVENTARIO -->
                <div class="tab-pane fade" id="apartado-inventario">
                    <div class="card card-contenedor shadow-lg border-0">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3 flex-wrap gap-2">
                            <h5 class="m-0 fw-bold fs-6 fs-md-5"><i class="bi bi-box-seam text-danger me-2"></i> CONTROL DE INVENTARIO Y MATERIALES</h5>
                            <button class="btn btn-sm btn-rojo" onclick="agregarFilaInventario()"><i class="bi bi-plus-lg"></i> Agregar Elemento</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle table-custom mb-0" id="tablaInventario">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Material / Descripción</th>
                                            <th style="width: 25%;">Clasificación</th>
                                            <th style="width: 20%;">Cantidad</th>
                                            <th style="width: 15%;">Indicador de Estado</th>
                                            <th style="width: 10%;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-sm" value="Matafuegos de Polvo Químico"></td>
                                            <td>
                                                <select class="form-select form-select-sm" onchange="actualizarEstadoInventario(this)">
                                                    <option value="pieza" selected>Pieza</option>
                                                    <option value="servicio">Servicio</option>
                                                </select>
                                            </td>
                                            <td><input type="number" class="form-control form-control-sm cantidad-inv" value="25" oninput="actualizarEstadoInventario(this)"></td>
                                            <td class="text-center"><span class="badge rounded-pill px-3 py-2 indicador-estado" style="background-color: #ffc107; color: #000;">Amarillo</span></td>
                                            <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- APARTADO 4: INTELIGENCIA ARTIFICIAL (LOCAL - OLLAMA) -->
                <div class="tab-pane fade" id="apartado-ia">
                    <div class="card card-contenedor shadow-lg border-0">
                        <div class="card-header bg-dark text-white py-3">
                            <h5 class="m-0 fw-bold"><i class="bi bi-stars text-danger me-2"></i> ASISTENTE TÉCNICO LOCAL (OLLAMA)</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted small mb-3">Modelo ligero ejecutándose en tu PC local mediante Ollama.</p>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Escribe tu consulta para los Bomberos:</label>
                                <div class="input-group mb-2">
                                    <input type="text" id="promptIA" class="form-control" placeholder="Ej: ¿Qué hacer en caso de fuga de gas LP?">
                                    <button class="btn btn-rojo" type="button" onclick="consultarOllama()">Consultar IA Local</button>
                                </div>
                                <small class="text-secondary">Nombre de tu modelo en Ollama: <input type="text" id="nombreModelo" class="form-control form-control-sm d-inline-block w-25 ms-1" value="tinyllama:latest"></small>
                            </div>

                            <div id="loadingGemini" class="text-secondary d-none my-3">
                                <span class="spinner-border spinner-border-sm text-danger" role="status"></span> Procesando localmente en tu PC...
                            </div>

                            <div id="cajaRespuestaIA" class="p-3 bg-light rounded border d-none">
                                <strong class="text-danger"><i class="bi bi-chat-left-text"></i> Respuesta de la IA Local:</strong>
                                <div id="respuestaTextoIA" class="mt-2 text-dark" style="white-space: pre-wrap;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- MARCA TRASLÚCIDA / CRÉDITOS -->
        <div class="creditos-traslucidos shadow-sm">
            <div><strong>Desarrolladores:</strong> Juan Pablo Muñoz García | Juan Santiago López Cabrera | Mildreth Ate Olvera Ruiz</div>
            <div><strong>Componente:</strong> Programación | <strong>Plantel:</strong> CECyTEH | <strong>Ocupación:</strong> Estudiantes</div>
            <div><strong>Contacto:</strong> 775 121 6014 - 775 182 5326 - 775 162 1447</div>
            <div class="fst-italic opacity-75">Sin fines comerciales</div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function verificarPassword() {
            let pass = document.getElementById('inputPassword').value;
            if (pass === "bomberos1") {
                document.getElementById('pantallaLogin').style.display = 'none';
                document.getElementById('contenidoSistema').style.display = 'block';
                cargarDatosLocalStorage();
                inicializarInventario();
            } else {
                document.getElementById('errorLogin').classList.remove('d-none');
            }
        }

        function togglePassword() {
            let input = document.getElementById('inputPassword');
            let icono = document.querySelector('#btnTogglePass i');
            if (input.type === "password") {
                input.type = "text";
                icono.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                input.type = "password";
                icono.classList.replace("bi-eye-slash", "bi-eye");
            }
        }

        function abrirPestana(idTab, event, esNovedades = false) {
            if(event) event.preventDefault();
            document.querySelectorAll('.tab-pane').forEach(tab => {
                tab.classList.remove('show', 'active');
            });
            let tabSeleccionada = document.getElementById(idTab);
            if(tabSeleccionada) {
                tabSeleccionada.classList.add('show', 'active');
            }
            manejarVisibilidadWidget(true);
        }

        function manejarVisibilidadWidget(mostrar) {
            let widget = document.getElementById('widgetCompartir');
            if(widget) {
                widget.style.display = mostrar ? 'block' : 'none';
            }
        }

        function solicitarAcceso56(event) {
            if(event) event.preventDefault();
            let modal = new bootstrap.Modal(document.getElementById('modalPassword56'));
            modal.show();
        }

        function validarPassword56() {
            let pass = document.getElementById('inputPass56').value;
            if(pass === "12345") {
                let modalEl = document.getElementById('modalPassword56');
                let modal = bootstrap.Modal.getInstance(modalEl);
                modal.hide();
                document.getElementById('inputPass56').value = '';
                document.getElementById('errorPass56').classList.add('d-none');
                abrirPestana('apartado-56', null);
            } else {
                document.getElementById('errorPass56').classList.remove('d-none');
            }
        }

        function cancelarPassword56() {
            document.getElementById('inputPass56').value = '';
            document.getElementById('errorPass56').classList.add('d-none');
        }

        function eliminarFila(btn) {
            let tr = btn.closest('tr');
            if(tr) tr.remove();
        }

        function agregarFilaServicio(idTabla) {
            let tbody = document.querySelector('#' + idTabla + ' tbody');
            let tr = document.createElement('tr');
            tr.innerHTML = `
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><textarea class="form-control form-control-sm" rows="1"></textarea></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
            `;
            tbody.appendChild(tr);
        }

        function agregarFila56() {
            let tbody = document.querySelector('#tabla56 tbody');
            let tr = document.createElement('tr');
            tr.innerHTML = `
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
            `;
            tbody.appendChild(tr);
        }

        function agregarFilaVehicular() {
            let tbody = document.querySelector('#tablaVehicular tbody');
            let tr = document.createElement('tr');
            tr.innerHTML = `
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td><input type="text" class="form-control form-control-sm"></td>
                <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
            `;
            tbody.appendChild(tr);
        }

        function agregarFilaInventario() {
            let tbody = document.querySelector('#tablaInventario tbody');
            let tr = document.createElement('tr');
            tr.innerHTML = `
                <td><input type="text" class="form-control form-control-sm"></td>
                <td>
                    <select class="form-select form-select-sm" onchange="actualizarEstadoInventario(this)">
                        <option value="pieza" selected>Pieza</option>
                        <option value="servicio">Servicio</option>
                    </select>
                </td>
                <td><input type="number" class="form-control form-control-sm cantidad-inv" value="0" oninput="actualizarEstadoInventario(this)"></td>
                <td class="text-center"><span class="badge rounded-pill px-3 py-2 indicador-estado" style="background-color: #ffc107; color: #000;">Amarillo</span></td>
                <td class="text-center"><button class="btn btn-sm btn-outline-danger" onclick="eliminarFila(this)"><i class="bi bi-x-lg"></i></button></td>
            `;
            tbody.appendChild(tr);
        }

        function actualizarEstadoInventario(elemento) {
            let tr = elemento.closest('tr');
            let cantidadInput = tr.querySelector('.cantidad-inv');
            let badgeSpan = tr.querySelector('.indicador-estado');
            let valor = parseInt(cantidadInput.value) || 0;

            if (valor > 20) {
                badgeSpan.style.backgroundColor = '#198754'; // Verde
                badgeSpan.style.color = '#fff';
                badgeSpan.textContent = 'Verde';
            } else if (valor >= 10 && valor <= 20) {
                badgeSpan.style.backgroundColor = '#ffc107'; // Amarillo
                badgeSpan.style.color = '#000';
                badgeSpan.textContent = 'Amarillo';
            } else {
                badgeSpan.style.backgroundColor = '#dc3545'; // Rojo
                badgeSpan.style.color = '#fff';
                badgeSpan.textContent = 'Rojo';
            }
        }

        function inicializarInventario() {
            document.querySelectorAll('#tablaInventario tbody tr').forEach(tr => {
                let input = tr.querySelector('.cantidad-inv');
                if(input) actualizarEstadoInventario(input);
            });
        }

        function guardarDatosNovedades() {
            // Función de respaldo para almacenamiento local si lo usa el sistema
        }

        function cargarDatosLocalStorage() {
            let urlActual = window.location.href;
            let urlInput = document.getElementById('urlCompartir');
            if(urlInput) urlInput.value = urlActual;
            
            let contenedorQR = document.getElementById('contenedorQR');
            if(contenedorQR) {
                contenedorQR.innerHTML = "";
                new QRCode(contenedorQR, {
                    text: urlActual,
                    width: 128,
                    height: 128
                });
            }
        }

        function copiarEnlace() {
            let input = document.getElementById('urlCompartir');
            input.select();
            input.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(input.value);
            let alerta = document.getElementById('copiadoAlerta');
            alerta.classList.remove('d-none');
            setTimeout(() => alerta.classList.add('d-none'), 2000);
        }

        async function consultarOllama() {
            let prompt = document.getElementById('promptIA').value;
            let modelo = document.getElementById('nombreModelo').value;
            if(!prompt.trim()) return;

            document.getElementById('loadingGemini').classList.remove('d-none');
            document.getElementById('cajaRespuestaIA').classList.add('d-none');

            try {
                let response = await fetch('http://localhost:11434/api/generate', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        model: modelo,
                        prompt: prompt,
                        stream: false
                    })
                });
                let data = await response.json();
                document.getElementById('respuestaTextoIA').textContent = data.response || "Sin respuesta del modelo.";
                document.getElementById('cajaRespuestaIA').classList.remove('d-none');
            } catch (err) {
                document.getElementById('respuestaTextoIA').textContent = "Error al conectar con Ollama local. Asegúrate de que Ollama esté abierto en tu PC.";
                document.getElementById('cajaRespuestaIA').classList.remove('d-none');
            } finally {
                document.getElementById('loadingGr-min' || 'loadingGemini').classList.add('d-none');
                document.getElementById('loadingGemini').classList.add('d-none');
            }
        }
    </script>
</body>
</html>