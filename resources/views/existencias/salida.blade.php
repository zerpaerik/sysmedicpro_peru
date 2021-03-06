@extends('layouts.app')

@section('content')
<style type="text/css invisible">
	
		visibility: hidden;
	}
</style>

<br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">

			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Salida de productos</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>

			<div class="box-content">
				<h4 class="page-header"></h4>
				<form class="form-horizontal" role="form" method="post" action="producto/add">
						<div class="form-group">
						{{ csrf_field() }}

						<label class="col-sm-1 control-label">Producto</label>
						<div class="col-sm-3">
							<select id="prod" name="producto"  data-toggle="tooltip" data-placement="bottom">
								<option value="0">Seleccione un producto</option>
								@foreach($productos as $producto)
									<option value="{{$producto->id}}">{{$producto->nombre}}</option>
								@endforeach
							</select>
						</div>						

						<label class="col-sm-1 control-label">Medida</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="medida" name="medida" data-toggle="tooltip" data-placement="bottom" title="Medida" disabled="disabled">
						</div>

						<label class="col-sm-2 control-label">Cantidad actual</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad actual" data-toggle="tooltip" data-placement="bottom" title="Cantidad" min="0" disabled="disabled">
						</div>

						<label class="col-sm-1 control-label">Sede</label>
						<div class="col-sm-2">
							<select id="sede" name="sede">
								@foreach($sedes as $sede)
									<option value="{{$sede->id}}">{{$sede->name}}</option>
								@endforeach
							</select>
						</div>

						<label class="col-sm-1 control-label">Proveedor</label>
						<div class="col-sm-3">
							<select id="provee" name="provee">
								@foreach($proveedores as $proveedor)
									<option value="{{$proveedor->id}}">{{$proveedor->codigo}} - {{$proveedor->nombre}}</option>
								@endforeach
							</select>
						</div>

						<label class="col-sm-3 control-label">Salir</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" id="cantidadplus" name="cantidadplus" data-toggle="tooltip" data-placement="bottom" title="Cantidad" min="0" required="required">
						</div>

						<div class="col-sm-12" style="float:right;">
							<input type="submit" id="updatepro" class="col-sm-2 btn btn-primary" value="Ejecutar" style="float:right;">
						</div>				

					</form>	
					</div>			
			</div>
		</div>
		<div class="alert alert-success invisible" id="successalrt" role="alert">Actualizado</div>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>Tipo</th>
				<th>Producto</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody id="table-b">
		</tbody>
	</table>

<script type="text/javascript">

	window.onunload = clear;

	function clear(){
  	window.sessionStorage.clear();
	};

	function getQuan(evt){
		evt.preventDefault();
		var prod = $("#prod").val();
		if(prod < 1) return;

		$.ajax({
      url: "existencia/"+prod+"/"+$("#sede").val(),
      headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
      type: "get",
      success: function(res){
      	if(res.exists){
      		$("#cantidad").val(res.existencia.cantidad);
      		$("#medida").val(res.medida);
      	}else{
      		$("#medida").val(res.medida);
      		$("#cantidad").val(0);
      	}
      }
    });
  }		

</script>



@endsection
@section('scripts')
<script>

	$("#prod").on('change', getQuan);
	$("#sede").on('change', getQuan);

	$("#updatepro").on('click', function(evt){
		evt.preventDefault();

		if($('#prod').val() < 1) return;

		var cs = window.sessionStorage.getItem("currentTime");
		if(!cs){
			cs = new Date().getTime();
			window.sessionStorage.setItem("currentTime", cs);
		}

		var d = {
			"code" :  cs,
			"proveedor" : $('#provee').val(),
			"id" : $('#prod').val(),
			"sede" : $("#sede").val(),
			"cantidadplus" : $('#cantidadplus').val() * -1
		};

		$.ajax({
      url: "producto/",
      headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
      type: "patch",
      data: d,
      success: function(res){
      	if(res.success){
					$( "#table-b" ).append( "<tr><td>Salida</td><td>"+$("#prod").val()+"</td><td>"+$('#cantidadplus').val()+"</td></tr>" );      		
			  	$('#cantidad').val(res.producto.cantidad);
			  	$('#cantidadplus').val(0);      				
      		$("#successalrt").toggleClass("invisible");
      		setTimeout(function(){
      			$("#successalrt").toggleClass("invisible");
      		}, 3000)
      	};
      }
    });
	});

	$(document).ready(function() {
		LoadSelect2Script(function (){
			$("#provee").select2();
			$("#sede").select2();
			$("#prod").select2();
		});
	});
</script>
@endsection