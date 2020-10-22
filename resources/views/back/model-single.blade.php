@extends('back.layout')
@section('css')
    <style>
        #model-pannel img {
            width: 120px;
        }
    </style>
@endsection
@section('main')
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      <table>
                         <thead>
                          <tr>
                              <td>Фото</td>
                              <td>Фото</td>
                              <td>Фото</td>
                              <td>Каталог</td>
                              <td>Артикль</td>
                              <td>Размеры</td>
                              <td>Состав</td>
                              <td>Цветы</td>
                              <td>Инфо</td>
                          </tr>
                          </thead>
                          <tbody id="model-pannel">
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
                          </tr>
                          <tr>
                              <td><img src="{{ asset('public/images/katalog/' . $model->image) }}" alt /></td>
                              <td><img src="{{ asset('public/images/katalog/' . $model->image2) }}" alt /></td>
                              <td><img src="{{ asset('public/images/katalog/' . $model->image3) }}" alt /></td>
                              <td>{{$model->type->name_uz}}</td>
                              <td>{{$model->article}}</td>
                              <td>{{$model->size}}</td>
                              <td>{{$model->compound_uz}}</td>
                              <td>{{$model->color_uz}}</td>
                              <td>{{$model->info_uz}}</td>
                          </tr>
                         </tbody>
                       </table>
                     </div>
                     <hr>
                   </div>
                 </div>
              </div>
           </div>
@endsection

@section('js')
@endsection
