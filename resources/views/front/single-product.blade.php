@extends('layouts.front')

@section('css')
@endsection

@section('front')

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>
                     {{$product->title}}
                </h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active"><a title="Go to Home Page" href="{{url('/product/all')}}">{{ __('message.product') }}</a></li>
                <li class="active">
                    <a title="Go to Home Page" href="{{url('/product/cotton')}}">
                        {{$product->material->material}}
                    </a>
                </li>
                <li class="active">
                     {{$product->title}}
                </li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--single-protfolio-area are start-->
    <div class="single-protfolio-area ptb-70">
      <div class="container">
          <div class="row">
                <div class="col-lg-7">
                   <div class="portfolio-thumbnil-area">
                       <div class="product-more-views">
                        <div class="tab_thumbnail" data-tabs="tabs">
                            <div class="thumbnail-carousel">
                                <ul class="nav">
                                        <li>
                                            <a href="#view11" class="active shadow-box" aria-controls="view11" data-toggle="tab">
                                                <img src="{{ $product->products[0]->image_url }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab">
                                                <img src="{{ $product->products[1]->image_url }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#view33" class="shadow-box" aria-controls="view33" data-toggle="tab">
                                                <img src="{{ $product->products[2]->image_url }}" alt="" />
                                            </a>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content active-portfolio-area pos-rltv">

                            <div role="tabpanel" class="tab-pane active" id="view11">
                                <div class="product-imgs">
                                        <img src="{{ $product->products[0]->image_url }}" alt="Single portfolio"
                                             />
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view22">
                                <div class="product-imgs">
                                        <img src="{{ $product->products[1]->image_url }}" alt="Single portfolio"
                                             />
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view33">
                                <div class="product-imgs">
                                        <img src="{{ $product->products[2]->image_url }}" alt="Single portfolio"
                                             />
                                </div>
                            </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-5">
                    <div class="single-product-description">
                       <div class="sp-top-des">
                            <h5 style="font-family: BentonSansBook,Helvetica,Arial,sans-serif;">LOOK AT ME</h5>
                            <h3 style="font-family: BentonSansLight,Helvetica,Arial,sans-serif;">{{$product->title}}
                        </div>
                        <div class="sp-bottom-des">
                        <div class="single-product-option">
                            <div class="sort product-type">
                                <div>
                                    {{ __('message.material') }}: {{$product->material->material}}
                                </div>
                            </div>
                        </div>
                        <div class="quantity-area">
                            <label>{{ __('message.color') }}: </label>
                            <div class="cart-quantity">
                                    <div class="product-qty">
                                        <div class="cart-quantity">
                                            <div class="cart-plus-minus">
                                                @foreach($product->colors as $img)
                                                            <div class="inc qtybutton" data-toggle="popover-hover"
                                                                 data-title="{{$img->color}}" data-img="{{ $img->image_url }}"
                                                                 style="line-height: 28px;">
                                                                <img src="{{ $img->image_url }}" style="width: 100%" alt="">
                                                            </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="quantity-area">
                            <label>{{ __('message.size') }}: </label>
                            <div class="cart-quantity">
                                <div class="product-qty">
                                    <div class="cart-quantity">
                                        <div class="cart-plus-minus">
                                            <?php $size = explode( "," , $product->size); ?>
                                            @for($i = 0; $i<count($size); $i++)
                                                <div class="inc qtybutton">
                                                    {{$size[$i]}}
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quantity-area container">

                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" style="border: none; background-color: transparent; color: black;">
                                <i class="fa fa-ruler-horizontal">
                                </i> {{ __('message.size&fit') }} >
                            </button>
                            <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog" style="padding-top: 70px;">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">{{ __('message.size') }}  </h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <div class="modal-body">
                                      <table class="table table-hover table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">S</th>
                                            <th scope="col">M</th>
                                            <th scope="col">L</th>
                                            <th scope="col">XL</th>
                                            <th scope="col">XXL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr >
                                            <td>Russian size</td>
                                            <td>44</td>
                                            <td>46</td>
                                            <td>48</td>
                                            <td>50</td>
                                            <td>52</td>
                                        </tr>
                                        <tr >
                                            <td>European size</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                            <td>46</td>
                                        </tr>
                                        <tr >
                                            <td>Waist (sm)</td>
                                            <td>69-72</td>
                                            <td>73-46</td>
                                            <td>77-80</td>
                                            <td>81-84</td>
                                            <td>85-88</td>
                                        </tr>
                                        <tr >
                                            <td>Bust (sm)</td>
                                            <td>84-87</td>
                                            <td>88-91</td>
                                            <td>92-95</td>
                                            <td>96-99</td>
                                            <td>100-103</td>
                                        </tr>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">3XL</th>
                                            <th scope="col">4XL</th>
                                            <th scope="col">5XL</th>
                                        </tr>
                                        <tr >
                                            <td>Russian size</td>
                                            <td></td>
                                            <td></td>
                                            <td>54-56</td>
                                            <td>58-60</td>
                                            <td>62-64</td>
                                        </tr>
                                        <tr >
                                            <td>European size</td>
                                            <td></td>
                                            <td></td>
                                            <td>48-50</td>
                                            <td>52-54</td>
                                            <td>56-58</td>
                                        </tr>
                                        <tr >
                                            <td>Waist (sm)</td>
                                            <td></td>
                                            <td></td>
                                            <td>89-95</td>
                                            <td>96-102</td>
                                            <td>103-109</td>
                                        </tr>
                                        <tr >
                                            <td>Bust (sm)</td>
                                            <td></td>
                                            <td></td>
                                            <td>104-110</td>
                                            <td>111-117</td>
                                            <td>118-124</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal" style="color: black;">Close</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                        </div>
                  </div>
                  <div class="sp-des">
                    <h4>{{ __('message.description') }}</h4>
                        <p>
                             {{$product->info}}
                        </p>

                        <ul style="padding-left: 20px;">
                             <?php  $description = explode( ",", $product->description); ?>
                            @for($i = 0; $i<count($description); $i++)
                                <li style="display: list-item; list-style: unset">
                                    {{$description[$i]}}
                                </li>
                            @endfor
                        </ul>
                    </div>
              </div>
          </div>
      </div>
    </div>
    </div>
    <!--single-protfolio-area are start-->


    <!--new arrival area start-->
    <div class="new-arrival-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">{{ __('message.ppwith') }}</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-shop-product-grid row">
                    @foreach ($products as $product)
                        <!-- single product start-->
                        <div class="col-lg-3 col-md-4 item">
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                        <a href="{{url('/product/' . $product->material->material_en .'/' .$product->title_en. '/'. $product->id  )}}">

                                            <img alt="lookatme product photo" src="{{$product->products[0]->image_url}}"  class="primary-image">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name">
                                        <a href="{{url('/product/' . $product->material->material_en .'/' .$product->title_en. '/'. $product->id  )}}">
                                            {{ $product->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- single product end-->
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--new arrival area end-->

@endsection

@section('js')
    <script src="{{ asset('public/js/zoom/jquery.zoom.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="popover-hover"]').popover({
                //trigger: 'focus',
                trigger: 'hover',
                html: true,
                placement: 'top',
                content: function () {
                    return '<img  src="'+$(this).data('img') + '" style="width: 120px;"/>';
                }
            });
            $('#view11').zoom();
            $('#view22').zoom();
            $('#view33').zoom();
        });

    </script>
@endsection


