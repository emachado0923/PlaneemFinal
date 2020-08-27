<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	{{-- links del header planeem --}}
	<link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
	<!--bootstrap css-->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!--custom css-->
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_modulo1.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/loader.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_resposive.css')}}">
	<!-- mdbootstrap -->
	<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link href="https5://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 


      
        @toastr_css
</head>

<body>
	<div id="page-loader"><span class="preloader-interior"></span></div>
	<div id="app">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
				<a href="{{ route('index') }}/#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2">
					<div class="boxSep mr-2">
						<div class="imgLiquidFill imgLiquid">
							<img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 50px; height:50px"
							alt="logo PlaneƎm">
						</div>
					</div>
					<h1 class="h1-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
						class="naranja planeem">E</span>m</h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
		</nav>
	</header>
</div>
<br><br><br><br>



<!--modal pregunta-->
<div class="modal fade" id="exportar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalLabel" style="margin: 0 auto; font-weight: bold;">Seleccione su formato de exportación</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
					<span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px; cursor: pointer;"></span>
				</button>
			</div>
			<div class="modal-body" style="margin: 0 auto;">
				<a type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong1word">
					<img class="word" src="../../img/word.png">
				</a>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.modal-modificado1 {
		border: #0AB5A0 2px solid !important;
		border-radius: 12px !important;
		width: 115%!important;
		height: 225px !important;
		margin-top: 50% !important;
		margin-left: 0 !important;
	}
</style>
<!--exportar word--->

{{-- //contenido --}}

<main class="">

    <div class="card" style="width: 90rem;">
        <div class="card-body">
          <h5 class="card-title">Cantidad de usuarios y Planeaciones registrados </h5>
          <table class="table">
            <thead>
              <tr>
 
                <th scope="col">Usuarios</th>
                <th scope="col">Planeación </th>
             
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $User }}</td>
                <td>{{ $Proyectos }}</td>
              </tr>
            </tbody>
          </table>         
        </div>
      </div>


      <div class="card" style="width: 90rem;">
        <div class="card-body">
          <h5 class="card-title">Grafica</h5>
          <canvas id="oilChart" width="600" height="400"></canvas>
          <div style="display: flex; width: 100%; justify-content: center ">
            <div style="display: block; width:700px; height: 400px;">
                <canvas id="ansorff" width="700" height="400"></canvas>
            </div>
        </div>
        </div>
      </div>


      <div class="card" style="width: 90rem;">
        <div class="card-body">
          <h5 class="card-title">Comentarios </h5>
            <div class="accordion" id="accordionExample">
                <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                    </button>
                    </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table">
             
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre de usuario</th>
                                <th scope="col">Correo</th>
                                <th scope="col"> Mensaje/duda</th>
                                <th scope="col">Hora y fecha </th>

                              </tr>
                            </thead>
                            @foreach ($comentarios as $comentarios)
                            <tbody>
                                <tr>
                                  <th scope="row">{{ $comentarios->id }}</th>
                                  <td>{{$comentarios->Nombre  }}</td>
                                  <td>{{ $comentarios->Correo }}</td>
                                  <td>{{ $comentarios->Mensaje }}</td>
                                  <td>{{ $comentarios->created_at }}</td>

                                </tr>
                              </tbody>
                            @endforeach

                          </table>
                    </div>
                </div>
                </div>
        </div>
      </div>

      <style type="text/css">
        .btn-group-vertical {
            position: absolute;
            margin: 10px 200px;
            z-index: 10;
        }
    </style>
</main>

<style>
	body{
		background-image: url({{asset('img/fondoLogo.jpg')}}) !important;
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;
	}
</style>



@jquery
@toastr_js
@toastr_render

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


<script>

    var Penetración = localStorage.getItem('Penetración');
    var Mercado = localStorage.getItem('Mercado');
    var Producto= localStorage.getItem('Producto');
    var Diversificación =  localStorage.getItem('Diversificación');

const ctx = document.querySelector('#ansorff').getContext('2d')
let a = {{ $estadoPendiente }};
let b = {{ $estadofinalizado }};
let c = {{ $estado1 }};

new Chart(ctx,
{"type":"bar",
"data":
{
    "labels":["Planeaciones pendientes  ","Planeaciones finalizadas ","Planeaciones en la basura "],
    "datasets":
        [
            {
                "label":"Resultado",
                "data":[a,b,c],
                "fill":true,
                "backgroundColor":
                    [
                        "#0ab5a0",
                        "#FC7323",
                        "#00544a"
       

                    ],
                "borderWidth":1
            }
        ]
},
"options":
{
    legend: {
        display: false
    },
    "scales":
        {"yAxes":
                [
                    {
                        "ticks":
                            {
                                "beginAtZero":true,
                                min: 0,
                                max: 100
                            }
                    }
                ]
        }
}
});
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('js/items_plus/items.js')}}"></script>
<script src="{{asset('js/valores/agregar.js')}}"></script>
<script src="{{asset('js/valores/exportar.js')}}"></script>
<script src="{{asset('js/valores/cerrar.js')}}"></script>
<script src="{{asset('js/valores/editar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>






<script>
	$(window).load(function(){
		$('#page-loader').fadeOut(10);
	});
</script>
<script>
	$(document).ready(function(){
		var current = 1,current_step,next_step,steps;
		steps = $("fieldset").length;
		$(".next").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			next_step.show();
			current_step.hide();
			setProgressBar(++current);
		});
		$(".previous").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().prev();
			next_step.show();
			current_step.hide();
			setProgressBar(--current);
		});
		setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
  	var percent = parseFloat(100 / steps) * curStep;
  	percent = percent.toFixed();
  	$(".progress-bar")
  	.css("width",percent+"%");
  }
});
</script>
</body>


<script>

	$('#nombre_proyecto').val(localStorage.getItem('nombre_proyecto'));

	function index(){
		document.getElementById('btn').click()
	}

</script>


<script>
	var nombre_proyecto = localStorage.getItem('nombre_proyecto');
	var id_Planeacion = localStorage.getItem('id');
	$('#nombre_proyecto').val(nombre_proyecto);
	$('#nombre_proyecto2').html(id_Planeacion);
	$('#nombre_proyecto3').html(id_Planeacion);



		function index(){
			document.getElementById('btn').click()
		}

	</script>

</html>
