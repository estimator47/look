@extends('back.layout')
@section('css')
    <style>
        #model-pannel img {
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
                            @if (session('model-ok'))
                              @component('back.components.alert')
                                  @slot('type')
                                      success
                                  @endslot
                                  {!! session('model-ok') !!}
                              @endcomponent
                            @endif
                      <table>
                         <thead>
                          <tr>
                              <td>Фото</td>
                              <td>Фото</td>
                              <td>Фото</td>
                              <td>Каталог</td>
                              <td>Артикль</td>
                              <td>Размеры</td>
                              <td>Состав</td>
                              <td>Цветы</td>
                              <td>Инфо</td>
                          </tr>
                          </thead>
                          <tbody id="model-pannel">
                            @include('back.model-standard')
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
     BaseRecord.destroymodel($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
