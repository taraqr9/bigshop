@extends('layout')

@section('category')
    <div class="container mt-3">
        
        
        <div id="shop-all" class="row">
            <!-- Product Item #1 -->
            @foreach ($category as $item)

            <div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
                <div class="product-img">
                    <img src="img/shop/index2_product1.png" alt="product">
                    <div class="product-hover">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <!-- .product-img end -->
                <div class="product-bio">
                    <h4>
                        <a href="#">{{ $item->category_name }}</a>
                    </h4>
                    
                </div>
                <!-- .product-bio end -->

            </div>

            @endforeach
            
        </div>
    </div>
@endsection