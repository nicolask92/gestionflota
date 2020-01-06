@extends('layouts.app')

@section('content')

<div id="bootstrap-iso form" class="container-xl py-4">

    <form autocomplete="off" method="POST">
        <div class="row" id="app">
              <div class="col-sm-2">
                  <vuejs-datepicker :typeable="true" :language="es" :value="dateVal" :format="dateFormat" name="fecha_c" placeholder="COMIENZO"></vuejs-datepicker>
              </div>
              <div class="col-sm-2">
                <vuejs-datepicker :typeable="true" :language="es" :value="dateVal" :format="dateFormat" name="fecha_f" placeholder="FIN"></vuejs-datepicker>
              </div>
            <div class="col-sm">
                    <input type="text" class="form-control" placeholder="PAX">
            </div>
          <div class="col-sm">
            <input type="text" class="form-control" placeholder="CLIENTE">
          </div>
          <div class="col-sm">
            <input type="text" class="form-control" placeholder="MOVIL">
          </div>
          <div class="col-sm">
            <input type="text" class="form-control" placeholder="VOUCHER">
          </div>
          <div class="col-sm">
            <button type="button" class="btn btn-primary btn-block">Buscar</button>
          </div>
        </div>
      </form>

</div>

@include('datos')


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


<script type="application/javascript">
$(document).ready(function(){
        $("#app > div:nth-child(1) > div > div:nth-child(1) > input").addClass("form-control");
        $("#app > div:nth-child(2) > div > div:nth-child(1) > input").addClass("form-control");
    });
</script> 

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>


@endsection
