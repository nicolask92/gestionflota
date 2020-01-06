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
            <th scope="col">VEHICULO</th>
            <th scope="col">MOVIL</th>
            <th scope="col">VOUCHER</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
</div>
