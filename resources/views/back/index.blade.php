@extends('back.layout')
@section('css')
    <style>
        #back-pannel img {
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
                            @if (session('news-updated'))
                              @component('back.components.alert')
                                  @slot('type')
                                      success
                                  @endslot
                                  {!! session('news-updated') !!}
                              @endcomponent
                            @endif
                      <table>
                         <thead>
                          <tr>
                            <td>Фото</td>
                            <td>Заглавие</td>
                            <td>Cтатья</td>
                            <td>Дата</td>

                          </tr>
                          </thead>
                          <tbody id="back-pannel">
                            @include('back.brick-standard')
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
     BaseRecord.destroynews($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
