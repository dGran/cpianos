@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="sm-12">
			<h2>Sala Clemente</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="list-group">
				<a href="#" class="list-group-item active">
				Portada
				</a>
				<a href="#" class="list-group-item">Calendario</a>
				<a href="#" class="list-group-item">Archivo</a>
				<a href="#" class="list-group-item">Solicitud de Sala</a>
			</div>
		</div>
		<div class="col-sm-6 col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Próximos conciertos</h3>
				</div>
				<div class="panel-body">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://flowpiano.es/wp-content/uploads/2013/03/sala-clemente-5.jpg" alt="...">
								<div class="carousel-caption">
									Concierto de Navidad
								</div>
							</div>
							<div class="item">
								<img src="..." alt="...">
								<div class="carousel-caption">
									...
								</div>
							</div>
							...
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Programa
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							Información no disponible
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Currículums
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							Información no disponible
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Más...
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							Información no disponible
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div> {{-- row --}}
</div>

@endsection
