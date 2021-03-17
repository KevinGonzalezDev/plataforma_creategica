@extends('layout.panel')

@section('panel')

    <div class="center-container main-container-width">

        <div class="single-title">
            <h2>CREAR COTIZACIÓN</h2>
            <span class="line-separator"></span>
        </div>

        <form action="#" class="full-width">

            @csrf

        <div class="factura-container margin-top">
                
                <div class="factura-column">

                    <div>
                        <h4 class="paragraphs">Fecha:</h4>
                        <input type="text" placeholder="14.12.2017">
                    </div>
    
                    <div>
                        <h4 class="paragraphs">Cliente:</h4>
                        <input type="text">
                    </div>
    
                    <div>
                        <h4 class="paragraphs">Email:</h4>
                        <input type="email">
                    </div>

                    <div>
                        <h4 class="paragraphs">Dirección:</h4>

                        <select name="" id="">
                            <option value="">test</option>
                        </select>

                        <select name="" id="">
                            <option value="">test</option>
                        </select>

                        <select name="" id="">
                            <option value="">test</option>
                        </select>

                        <select name="" id="">
                            <option value="">test</option>
                        </select>

                    </div>
    
                </div>







                <div class="factura-column">

                    <div>
                        <h4 class="paragraphs">Cotización No.</h4>
                        <input type="text" placeholder="1">
                    </div>
    
                    <div>
                        <h4 class="paragraphs">CC/Nit:</h4>
                        <input type="text">
                    </div>
    
                    <div>
                        <h4 class="paragraphs">Teléfono:</h4>
                        <input type="email">
                    </div>

                    <div>
                        <h4 class="paragraphs">Ciudad</h4>
                        <input type="text">
                    </div>
    
                </div>


                <div class="factura-column">
                        <label for="file">
                            <h3 class="paragraphs">Subir logo</h3>
                        </label>
                    <input type="file" id="file">
                </div>



        </div>


















            <!-- FORMULARIO DE FACTURA -->

            <div class="body-table-facturacion">

                <div class="body-table-facturacion-head">

                    <div class="primaryColor-background">
                        <a href="#" class="links bold">Información adicional</a>
                        <a href="#" class="links bold">IVA</a>
                        <a href="#" class="links bold">Aplicar descuento</a>
                        <img src="img/icons/admin/circle-add.png" alt="icon">
                    </div>


                    <div class="secondaryColor-background">
                        <a href="#" class="xls links bold">Subir archivo:</a>
                    </div>

                </div>

                <div class="body-table-facturacion-body">

                    <table>
                        <tr class="factura-table-head">
                            <td>Producto</td>
                            <td>Descripción</td>
                            <td>Unit</td>
                            <td>Precio unitario</td>
                            <td>Precio final</td>
                        </tr>

                        <tr class="white-space-table"></tr>



                        <tr class="factura-table-body">

                            <td>
                                
                                <span class="arrow"><img src="img/icons/admin/down-arrow.png" alt="icon"></span>

                                <select name="" id="">
                                    <option value="">Select</option>
                                </select>
                            </td>

                            <td>
                                <input type="text">
                            </td>

                            <td>
                                <input type="number" name="" id="" min="1" placeholder="1">
                            </td>

                            <td> <input type="text"> </td>

                            <td class="flex-td">
                                <input type="text" placeholder="$ 0,00">
                                <img src="img/icons/admin/circle-close.png" alt="icon" class="big-icons">
                            </td>
                        </tr>

                        <tr class="small-white-space-table"></tr>

                        <tr class="factura-table-body">

                            <td>
                                
                                <span class="arrow"><img src="img/icons/admin/down-arrow.png" alt="icon"></span>

                                <select name="" id="">
                                    <option value="">Select</option>
                                </select>
                            </td>

                            <td></td>

                            <td>
                                <input type="number" name="" id="" min="1" placeholder="1">
                            </td>

                            <td></td>

                            <td class="flex-td">
                                <input type="text" placeholder="$ 0,00">
                                <img src="img/icons/admin/circle-close.png" alt="icon" class="big-icons">
                            </td>
                        </tr>
                    </table>

                    <div class="add-product">
                        <img src="img/icons/admin/circle-add-dark.png" alt="icon">
                        <a href="#">Agregar producto</a>
                    </div>

                </div>

            </div>


            <div class="save-container">
                <input type="submit" value="Guardar">
                <input type="submit" value="Enviar">
                <input type="submit" value="Descargar">
            </div>



        </form>

    </div>

@endsection