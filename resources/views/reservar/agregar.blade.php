@extends('layouts.app')

@section('content')
@if(session('mensaje'))
    <div class="container">
        <div class="alert-danger alert border p-3 mt-3">
          {{session('mensaje')}}
        </div>
      </div>
@endif

@if(session('mensaje_success'))
    <div class="container">
        <div class="alert-success alert border p-3 mt-3">
          {{session('mensaje_success')}}
        </div>
      </div>
@endif
<div class="container mt-3">
<h3>RESERVAR</h3>
</div>
<div class="container mt-1 mb-3">
<form autocomplete="off" method="POST" action="{{ route('reservar.agregado') }}">
  @csrf
    <div class="row mt-3">

      <div class="col">
        <vuejs-datepicker :typeable="true" :language="es" :value="dateVal" :format="dateFormat" name="fecha_c" placeholder="COMIENZO"></vuejs-datepicker>
      </div>

      <div class="col">
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="cliente" placeholder="Cliente">
      </div>
      </div>

      <div class="col">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Hora</span>
        </div>
        <input type="text" aria-label="Hora" maxlength="2" value="00" name="hora" placeholder="Hora" class="form-control">
        <input type="text" aria-label="Minuto" maxlength="2" value="00" name="minutos" placeholder="Minuto" class="form-control">
      </div>
    </div>
      <div class="col">
        <input type="text" class="form-control" name="pasajero" placeholder="PAX">
      </div>
    </div>
    <div class="row mt-2"> 
        <div class="col">
            <input type="text" class="form-control" name="equipaje" placeholder="Equipaje">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="habitacion" placeholder="Habitacion">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="vuelo" placeholder="Vuelo">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="tarifa" placeholder="Tarifa">
          </div>
      </div>
      <div class="row mt-4">
        <div class="col">
            <input type="text" class="form-control" name="desde" placeholder="Origen">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="hasta" placeholder="Destino">
          </div>
          <div class="col">
            
          </div>
          <div class="col">
            
          </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <input type="text" class="form-control" name="solicito" placeholder="Solicito">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <input type="text" class="form-control" name="tipo_v" placeholder="Tipo de Vehiculo">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="movil" placeholder="Movil">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="vehiculo" placeholder="Vehiculo">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Comentarios</span>
          </div>
          <textarea class="form-control" name="comentarios" aria-label="With textarea"></textarea>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <input type="text" class="form-control" name="tipo_c" placeholder="Tipo de cobranza">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="voucher" placeholder="Voucher">
      </div>
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Reservar</button>
  </form>
</div>
@endsection

@section('script')

<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/vuejs-datepicker"></script>
<script src="https://unpkg.com/vuejs-datepicker/dist/locale/translations/es.js"></script>


<script>
const app = new Vue({
el: '#app',
data() {
  return {
    es: vdp_translation_es.js,
    dateFormat : 'dd-MM-yyyy',
    dateVal : new Date()
  }
},
components: {
  vuejsDatepicker
}
});
</script>

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


        <script>
            $(document).ready(function(){
                    $("#app > div.container.mt-1 > form > div.row.mt-3 > div:nth-child(1) > div > div:nth-child(1) > input[type=text]").addClass("form-control");
                });
        </script>

@endsection
