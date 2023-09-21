<div>
    @extends('adminlte::page')
    
    @section('title', 'Iotec Solutions')
    
    @section('content')
    <br>
        <div class="row">
            <h4 class="titulo">Datos del dispositivo {{$name}} </h4>
            <div class="col-12">
                <div class="card">
                    <div class="card-body"> 
                        <div class="panel-sup">
                            <button class="details-button" id="sgra2">Datos recibidos</button><button class="details-button" wire:click="mostrar" style="margin-left:10px;" id="sgra">Grafica</button>
                        </div>
                        <div class="grafica2" id="gra">
                            <canvas class="grafica" id="myChart"></canvas>
                        </div>
                        
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        
                        <div class="tabla2" id="tabla2">
                        <table>
                            <thead>
                                <tr>
                                    <th>Dato recibido</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($datos))
                                    @foreach ($datos as $d)
                                        <tr>
                                            <td>{{ $d->data_log }}</td>
                                            <td>{{ $d->created_at }}</td>
                                        </tr>
                                    @endforeach
                                   
                                @else
                                    <tr>
                                        <td colspan="2">No se han recibido datos aun</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div style="width: 100%; height: auto; margin-top: 25px; margin-left: auto; margin-right: auto;">
                            {{ $datos->links() }}
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <script>
            // Obtener el botón y el elemento por sus IDs
            const sgra = document.getElementById('sgra');
            const gra = document.getElementById('gra');
            const gra2 = document.getElementById('tabla2');

            setInterval(function() {
    document.querySelector('[wire\:click="mostrar"]').click();
}, 5000); // 30000 milisegundos = 30 segundos

            // Agregar un evento click al botón
            sgra.addEventListener('click', function() {
             // Verificar si el elemento está actualmente visible
            if (gra.style.display === 'none') {
             // Si está oculto, mostrarlo
             gra.style.display = 'block';
             gra2.style.display = 'none';
            } else {
                // Si está visible, ocultarlo
                gra.style.display = 'none';
                gra2.style.display = 'block';
            }
            });


            const dataFromPHP = <?php echo $grafica_f; ?>;
            const fechas = [];
            const valores = [];
            for (let i = 0; i < dataFromPHP.length; i++) {
                //fechas.push(dataFromPHP[i].created_at);
                fechas.push("F/H");
                valores.push(dataFromPHP[i].data_log);
            }

            const ctx = document.getElementById('myChart');
        
            new Chart(ctx, {
                type: 'line', // Cambiado a 'line' para crear una gráfica de líneas
                data: {
                    labels: fechas,
                    datasets: [{
                        label: 'Datos obtenidos',
                        data: valores,
                        borderColor: 'rgba(0,123,255)', // Color de borde de la línea
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo de la línea
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        <style>
            .details-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 6px 12px;
  margin-left: 0px;
  text-align: center;
  margin-top: auto;
  margin-bottom: auto;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}
            canvas{
                width: auto;
                height: 420px;
            }
            .grafica2{
                width: auto;
                height: 420px;
                display: none;
            }
            .grafica{
                margin-left: auto;
                margin-right: auto;
                width: auto;
                height: 420px;
            }
            p{
                margin: 5px;
            }
            .tabla2{
                display: block;
            }
            table 
            {
                width: 100%;
                border-collapse: collapse;
            }
            .titulo{padding: 10px;}
            /* Estilos para las celdas encabezado */
            th 
            {
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
            svg{
                width: 10px;
                height: 10px;
            }
            span{
                margin-left: auto;
                margin-right: auto;
            }
            .panel-sup{
                border-color: #ddd;
                width: 100%;
                height: 50px;
                border-style: solid;
                border-width: 0px 0px 1px 0px;
                margin-bottom: 20px;
            }
        </style>
    @endsection
</div>
    