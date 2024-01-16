@foreach($files as $file)
    <tr>
        <td>{{$file->id}}</td>
        <td>
            {{$file->type->name}}
        </td>
        <td>
            <img src="{{$file->image_url}}">
        </td>

        <td>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$file->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>
            </div>
        </td>
    </tr>
@endforeach
