@foreach ($products as $product)
    <!-- single product start-->
    <div class="col-lg-3 col-md-4 item">
        <div class="single-product">
            <div class="product-img">
                <div class="single-prodcut-img  product-overlay pos-rltv">
                    <a href="{{url('/product/' . $product->material->material_en .'/' .$product->title_en. '/'. $product->id  )}}">
                        <img alt="lookatme product photo" src="{{ $product->products[0]->image_url }}" class="primary-image">
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
