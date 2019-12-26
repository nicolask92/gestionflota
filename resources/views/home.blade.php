@extends('layouts.app')

@section('content')

<div id="bootstrap-iso form" class="container-xl">

    <form autocomplete="off" method="POST">
        <div class="row">
            <div id="app">
              </div>
            <div class="col">
                <input class="form-control" id="date1" name="date1" value="{{ old('date') }}" placeholder="COMIENZO" type="text"/>
            </div>
            <div class="col">
                    <input class="form-control" id="date" name="date2" value="{{ old('date') }}" placeholder="FIN" type="text"/>
            </div>
            <div class="col">
                    <input type="text" class="form-control" placeholder="PAX">
            </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="CLIENTE">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="MOVIL">
          </div>
          <div class="col">
            <button type="button" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </form>

</div>


@endsection

@section('script')

<script type="application/javascript">
</script> 

@endsection
