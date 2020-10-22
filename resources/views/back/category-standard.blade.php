@foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->category_ru}}</td>
        <td>{{$category->category_uz}}</td>
        <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('categories.edit', $category->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$category->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
@endforeach

