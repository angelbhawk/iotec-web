<div>
   
@extends('adminlte::page')

@section('title', 'Iotec Solutions')

@section('content')

	<br>
    <div wire:poll="mostrar()" class="row">
		<h4 class="titulo">Aplicaciones asociadas</h4>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
					        <div class="sensor-container">
						        @if (!empty($datos))
								      @foreach ($datos as $d)
									      <div class="sensor">
                          <h2 class="sensor-name">{{ $d->name }} - {{ $d->type }}</h2>
										      <p class="sensor-data">Ultimo valor registrado: {{ $d->id }}</p>
										      <button class="details-button">Consultar más</button>
									      </div>
								      @endforeach
			    			    @else
				    			    <div style="margin-left:auto;margin-right:auto;">No hay aplicaciones asociados</div><br><br>
			    			    @endif
					        </div>
                </div>
            </div>
        </div>
    </div>

	<style>
		/* Estilos para la tabla */
		table {
      width: 100%;
      border-collapse: collapse;
    }
    .titulo{padding: 10px;}
    /* Estilos para las celdas encabezado */
    th {
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    
    /* Estilos para las celdas de datos */
    td {
      border: 1px solid #ddd;
      padding: 8px;
    }

	
.sensor-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-top: 20px;
}

.sensor {
  border: 1px solid #ddd;
  padding: 20px;
  width: calc(33.33% - 20px);
  box-sizing: border-box;
  margin-bottom: 20px;
}

.details-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 4px;
  cursor: pointer;
}
		</style>

@endsection
</div>
