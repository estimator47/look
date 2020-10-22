@foreach($prices as $price)
<tr style="text-align: center;">
<td>{{$price->name}}</td>
<td>{{$price->address}}</td>
<td>{{$price->phone}}</td>
<td>{{$price->email}}</td>
<td>{{$price->created_at}}</td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$price->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
</tr>
@endforeach
