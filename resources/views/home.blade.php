@extends('layouts.app')

@section('content')

<div id="bootstrap-iso form" class="container-xl">

    <form autocomplete="off" method="POST">
        <div class="row" id="app">
              <div>
                  <vuejs-datepicker :typeable="true" :language="es" :value="dateVal" :format="dateFormat" class="col" name="fecha_c" placeholder="COMIENZO"></vuejs-datepicker>
              </div>
              <div>
                <vuejs-datepicker :typeable="true" :language="es" :value="dateVal" :format="dateFormat" class="col" name="fecha_f" placeholder="FIN"></vuejs-datepicker>
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

@endsection
