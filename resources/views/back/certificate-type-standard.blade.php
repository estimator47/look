@foreach($types as $type)
    <tr>
        <td>{{$type->id}}</td>
        <td>
            {{$type->name}}
        </td>
        <td>
            <a href="{{route('certificate-types.edit', $type->id)}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$type->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>
            </div>
        </td>
    </tr>
@endforeach
