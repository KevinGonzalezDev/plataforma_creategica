@extends('layout.panel')

@section('panel')
    
<div class="grid-container">

    <a href="#">
    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/informacion-empresa-dark.png" alt="icon" class="change-icon">
            <h3>NUEVO PROYECTO.</h3>
        </div>
    </div>
    </a>

    <a href="{{route('presupuestos')}}">
    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/clientes-dark.png" alt="icon" class="change-icon">
            <h3>PRESUPUESTOS</h3>
        </div>
    </div>
    </a>

    <a href="{{route('cotizaciones')}}">
    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/proveedores-dark.png" alt="icon" class="change-icon">
            <h3>COTIZACIÓN.</h3>
        </div>
    </div>
    </a>

    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/orden-trabajo-dark.png" alt="icon" class="change-icon">
            <h3>SOLICITUD FACTURACIÓN</h3>
        </div>
    </div>

    <a href="{{route('ordenDeProducto')}}">
    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/brief-dark.png" alt="icon" class="change-icon">
            <h3>ORDEN DE PRODUCCIÓN</h3>
        </div>
    </div>
    </a>

    <div class="grid-block">
        <img src="img/icons/admin/add.png" alt="icon image" class="add-simbol">
        <p>Comercial</p>
        <div class="info-grid-block">
            <img src="img/icons/menu/orden-produccion-dark.png" alt="icon" class="change-icon">
            <h3>GENERAR O. COMPRA</h3>
        </div>
    </div>

</div>


@endsection