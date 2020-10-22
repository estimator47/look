@extends('back.layout')
@section('css')
    <style>
tr {
    text-align: left;
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
                            @if (session('category-ok'))
                              @component('back.components.alert')
                                  @slot('type')
                                      success
                                  @endslot
                                  {!! session('category-ok') !!}
                              @endcomponent
                            @endif
                      <table>
                         <thead>
                          <tr>
                            <td>№</td>
                            <td>Название каталога</td>
                            <td>Katalog nomlanishi</td>
                          </tr>
                          </thead>
                          <tbody id="category-pannel">

                             @include('back.category-standard')

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
     BaseRecord.destroycategory($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
