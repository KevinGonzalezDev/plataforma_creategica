<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Creategica</title>
</head>
<body>

<div class="all-main-container">

    <div class="main-container">
        
        <div class="top-container">
            <div class="search-container">
                <a href=""><img src="img/icons/search.png" alt="searching"></a>
                <input type="search" name="" id="" placeholder="Search results...">
            </div>



            <div class="nav-container">

                <nav>
                    <img src="img/icons/camera.png" alt="camera icon" class="icons">
                    <img src="img/icons/engranaje.png" alt="engranaje icon" class="icons">
                    <img src="img/icons/email.png" alt="email icon" class="icons">
                    <img src="img/icons/notify.png" alt="notify image" class="icons">
                </nav>

                <div class="separator"></div>

                <div class="profile-container">
            
                    <p>John Doe</p>

                    <div>
                        <img src="img/icons/gray-down-arrow.png" alt="down arrow icon" class="icons">
                        <span>
                            <img src="img/demo/sotck.jpg" alt="">
                        </span>
                    </div>

                </div>

            </div>

        </div>

        @yield('panel')
    </div>

    
    <div class="panel-container">

        <a href="{{route('index')}}"> <img src="img/icons/creategica-logo.png" alt="logotype" id="main-logo"> </a>

        <div class="option-list-container">

            <div class="option only-option">
                <img src="img/icons/menu/home.png" alt="icon">
                <a href="{{route('index')}}">Home</a>
            </div>

                    <div class="option-container @if(Request::url() == route('datosEmpresa') || Request::url() == route('documentos'))opened @endif">

                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/informacion-empresa.png" alt="icon">
                            <a href="#" class="option-open">Información Empresa</a>
                        </div>

                    </div>

                    <div class="list-plegable-container">

                        <div class="list-plegable @if(Request::url() == route('datosEmpresa')) list-selected @endif">
                            <img src="img/icons/menu/datos-empresa.png" alt="icon">
                            <a href="{{route('datosEmpresa')}}">Datos Empresa</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('documentos')) list-selected @endif">
                            <img src="img/icons/menu/informacion-empresa.png" alt="icon">
                            <a href="{{route('documentos')}}">Documentos</a>
                        </div>

                    </div>

                    <div class="option-container @if(Request::url() == route('nuevoCliente') || Request::url() == route('listadoCliente'))opened @endif">
                        
                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <a href="#"><img src="img/icons/menu/clientes.png" alt="icon"></a>
                            <a href="#">Clientes</a>
                        </div>            
                    </div>

                    <div class="list-plegable-container">

                        <div class="list-plegable @if(Request::url() == route('listadoCliente')) list-selected @endif">
                            <img src="img/icons/menu/listado-cliente.png" alt="icon">
                            <a href="{{route('listadoCliente')}}">Listado Cliente</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('nuevoCliente')) list-selected @endif">
                            <img src="img/icons/menu/nuevo-cliente.png" alt="icon">
                            <a href="{{route('nuevoCliente')}}">Nuevo Cliente</a>
                        </div>

                    </div>
            
                    <div class="option-container @if(Request::url() == route('proovedores') || Request::url() == route('nuevoProveedor'))opened @endif">
                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/proveedores.png" alt="icon">
                            <a href="#">Proveedores</a>
                        </div>
                    </div>

                    <div class="list-plegable-container">

                        <div class="list-plegable @if(Request::url() == route('proovedores')) list-selected @endif">
                            <img src="img/icons/menu/listado-cliente.png" alt="icon">
                            <a href="{{route('proovedores')}}">Listado de Proveedores</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('nuevoProveedor')) list-selected @endif">
                            <img src="img/icons/menu/nuevo-cliente.png" alt="icon">
                            <a href="{{route('nuevoProveedor')}}">Nuevo Proveedor</a>
                        </div>

                    </div>


                    <div class="option-container @if(Request::url() == route('presupuestos') || 
                    Request::url() == route('cotizaciones') || 
                    Request::url() == route('ordenDeProducto') || 
                    Request::url() == route('ordenDeCompra')||
                    Request::url() == route('solicitudFacturacion'))opened @endif">

                        <div class="option plegable @if(Request::url() == route('mainOrden')) list-selected @endif">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/orden-trabajo.png" alt="icon">
                            <a href="{{route('mainOrden')}}">Orden de trabajo</a>
                        </div>

                    </div>


                    <div class="list-plegable-container">

                        <div class="list-plegable @if(Request::url() == route('presupuestos')) list-selected @endif">
                            <img src="img/icons/menu/presupuestos.png" alt="icon">
                            <a href="{{route('presupuestos')}}">Presupuestos</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('cotizaciones')) list-selected @endif">
                            <img src="img/icons/menu/cotizaciones.png" alt="icon">
                            <a href="{{route('cotizaciones')}}">Cotizaciones</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('ordenDeProducto')) list-selected @endif">
                            <img src="img/icons/menu/orden-produccion.png" alt="icon">
                            <a href="{{route('ordenDeProducto')}}">Ord. Producción</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('ordenDeCompra')) list-selected @endif">
                            <img src="img/icons/menu/orden-compra.png" alt="icon">
                            <a href="{{route('ordenDeCompra')}}">Ord. de compra</a>
                        </div>

                        <div class="list-plegable @if(Request::url() == route('solicitudFacturacion')) list-selected @endif">
                            <img src="img/icons/menu/solicitud-facturacion.png" alt="icon">
                            <a href="{{route('solicitudFacturacion')}}">Solicitud facturación</a>
                        </div>

                    </div>



                    <div class="option-container">
                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/brief.png" alt="icon">
                            <a href="#">Brief Campañas</a>
                        </div>
                    </div>

                    
                    <div class="list-plegable-container">

                        <div class="list-plegable">
                            <img src="img/icons/menu/branding.png" alt="icon">
                            <a href="#">Branding</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/mktg-experiencial.png" alt="icon">
                            <a href="#">Mktg-experiencial</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/mktg-digital.png" alt="icon">
                            <a href="#">Mktg Digital</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/shopper-mktg.png" alt="icon">
                            <a href="#">Shopper Mktg</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/management.png" alt="icon">
                            <a href="#">Management</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/360-media-plan.png" alt="icon">
                            <a href="#">360° media plan</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/solicitud-artes-finales.png" alt="icon">
                            <a href="#">Solicitud Artes Finales</a>
                        </div>

                    </div>



                    <div class="option-container">
                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/trafico.png" alt="icon">
                            <a href="#">Tráfico Operativo</a>
                        </div>
                    </div>


                    
                    <div class="list-plegable-container">

                        <div class="list-plegable">
                            <img src="img/icons/menu/listado-cliente.png" alt="icon">
                            <a href="#">Tráfico General</a>
                        </div>

                        <div class="list-plegable">
                            <img src="img/icons/menu/nuevo-cliente.png" alt="icon">
                            <a href="#">Reuniones de Tráfico</a>
                        </div>

                    </div>



                    <div class="option-container @if(Request::url() == route('RecursosTangibles')  
                    || Request::url() == route('RecursosIntangibles')
                    || Request::url() == route('cuentasPorCobrar')
                    )opened 
                    
                    @endif">
                        <div class="option plegable">
                            <a href="#" class="option-open down-arrow">▼</a>
                            <img src="img/icons/menu/administrativo.png" alt="icon">
                            <a href="#">Administrativo</a>
                        </div>                        
                    </div>



                    <div class="list-plegable-container">

                        <div class="option-container">
                            <div class="list-plegable">
                                <a href="#" class="option-open down-arrow">▼</a>
                                <img src="img/icons/menu/recursos-humanos.png" alt="icon">
                                <a href="#">Recursos Humanos</a>
                            </div>
                        </div>

                            <div class="list-plegable-container">
                                <div class="list-plegable into-option">
                                    <img src="img/icons/menu/orden-trabajo.png" alt="icon">
                                    <a href="#">Selección</a>
                                </div>

                                <div class="list-plegable into-option">
                                    <img src="img/icons/menu/contratacion.png" alt="icon">
                                    <a href="#">Contratación</a>
                                </div>

                                <div class="list-plegable into-option">
                                    <img src="img/icons/menu/nomina.png" alt="icon">
                                    <a href="#">Nómina</a>
                                </div>

                                <div class="list-plegable into-option">
                                    <img src="img/icons/menu/reportes.png" alt="icon">
                                    <a href="#">Evaluación</a>
                                </div>

                                <div class="list-plegable into-option">
                                    <img src="img/icons/menu/nuevo-cliente.png" alt="icon">
                                    <a href="#">Crear Usuarios</a>
                                </div>
                            </div>


                            <div class="option-container @if(Request::url() == route('RecursosTangibles')  || Request::url() == route('RecursosIntangibles'))opened @endif">
                                <div class="list-plegable">
                                    <a href="#" class="option-open down-arrow">▼</a>
                                    <img src="img/icons/menu/recursos-fisicos.png" alt="icon">
                                    <a href="#">Recursos Físicos</a>
                                </div>                                
                            </div>


                                <div class="list-plegable-container">
                                    <div class="list-plegable into-option @if(Request::url() == route('RecursosTangibles')) list-selected @endif">
                                        <img src="img/icons/menu/tangibles.png" alt="icon">
                                        <a href="{{route('RecursosTangibles')}}">Tangibles</a>
                                    </div>

                                    <div class="list-plegable into-option @if(Request::url() == route('RecursosIntangibles')) list-selected @endif">
                                        <img src="img/icons/menu/intangibles.png" alt="icon">
                                        <a href="{{route('RecursosIntangibles')}}">Intangibles</a>
                                    </div>
                                </div>


                                <div class="option-container @if(Request::url() == route('cuentasPorCobrar'))opened @endif">
                                    <div class="list-plegable">
                                        <a href="#" class="option-open down-arrow">▼</a>
                                        <img src="img/icons/menu/recursos-economicos.png" alt="icon">
                                        <a href="#">Recursos Económicos</a>
                                    </div>
                                </div>


                                <div class="list-plegable-container">
                                    <div class="list-plegable into-option @if(Request::url() == route('cuentasPorCobrar')) list-selected @endif">
                                        <img src="img/icons/menu/presupuestos.png" alt="icon">
                                        <a href="{{route('cuentasPorCobrar')}}">Cuentas por cobrar</a>
                                    </div>

                                    <div class="list-plegable into-option">
                                        <img src="img/icons/menu/cuentas-por-pagar.png" alt="icon">
                                        <a href="#">Cuentas por pagar</a>
                                    </div>
                                </div>


                                <div class="option-container">
                                    <div class="list-plegable">
                                        <a href="#" class="option-open down-arrow">▼</a>
                                        <img src="img/icons/menu/reportes.png" alt="icon">
                                        <a href="#">Reportes</a>
                                    </div>
                                </div>



                    </div>



        </div>

    </div>

</div>

<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/blocks-hover.js"></script>
</body>
</html>