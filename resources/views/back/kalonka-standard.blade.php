@foreach($kalonkas as $kalonka)
    <tr>
        <td><img src="{{ asset('public/images/rubrika/' . $kalonka->image) }}" alt /></td>
        <td>{{$kalonka->title_ru}}</td>
        <td>{{$kalonka->info_ru}}</td>
        <td>{{$kalonka->source}}</td>
        <td>{{$kalonka->created_at}}</td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('kalonkas.edit', $kalonka->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonview" href="{{url('/kalonkasingle', [$kalonka->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
        <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$kalonka->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
@endforeach
