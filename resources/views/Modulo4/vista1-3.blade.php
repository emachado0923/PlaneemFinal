@extends('layouts.nav4')

@section('content')
    <header>
        <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
        <script src=" {{asset('js/toastr.js')}}"></script>
        @yield('js')

        @section('f')
            <a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
        @endsection

        @yield('progres')
        @include('modal/modal_modulo4')
        <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
        @jquery
        @toastr_js
        @toastr_render

    </header>

    <div>
        {{--Items de objetivos, --}}
        <div class="row">
            <div class="lista">
                <h4 style="line-height: 41px;">Objetivos</h4>

            </div>
        </div>


        <!--<form action="{{route('resumenObjetivos1')}}" method="POST" id="formulario" name="formulario">-->
        <form id="formulario" name="formulario" >
            @csrf
        <div class="row" style="width: 100%;">
            <div id="campo_texto" class="campo_texto4">

                <h3 id="nombre_proyecto" style="text-align: center;"></h3>
                <input id="id_respustaverbos" type="text" style="display:none" name="id_respustaverbos" required="required" >
                <main class="indicadores2">
                    <div>
                        <input id="objetivo" type="text" name="objetivo" placeholder="Objetivo" class="inputIndicador" required="required">
                    </div>
                </main>
                <span class="icon-arrow-down2 icono-down"></span>
                <main class="indicadores">
                    <div>
                        <input id="nombre_indicador" type="text" name="nombre_indicador" placeholder="Nombre del indicador"
                               class="inputIndicador" required="required"
                                {{old('nombre_indicador')}}>

                    </div>
                </main>
                <span class="icon-arrow-down2 icono-down"></span>
                <main class="indicadores">
                    <div>
                        <input id="lo_que_se_va_a_medir" type="text" name="lo_que_se_va_a_medir" placeholder="Que quiere medir"
                               class="inputIndicador" required="required">
                    </div>
                </main>
                <hr class="division">
                <main class="indicadores">
                    <div>
                        <input id="sobre_lo_que_se_va_a_medir" type="text" name="sobre_lo_que_se_va_a_medir" placeholder="Sobre que lo quiere medir"
                               class="inputIndicador" required="required">
                    </div>
                    <input hidden type="text" style="background: #0AB5A0;" name="id_Planeacion" id="id_Planeacion">
                </main><br>
                <input type="hidden" id="actualpaso" value="1">
                <button type="submit" id="campos" class="Ahora btn btn-planeem waves-effect waves-light">Guardar</button>

            </div>

        </div><br><br>

        </form>


        <section id="factores5">
            <div id="factor">
                <form class="opciones2">
                    <div class="formulario2">
                        <div class="respuestas2">
                            <div class="wrap" style=" ">
                                <div class="radio">
                                    <div class="btn-group2" id="btn_planeem2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <div id="modal"></div>
        <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-modificado2">
                    <div class="modal-body">
                        <div class="añadircapacidad">
                            <textarea maxlength="504" id="Añadir" style="color:black;" class="campo4"></textarea>
                        </div>
                        <div><a style="color:white;" onclick="agregarv()" data-dismiss="modal" aria-label="Close"
                                class="aceptarcapacidad btn btn-planeem waves-effect waves-light">Añadir</a>
                        </div>
                        <div id="cancelar">
                            <a value="cierra_AñadirCapa"
                               class="cancelarcapacidad btn btn-planeem waves-effect waves-light" data-dismiss="modal"
                               aria-label="Close" style=" outline: none !important;">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .modal-modificado2 {
                width: 180% !important;
                height: 240px !important;
                border: #0AB5A0 2px solid !important;
                border-radius: 12px !important;
            }

            span.disable-links {
                pointer-events: none;
            }

            span.disable-links.active {
                pointer-events: auto;
            }
            .btn-group2 .disable-links > a {
                background-color: #00544A;
            }
            .btn-group2 .disable-links.active > a {
                background-color: #0AB5A0;
            }

            .modal-modificado3 {
                border: 2px solid #0AB5A0 !important;
                border-radius: 12px !important;
                width: 180% !important;
                height: 693px !important;
                margin-top: 0% !important;
                margin-left: -33% !important;
                padding: 28px;
            }

        </style>
        <div class="col-md-auto mx-auto mt-auto">
            <br>
            <a href="{{ route('vista2-1')}}" id="href" type="hidden"></a>
            <a onclick="listar()"  style="color:white;"
               class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
            <a href="{{ route('vista1-2') }}" style="color:white;"
               class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
        </div>

        {{--Modal de informacion, icono anaranjado, Ubicación: Derecha superior--}}
        <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable"
              style="cursor:pointer;"></span>
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content modal-contentmod4">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"
                            style="margin-left: 252px; font-weight: bold;">INFORMACIÓN</h5>
                        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="modal-body">
                        <p>  A continuación, verá una explicación simple y unos ejemplos de cómo se estructuran los indicadores. Para ello es
                            importante conocer los siguientes pasos.
                            <br/>
                            1. Identificar el objetivo que se quiere medir/ cuantificar.
                            <br/>
                            2. Definir la tipología del indicador.
                            <br/>
                            3. Construir el indicador.
                            <br/>
                            <br/>
                            Para construir el indicador debes tener en cuenta sus partes: Variable + índice + Frecuencia
                            <br/>
                            La variable: Es la unidad de medida contrastada.
                            <br/>
                            Puede ser de tipo cuantitativo o cualitativo.
                            <br/>
                            Algunos ejemplos típicos son: tiempo, costos, crecimiento, cubrimiento, productividad.
                            <br/>
                            El índice: es la ecuación o fórmula de cálculo.
                            <br/>
                            Algunos ejemplos:
                            <br/>
                            Variable = Logros alcanzados / Logros planeados.
                            <br/>
                            Variable = Parte / Todo
                            <br/>
                            Variable = Real / Propuesto
                            <br/>
                            Variable = Actual / Anterior
                            <br/>
                            La frecuencia: Es la definición de cada cuanto tiempo se ha de medir. Diario, semanal, mensual, etc. Es
                            importante tener presente que no todos los indicadores se miden en los mismos periodos de tiempo. Lo que para
                            unos es normal para otros es excesivo.
                            <br/>
                            Ejemplo de un indicador
                            <br/>
                            1. Objetivo: Diversificar el modelo de negocio actual. (Objetivo Estratégico) Tipo
                            Indicador: Diversificación: Logros Alcanzados * 100
                            Logros Planeados
                            <br/>
                            2. Objetivo: Comercializar los productos de manera online. (Objetivo Táctico)
                            Indicador: Comercialización online: Cantidad de productos comercializados online * 100
                            Cantidad de productos
                            <br/>
                            3. Objetivo: Reducir los tiempos de respuesta al cliente. (Objetivo Operacional)
                            Indicador: Tiempos de respuesta: Tiempos de respuesta periodo actual * 100
                            Tiempos de respuesta periodo anterior.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal">

        </div>
        <label type="text" id="nombre"></label><br>
    </div>


    </form>



    @yield('script')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">

    </script>

   <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('input[name="_token"]').val()
                }
            })

            //$('#campo_texto1').hidden()
            var id = localStorage.getItem('id');
            ////Inicio ajax
            $.ajax({
                url: "/indicadores/" + id,
                type: 'get',
                success: function (data) {
                    //console.log(id);
                    console.log(data);
                    var datta;
                    let cont = 0
                    for (datta in data) {
                        cont++
                        let html = '<span id="aa' + data[datta].id_respustaverbos + '" class="disable-links"><a class="aa' + data[datta].id_respustaverbos + '" onclick="modal(' + data[datta].id_respustaverbos + ')" >' + cont + '</a></span>';
                        $('#btn_planeem2').append(html); //Pinta el contenido en el html
                        $('#paso').val(data[datta].id_respustaverbos)
                       // console.log(cont);
                    }
                },
                "error": function () {
                    console.log("error");
                }
            });//////fin ajax
        });////Fin Funtion document

        function modal(id) {
            //console.log(id)
            $.ajax({
                url: "/indicador/" + id,
                type: 'get',
                success: function (data) {
                    // console.log(id);
                    console.log("indicador: ", data);
                    var dat = data[0]
                    $('#objetivo').val(dat.Objetivos)
                    // $('#nombre_proyecto').val(dat.nombre_proyecto)
                    document.getElementById('nombre_proyecto').innerHTML = dat.nombre_proyecto
                    document.getElementById('id_respustaverbos').value = dat.id_respustaverbos
                },
                "error": function () {
                    console.log("error");
                }
            });//////fin ajax       ﻿
        }//////fin funcion modal



    </script>
    <script>
        var id = localStorage.getItem('id')
        $('#id_planecion').val(id);
        console.log(id);
        id_planecion = localStorage.getItem('id')
        $('#id_Planeacion').val(id_planecion);
        console.log(id_planecion);
    </script>

    <script>

        window.addEventListener("load",function(){
            setTimeout(function(){

                $("#aa1").addClass("active");

            }, 3000);
        });


        $("#campos").on("click", function (event) {
            event.preventDefault();
            var id_respustaverbos=$("#id_respustaverbos").val();
            var id_Planeacion=$("#id_Planeacion").val();
            var nombre_indicador=$("#nombre_indicador").val();
            var lo_que_se_va_a_medir=$("#lo_que_se_va_a_medir").val();
            var sobre_lo_que_se_va_a_medir=$("#sobre_lo_que_se_va_a_medir").val();
            var actualpaso =$("#actualpaso").val()
            var pasoantes;
            var pasosiguiente;
            $.ajax({
                type: "POST",
                url: "{{route('resumenObjetivos1')}}",
                data:{paso:actualpaso,id_respustaverbos:id_respustaverbos,id_Planeacion:id_Planeacion,nombre_indicador:nombre_indicador,lo_que_se_va_a_medir:lo_que_se_va_a_medir,lo_que_se_va_a_medir:lo_que_se_va_a_medir,sobre_lo_que_se_va_a_medir:sobre_lo_que_se_va_a_medir} ,
                dataType: "json",
                success: function (res) {
                   pasoantes= parseInt(res.paso)
                    if(pasoantes>=1){
                        console.log("entro")
                        pasosiguiente=pasoantes+1
                        $("#actualpaso").val(pasosiguiente)


                        $('#aa'+ pasoantes).removeClass("active")
                        $('#aa'+ pasosiguiente).addClass("active")


                    }
                }
            })

        });

    </script>

    <script>

        function listar(){
            var nombre= document.getElementById('nombre_proyecto').value;
            var objetivo= document.getElementById('id_respustaverbos').value;
            var objetivon= document.getElementById('objetivo').value;
            var nombrei= document.getElementById('nombre_indicador').value;
            var medir= document.getElementById('lo_que_se_va_a_medir').value;
            var sobre= document.getElementById('sobre_lo_que_se_va_a_medir').value;

            if(nombre == '' || objetivo == '' || objetivon == '' || nombrei == '' || medir == '' || sobre == '' ){
                toastr.error('error', 'todos los campos son obligatorios')
            }else {
                try {
                    document.getElementById("href").click();
                }
                catch (e) {
                    console.log(e)
                }

            }}


    </script>
    <script>





        $(document).ready(function () {
            $('.items3 li:nth-child(1)').addClass("acti3");
            $('.items3 li').click(function () {
                $('.items3 li').removeClass("acti3");
                $(this).addClass("acti3");


            })

            $('.valores').mouseenter(function(){
                let mensaje = $(this).attr('mensaje');

                $('.hover').html(`<p>${mensaje}</p>`)
                $('.hover').show()

            })
            $('.valores').mouseleave(function(){

                $('.hover').hide()
            })
        })
    </script>








@endsection
