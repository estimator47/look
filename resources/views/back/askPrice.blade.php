@extends('back.layout')
@section('css')
<style>
.fulltext{
  color: black;
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
                      <table>
                         <thead>
                          <tr>
                            <td>Наименование организации или Ф.И.О</td>
                            <td>Адрес</td>
                            <td>Телефон</td>
                            <td>E-Mail адрес</td>
                            <td>Дата</td>
                              <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="price-pannel">
                              @include('back.askprice-standard')
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
     BaseRecord.destroyprice($(this).attr('id'));
     return false;
   });


 });
</script>

@endsection
