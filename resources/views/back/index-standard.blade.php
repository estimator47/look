@foreach($blogs as $blog)
    <tr>
        <td>{{$blog->id}}</td>
        <td>
            <img src="{{ $blog->image_url }}">
        </td>
        <td>
            {{$blog->title_en}}
        </td>
        <td>
            <?=substr($blog->text_en, 0, 100); ?>...
        </td>
        <td>{{$blog->video}}</td>
        <td>{{$blog->created_at}}</td>
        <td>
            <a href="{{url('/blogs_single', [$blog->id])}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-eye"></i>
            </a>
            <a href="{{route('blogs.edit', [$blog->id])}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$blog->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>
            </div>
        </td>
    </tr>
@endforeach
