@extends('back.layout')
@section('css')
    <style>
tr {
    text-align: left;
}
#catalog-pannel img {
    width: 120px;
}
    </style>
@endsection
@section('main')
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                            @if (session('catalog-ok'))
                              @component('back.components.alert')
                                  @slot('type')
                                      success
                                  @endslot
                                  {!! session('catalog-ok') !!}
                              @endcomponent
                            @endif
                      <table>
                         <thead>
                          <tr>
                            <td>№</td>
                            <td>Фото</td>
                            <td>Название каталога</td>
                            <td>Модел</td>
                            <td>Katalog nomlanishi</td>
                            <td>Model</td>
                          </tr>
                          </thead>
                          <tbody id="catalog-pannel">

                             @include('back.catalog-standard')

                         </tbody>
                       </table>
                     </div>
                     <hr>
                   </div>
                 </div>
              </div>
           </div>
@endsection

@section('js')

<script>
 $(document).ready(function(){
   $('.listbuttonremove').click(function(){
     BaseRecord.destroycatalog($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
