@extends('layout.panel')

@section('panel')





<div class="center-container main-container-width">

    <div class="general-table">
        <h2 class="subtitles">CREAR NUEVO CLIENTE</h2>

        <form action="#">

            @csrf

        <!-- START HEAD TABLE -->
        <div class="head-table">
            <label for="archivo">
                <p href="#" class="links">Logotipo</p>
            </label>

            <input type="file" id="archivo">

            <div class="inputs-table-row">

                <div>
                    <p class="paragraphs">Razón Social</p>
                    <input type="text">
                </div>
                
                <div>
                    <p class="paragraphs">T.Doc.</p>
                    <select name="" id="">
                        <option value="">Test</option>
                    </select>
                </div>

                <div>
                    <p class="paragraphs"># Documento</p>
                    <input type="text">
                </div>

                <div>
                    <p class="paragraphs">E-mail</p>
                    <input type="text">
                </div>

            </div>
        </div>
        <!-- END HEAD TABLE -->


        <div class="body-table">

            <!-- ROW 1 ------- -->
            <div class="inputs-table-row margin-sections">

                <div>
                    <p class="paragraphs black">Dirección comercial</p>
                    <input type="text" name="direccion">
                </div>

                <div>
                    <p class="paragraphs black">Ciudad</p>
                    <input type="text" name="ciudad">
                </div>

                <div>
                    <p class="paragraphs black">País</p>
                    <input type="text" name="pais">
                </div>

                <div>
                    <p class="paragraphs black">Teléfono</p>
                    <input type="text" name="telefono">
                </div>

            </div>
            <!-- ROW 1 ------- END -->



            <!-- ROW 2 ------- -->
            <div class="inputs-table-row margin-sections">

                <div>
                    <p class="paragraphs black">Nombre Representante legal</p>
                    <input type="text" name="representanteLegal">
                </div>

                <div>
                    <p class="paragraphs black">E-mail</p>
                    <input type="emailRepresentante" name="ciudad">
                </div>

                <div>
                    <p class="paragraphs black">Teléfono</p>
                    <input type="text" name="telefonoRepresentante">
                </div>


            </div>
            <!-- ROW 2 ------- END -->



            <!-- ROW 3 ------- -->
            <div class="inputs-table-row margin-sections">

                <div>
                    <p class="paragraphs black">Observaciones</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

            </div>
            <!-- ROW 3 ------- END -->                
            
        </div>

        <input type="submit" class="submit-input">

    </div>

</form>













<!-- UPLOAD -------------------------------- -->


<div class="subtitle-options margin-top">

    <h2 class="subtitles start">DOCUMENTOS CLIENTE</h2>

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




<div class="flex-container">

    <div class="general-table margin-right setenta">

        <form action="#">
            
            <div class="title-table flex">
                <h2 class="smallSubtitles">
                    DOCUMENTOS
                </h2>

                <h2 class="smallSubtitles">
                    ACCIONES
                </h2>
            </div>


            <div class="row-info-table scroll-elements">
                
                <div>

                    <table>

                        <!-- COMIENZO DEL FOREACH PARA MOSTRAR CADA ARCHIVO -->

                        <tr>
                            <td class="cien border-left">
                                <span>
                                    <p></p>
                                </span>
                            </td>

                            <td class="border-right neutral">
                                <span class="cien center-flex ">
                                    <!-- ACA EN LAS <a> SE PONE LA RUTA PARA CADA ACCIÓN DEL ICONO -->
                                    <a href=""> <img src="img/icons/admin/eye.png" alt="icon"> </a>
                                        <span class="vertical-separator"></span>
                                    <a href=""> <img src="img/icons/admin/download.png" alt="icon"> </a>
                                        <span class="vertical-separator"></span>
                                    <a href=""> <img src="img/icons/admin/delete.png" alt="icon"> </a>
                                </span>
                            </td>

                        </tr>
                        

                        <!-- FINAL DEL FOREACH -->

                    </table>


                </div>




            </div>

        </form>











    </div>




    <div class="upload-panel treinta">
    
        <div class="upload-panel-title">
            <img src="img/icons/admin/upload.png" alt="icon">
            <h4 class="smallSubtitles">CARGAR ARCHIVO</h2>
        </div>

        <div class="upload-panel-body">
            <span class="upload-box">
                <label for="upload-file" class="custom-upload-input">
                    <p>Seleccionar Archivo</p>
                    <img src="img/icons/admin/gray-search.png" alt="icon">
                </label>
                <input type="file" name="" id="upload-file">
            </span>

            <input type="text" placeholder="Nombre del Archivo">

            <span class="uploaded-box">
                <h4>CARGADOS</h4>
                <span class="full-horizontal-separator"></span>
            </span>

        </div>



        <input type="submit" value="Aceptar">

    </div>

</div>








</div>

    
@endsection