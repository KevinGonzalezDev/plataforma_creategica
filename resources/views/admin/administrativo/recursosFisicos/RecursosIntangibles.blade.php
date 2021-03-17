@extends('layout.panel')

@section('panel')

<div class="center-container main-container-width">




    <div class="subtitle-options">

        <h2 class="subtitles start">RECURSOS INTANGIBLES</h2>

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



    <table class="styled-table">

        <tr class="table-head">
            <td>FECHA</td>
            <td>DIVISA IMPORTE</td>
            <td>DESCRIPCIÓN</td>
            <td>ESTADO</td>
            <td>NOMBRE RESPONSABLE</td>
            <td>CORREO</td>
            <td>FACTURA</td>
            <td>TRM COP</td>
            <td>VALOR TOTAL</td>
            <td>DESCRIPCIÓN</td>
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
            <td>ejemplo</td>
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
            <td>ejemplo</td>
        </tr>

    </table>


</div>


@endsection