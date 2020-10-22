@foreach($models as $model)
<tr>
    <td><img src="{{ asset('public/images/katalog/' . $model->image) }}" alt /></td>
    <td><img src="{{ asset('public/images/katalog/' . $model->image2) }}" alt /></td>
    <td><img src="{{ asset('public/images/katalog/' . $model->image3) }}" alt /></td>
    <td>{{$model->type->name_ru}}</td>
    <td>{{$model->article}}</td>
    <td>{{$model->size}}</td>
    <td>{{$model->compound_ru}}</td>
    <td>{{$model->color_ru}}</td>
    <td>{{$model->info_ru}}</td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{route('models.edit', $model->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonview" href="{{url('/model_single', [$model->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$model->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
</tr>
@endforeach
