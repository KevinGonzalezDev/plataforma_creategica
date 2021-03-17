@extends('layout.panel')

@section('panel')


        <div class="center-container main-container-width">

            <div class="subtitle-options">

                    <h2 class="subtitles start">DOCUMENTOS EMPRESA</h2>


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
