@foreach($materials as $material)
    <tr>
        <td>{{$material->id}}</td>
        <td>
            <img src="{{ asset('public/images/fabric/' .$material->img) }}">
        </td>
        <td>
            {{$material->material_ru}}
        </td>
        <td>
            {{$material->material_en}}
        </td>
        <td>
            <a href="{{route('materials.edit', $material->id)}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$material->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>

            </div>
        </td>
    </tr>
@endforeach
