@extends('layouts.app')

@section('content')
<div class="container mt-5">
<h3>RESERVAR</h3>
</div>
<div class="container mt-1">
<form>
    <div class="row mt-3">

      <div class="col">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cliente">
          <div class="input-group-prepend">
            <a class="btn btn-outline-secondary" href="{{ route('agregar.cliente') }}" target="_blank" id="button-addon1">Nuevo</a>
          </div>
      </div>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Fecha">
      </div>
      <div class="col">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Hora</span>
        </div>
        <input type="text" aria-label="Hora" placeholder="Hora" class="form-control">
        <input type="text" aria-label="Minuto" placeholder="Minuto" class="form-control">
      </div>
    </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="PAX">
      </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <input type="text" class="form-control" placeholder="Equipaje">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Habitacion">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Vuelo">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Tarifa">
          </div>
      </div>
      <div class="row mt-4">
        <div class="col">
            <input type="text" class="form-control" placeholder="Origen">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Destino">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Chofer">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Movil">
          </div>
      </div>
      <div class="row mt-4">
        <div class="col">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Comentarios</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

@section('script')

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>



@endsection
