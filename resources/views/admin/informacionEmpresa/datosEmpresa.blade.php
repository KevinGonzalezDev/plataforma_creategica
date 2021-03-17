@extends('layout.panel')

@section('panel')

        <div class="center-container main-container-width">

            <div class="general-table">
                <h2 class="subtitles">DATOS EMPRESA</h2>
    
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
                                <option value="CC">CC</option>
                                <option value="NIT">NIT</option>
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

        </div>


@endsection