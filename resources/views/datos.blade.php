@if(session('mensaje'))
    <div class="container">
        <div class="alert-success alert border p-3 mt-2">
          {{session('mensaje')}}
        </div>
      </div>
@endif

<div class="container-xl mt-3">
    <div class="table-responsive">
      
    <table class="table table-sm table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th scope="col">FECHA</th>
            <th scope="col">HORA</th>
            <th scope="col">CLIENTE</th>
            <th scope="col">PAX</th>
            <th scope="col">DESDE</th>
            <th scope="col">HASTA</th>
            <th scope="col">VUELO</th>
            <th scope="col">TIPO V</th>
            <th scope="col">VEHICULO</th>
            <th scope="col">MOVIL</th>
            <th scope="col">VOUCHER</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservas as $reserva)
          <tr>
            <th scope="row">{{ date('d-m-y', strtotime($reserva->fecha_hora_traslado)) }} </th>            
              <td>{{ date('H:i',strtotime($reserva->fecha_hora_traslado)) }}</td>
            <td>{{ $reserva->cliente }}</td>
            <td>{{ $reserva->pasajero }}</td>
            <td>{{ $reserva->desde }}</td>
            <td>{{ $reserva->hasta }}</td>
            <td>{{ $reserva->vuelo }}</td>
            <td>{{ $reserva->tipo_v }}</td>
            <td>{{ $reserva->vehiculo }}</td>
            <td>{{ $reserva->movil }}</td>
            <td>{{ $reserva->voucher }}</td>
          </tr>
          <tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>
