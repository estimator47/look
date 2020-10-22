@extends('back.layout')
@section('css')
<style>

.bolt_text{
  font-weight: bold;
}
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
                            <td>Ф.И.О</td>
                            <td>Телефон</td>
                            <td>Сообщение</td>
                            <td>Дата</td>
                              <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="message-pannel">
                              @include('back.message-standard')
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
     BaseRecord.destroymessage($(this).attr('id'));
     return false;
   });


 });
</script>

@endsection
