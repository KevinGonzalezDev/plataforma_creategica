@extends('layout.panel')

@section('panel')

<div class="center-container main-container-width">

    <div class="single-title">
        <h2>SOLICITUD DE FACTURACIÓN</h2>
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

                <input type="submit" value="Solicitar Factura">
            </div>



    </div>

    </form>







    <!-- TALBA 2 -->

    
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

                <input type="submit" value="Solicitar Factura">
            </div>



    </div>

    </form>



</div>
@endsection