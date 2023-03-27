<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/images/llantera_icono.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
		<title>Tienda</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('sitioweb.header.navbar')
		<!-- End Header/Navigation -->
		<style>
			.input-container {
  width: auto;
  position: relative;
}

.icon {
  position: absolute;
  right: 25%;
  top: calc(50% + 5px);
  transform: translateY(calc(-50% - 5px));
}

.input {
  width: 500px;
  height: 40px;
  padding: 10px;
  transition: .2s linear;
  border: 2.5px solid black;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.input:focus {
  outline: none;
  border: 0.5px solid black;
  box-shadow: -5px -5px 0px black;
}

.input-container:hover > .icon {
  animation: anim 1s linear infinite;
}

@keyframes anim {
  0%,
  100% {
    transform: translateY(calc(-50% - 5px)) scale(1);
  }

  50% {
    transform: translateY(calc(-50% - 5px)) scale(1.1);
  }
}
		</style>
		<div class="col-12">
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-2">
							<div class="intro-excerpt" >
								<h1>Tienda</h1>
							</div>
						</div>
						<div class="col-lg-10">
							<h3 class="text-center" style="margin-bottom: 2%"> Búsqueda de Productos </h3>
							<form action="{{route ('llantaweb')}}" class="row g-3" method="get">
								<center>
								<div class="input-container col-lg-10">
									<input type="text" class="input" name="buscarnombre" placeholder="Busque su producto....">
									<span class="icon"> 
									<svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
									</span>
								</div>
							</center>
							</form>
						</div>
					</div>
				</div>
					
			</div>
		<!-- End Hero Section -->

			<div class="col-12">
				<div class="row">
					<div class="col-3">
						<div class="accordion row"  id="accordionExample">
							<div class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="col-10">
												<strong> Marca </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-alt" viewBox="0 0 16 16">
													<path d="M7 2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z"/>
												</svg>
											</div>

										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<form action="{{route ('llantaweb')}}" class="row g-3" method="get">
												<select class="col-auto form-select" name="marca" aria-label="Default select example">
													<option selected>Seleccione una Marca</option>
													@foreach ($marcas as $marca)
														<option value="{{$marca->id}}">{{$marca->nombremarca}}</option>
													@endforeach
												</select>
												<button type="submit" class="btn btn-default">
													<li class="fa fa-search"></li>
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div id="accordionTipoVehiculo" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<div class="col-10">
												<strong> Tipo de Vehiculo </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
													<path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
													<path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
                                            <form action="{{route ('llantaweb')}}" class="row g-3" method="get">
                                               {{--  @csrf --}}
												<select class="col-auto form-select" id="tipovehiculo" name="tipovehiculo" aria-label="Default select example" onchange="this.form.submit()">
													<option selected>Seleccione un tipo de vehiculo</option>
													@foreach ($tipo as $tipos)
														<option value="{{$tipos->id}}" data-idvehiculo="{{$tipos->id}}">{{$tipos->vehiculo}}</option>
													@endforeach
												</select>

                                                <button id="btnTipoVehiculo" type="submit" class="btn btn-default" hidden>
													<li class="fa fa-search"></li>
												</button>
                                            </form>
										</div>
									</div>
								</div>
							</div>
							<div id="accordionNumeroRin" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<div class="col-10">
												<strong> Numero de rin </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
													<path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
                                            <form action="{{route ('llantaweb')}}" class="row g-3" method="get">
                                                @csrf
												<select class="col-auto form-select" id="rin" name="rin" aria-label="Default select example" onchange="this.form.submit()">
													<option selected>Seleccione un numero de rin</option>
                                                    @foreach ($rines as $rin)
														<option value="{{$rin->id}}">{{$rin->numrin}}</option>
													@endforeach
												</select>
												<button type="submit" class="btn btn-default" hidden>
													<li class="fa fa-search"></li>
												</button>
                                            </form>
										</div>
									</div>
								</div>
							</div>
                            <div id="accordionDimensionesRin" class="col-12" style="margin-left: 10%; margin-bottom: 5%">
								<div class="accordion-item col-10" style="border-color: #2f2f2f">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<div class="col-10">
												<strong> Dimensiones </strong>
											</div>
											<div class="col-2 text-rigth">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
													<path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z"/>
												</svg>
											</div>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"> <!-----Cambiar ID al div--------------->
										<div class="accordion-body">
                                            <form action="{{route ('llantaweb')}}" class="row g-3" method="get">
                                                @csrf
												<select class="col-auto form-select" id="dimensiones" name="dimensiones" aria-label="Default select example" onchange="mostrarDimensiones();">
													<option selected>Seleccione la dimensión del rin</option>
                                                    @foreach ($dimensiones as $dimension)
                                                    <option value="{{$dimension->id}}">{{$dimension->dimension}}</option>
                                                    @endforeach
												</select>
												<button type="submit" class="btn btn-default">
													<li class="fa fa-search"></li>
												</button>
                                            </form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<style>
						.card {
						width: auto;
						height: auto;
						padding: .8em;
						background: #f5f5f5;
						position: relative;
						overflow: visible;
						box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
						}
			
						.card-img {
						height: 100%;
						width: 100%;
						border-radius: .5rem;
						transition: .3s ease;
						}
			
						.card-info {
						padding-top: 10%;
						}
			
						svg {
						width: 20px;
						height: 20px;
						}
			
						.card-footer {
						width: 100%;
						display: flex;
						justify-content: space-between;
						align-items: center;
						padding-top: 10px;
						border-top: 1px solid #ddd;
						}
			
						/*Text*/
						.text-title {
						font-weight: 900;
						font-size: 1.2em;
						line-height: 1.5;
						}
			
						.text-body {
						font-size: .9em;
						padding-bottom: 10px;
						}
			
						/*Button*/
						.card-button {
						border: 1px solid #252525;
						display: flex;
						padding: .3em;
						cursor: pointer;
						border-radius: 50px;
						transition: .3s ease-in-out;
						}
			
						/*Hover*/
						.card-img:hover {
						transform: translateY(-25%);
						box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
						}
			
						.card-button:hover {
						border: 1px solid #f3690d;
						background-color: #f3690d;
						}
			
					</style>
								<div class="col-9">
									<div class="untree_co-section product-section before-footer-section" style="margin-top: -15%">
										<div class="container">
											<div class="row">
												
												
												<!-- Start Column 1 -->
												@foreach ($llantas as $llanta)
													<div class="col-12 col-md-3 col-lg-3 mb-3 llanta{{$llanta->id}}" >
														<div class="card">
															<div class="card-img"> <center> <img src="{{ ('img/llantas/')."/".$llanta->imagen }}" style="width: 80%!important"> </center></div>
															<div class="card-info">
																<center> <img src="{{ ('img/marcas/')."/".$llanta->marcallanta->imagen }}" style="margin-bottom: 10px; width: 80%; height: 40px!important; " class="img-fluid"></center>
															<p class="text-title">{{$llanta->nombrellanta}} </p>
															<p class="text-body">{{$llanta->descripcion}}</p>
															</div>
															<div class="card-footer">
															<span class="text-title">${{$llanta->precio}}</span>
															<div class="card-button">
																<form action="{{route('agregaritem')}}" method="post">
																	@csrf
																	<input type="hidden" name="precio_id" value="{{$llanta->id}}">
																	<input type="hidden" name="producto_id" value="{{$llanta->id}}">
							
																	<button type="submit" style="background-color: transparent; border-color: transparent">
																	<svg class="svg-icon" viewBox="0 0 20 20">
																		<path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
																		<path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
																		<path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
																	</svg>
																	</button>	
																</form>
																	
															</div>
														</div>
														</div>
													</div> 
												@endforeach
												<!-- End Column 1 -->
											</div>
										</div>
									</div>
								</div>
			
							</div>
						</div>
					</div>

		@include('sitioweb.footer.foot')
		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tienda.js')}}"></script>

		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>
</html>


<script>
    /* function mostrarRines()
    {

    } */

    function mostrarDimensiones()
    {
        document.getElementById('accordionDimensionesRin').style.display = 'block';
    }
</script>

{{-- <script type="text/javascript">
	$(document).ready(function(){
		console.log(111);

		CargarCategoria();
		CargarFamilia();
		CargarGrupo();
	});
	function CargarCategoria() {
		var tablaDatos=$("#txtCategoria");
		var routeurl='listar_areas';
		$("#txtCategoria").empty();
		$.get(routeurl, function (res) {
			$(res).each(function (key, value) {
				tablaDatos.append('<option value='+value.id+'>'+value.vehiculo+'</option>')
			})
		})
	}
	function CargarFamilia() {
		var routeurl='cargarfamilias';
		var txtCategoriaInicial= null;
		txtCategoria = document.getElementsByName("txtCategoriaInicial")[0].value;
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtCategoria:txtCategoria},
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtFamilia").empty();
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				console.log(response[i]);
				$('#txtFamilia').append('<option value='+ response[i].id +'>'+ response[i].familia +'</option>')
			}
			CargarGrupo();
		}).fail(function () {
			console.log("error");
		})
		;
	}
	function CargarGrupo() {
		var routeurl='cargargrupos';
		var txtFamilia= null;
		txtFamilia = document.getElementsByName("txtFamilia")[0].value;
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtFamilia:txtFamilia},
		}).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtGrupo').append('<option value='+ response[i].id +'>'+ response[i].grupo +'</option>')
			}
		}).fail(function () {
			console.log("error");
		})
		;
	}
	$('#txtCategoria').change(function (e) {
		var routeurl='cargarfamilias';
		var txtCategoria= null;
		txtCategoria = document.getElementsByName("txtCategoria")[0].value;
		e.preventDefault();
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtCategoria:txtCategoria}, --}}
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtFamilia").empty();
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtFamilia').append('<option value='+ response[i].id +'>'+ response[i].familia +'</option>')
			}
			CargarGrupo();
		}).fail(function () {
			console.log("error");
		})
		;
	});
	$('#txtFamilia').change(function (e) {
		var routeurl='cargargrupos';
		var txtFamilia= null;
		txtFamilia = document.getElementsByName("txtFamilia")[0].value;
		e.preventDefault();
		var token=$("#token").val();
		$.ajax({
			type:'POST',
			url:routeurl,
			headers: {'X-CSRF-TOKEN':token},
			dataType:'json',
			data:{txtFamilia:txtFamilia},
			{{--success:function(res) {
					var tablaDatos=$("#txtFamilia");
					$("#txtFamilia").empty();
					var response = res;
					$(response).each(function (key, value) {
						tablaDatos.append('<option value='+value.id+'>'+value.familia+'</option>')
					})
				}--}}
		{{-- }).done(function (respuesta) {
			console.log(respuesta)
			var response = respuesta;
			console.log(response.length)
			$("#txtGrupo").empty();
			for(var i = 0;i < response.length; i++){
				$('#txtGrupo').append('<option value='+ response[i].id +'>'+ response[i].grupo +'</option>')
			}
		}).fail(function () {
			console.log("error");
		})
		;
	});
</script> --}}
