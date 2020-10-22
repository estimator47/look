@foreach($forms as $form)
<tr>
    <td><img src="{{ asset('public/images/rubrika/' . $form->image) }}" alt /></td>
    <td>{{$form->title_ru}}</td>
    <td>{{$form->info_ru}}</td>
    <td>{{$form->source}}</td>
    <td>{{$form->created_at}}</td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('forms.edit', $form->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonview" href="{{url('/formsingle', [$form->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$form->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
</tr>
@endforeach
