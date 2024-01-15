@foreach($catalogs as $catalog)
    <tr>
        <td>{{$catalog->id}}</td>
        <td>
            <img src="{{$catalog->products[0]->image_url}}">
        </td>
        <td>
            {{$catalog->material->material_en}}
        </td>
        <td>
            {{$catalog->type->type_en}}
        </td>
        <td>{{$catalog->title_en}}</td>
        <td><?=substr($catalog->info_en, 0, 100); ?>...</td>
        <td>{{$catalog->size}}</td>
        <td>
            <a href="{{route('catalogs.edit', $catalog->id)}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$catalog->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>
            </div>
        </td>
    </tr>
@endforeach
