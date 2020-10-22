@foreach($tips as $tip)
    <tr>
        <td><img src="{{ asset('public/images/rubrika/' . $tip->image) }}" alt /></td>
        <td>{{$tip->title_ru}}</td>
        <td>{{$tip->info_ru}}</td>
        <td>{{$tip->source}}</td>
        <td>{{$tip->created_at}}</td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('tips.edit', $tip->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonview" href="{{url('/tipsingle', [$tip->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
        <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$tip->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
@endforeach
