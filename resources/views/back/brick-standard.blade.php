@foreach($news as $new)
<tr>
    <td><img src="{{ asset('public/images/news/' . $new->image) }}" alt /></td>
    <td>{{$new->name_ru}}</td>
    <td>{{$new->info_ru}}</td>
    <td>{{$new->created_at}}</td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('news.edit', $new->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonview" href="{{url('/newssingle', [$new->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$new->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
</tr>
@endforeach
