@extends('layout.panel')



@section('panel')


    <div class="grid-container">

        <a href="{{route('datosEmpresa')}}">
        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/informacion-empresa-dark.png" alt="icon" class="change-icon">
                <h3>INFO EMPRESA.</h3>
            </div>
        </div>
        </a>

        <a href="{{route('listadoCliente')}}">
        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/clientes-dark.png" alt="icon" class="change-icon">
                <h3>CLIENTES</h3>
            </div>
        </div>
        </a>

        <a href="{{route('proovedores')}}">
        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/proveedores-dark.png" alt="icon" class="change-icon">
                <h3>PROVEEDORES.</h3>
            </div>
        </div>
        </a>

        <a href="{{route('mainOrden')}}">
        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/orden-trabajo-dark.png" alt="icon" class="change-icon">
                <h3>ORD. TRABAJO.</h3>
            </div>
        </div>
        </a>
        
        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/brief-dark.png" alt="icon" class="change-icon">
                <h3>BRIEF</h3>
            </div>
        </div>

        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/orden-produccion-dark.png" alt="icon" class="change-icon">
                <h3>ORD PRODUCCIÓN</h3>
            </div>
        </div>


        <div class="grid-block">
            <p>Comercial</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/administrativo-dark.png" alt="icon" class="change-icon">
                <h3>ADMINISTRATIVO</h3>
            </div>
        </div>


        <div class="grid-block">
            <p>Tráfico operativo</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/trafico-dark.png" alt="icon" class="change-icon">
                <h3>TRÁFICO.</h3>
            </div>
        </div>


        <div class="grid-block">
            <p>Administrativo</p>
            <div class="info-grid-block">
                <img src="img/icons/menu/reportes-dark.png" alt="icon" class="change-icon">
                <h3>REPORTES</h3>
            </div>
        </div>

    </div>



@endsection