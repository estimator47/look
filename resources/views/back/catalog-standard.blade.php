@foreach($catalogs as $catalog)
    <tr>
        <td>{{$catalog->id}}</td>
        <td><img src="{{ asset('public/images/type/' . $catalog->image) }}" alt /></td>
        <td>{{$catalog->category->category_ru}}</td>
        <td>{{$catalog->name_ru}}</td>
        <td>{{$catalog->category->category_uz}}</td>
        <td>{{$catalog->name_uz}}</td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('catalogs.edit', $catalog->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$catalog->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
@endforeach

