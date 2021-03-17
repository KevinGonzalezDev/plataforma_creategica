@extends('layout.panel')

@section('panel')

<div class="center-container main-container-width">




    <div class="subtitle-options">

        <h2 class="subtitles start">RECURSOS TANGIBLES</h2>

    <div>

        <a href="#"><img src="img/icons/admin/add.png" alt="icon"></a>
            <span class="vertical-separator"></span>
        <a href="#"><img src="img/icons/admin/edit.png" alt="icon"></a>
            <span class="vertical-separator"></span>
        <a href="#"><img src="img/icons/admin/delete.png" alt="icon"></a>
            <span class="vertical-separator"></span>
        <a href="#"><img src="img/icons/admin/print.png" alt="icon"></a>
    </div>

    </div>


    <span class="line-separator big-margin-bottom"></span>

    <div class="table-title-option margin-bottom">
        <div>
            <!-- CUANDO SE SELECCIONE UNA DE LAS OPCIONES, SE AÑADE DINAMICAMENTE ESTA CLASE "talbe-title-option-selected" -->
            <a href="#" class="table-title-option-selected">Electrónicos</a>
            <a href="#">Muebles</a>
            <a href="#">Documentos</a>
        </div>

        <span class="line-separator primaryColor-background"></span>
        
    </div>


    <table class="styled-table">

        <tr class="table-head">
            <td>INMUEBLE</td>
            <td>MARCA</td>
            <td>MODELO</td>
            <td>SERIAL</td>
            <td># DE REFERENCIA</td>
            <td>ANTIGÜEDAD</td>
            <td>NOMBRE RESPONSABLE</td>
            <td>CORREO</td>
            <td>JEFE DIRECTO</td>
        </tr>

        <tr class="white-space-table"></tr>

        <tr class="table-body">
            <td>Ysenia Mora</td>
            <td>1013669054</td>
            <td>Nomina</td>
            <td>Bancolombia</td>
            <td>0001239485</td>
            <td>$1'500.000</td>
            <td>05 de junio de 2020</td>
            <td></td>
            <td>0293847</td>
        </tr>

        <tr class="white-space-table"></tr>

        <tr class="table-body">
            <td>Ysenia Mora</td>
            <td>1013669054</td>
            <td>Nomina</td>
            <td>Bancolombia</td>
            <td>0001239485</td>
            <td>$1'500.000</td>
            <td>05 de junio de 2020</td>
            <td></td>
            <td>0293847</td>
        </tr>

    </table>


</div>


@endsection