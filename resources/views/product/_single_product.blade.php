@extends('layout')

@section('content')
    <?php
    use App\Models\SubCategory;
    use App\Models\Category;
    use App\Models\Products;
    ?>
    <main class="main-container">
        <section class="product_content_area pt-40">
            <!-- start of page content -->

            <div class="lookcare-product-single container">

                <div class="row">

                    <div class="main col-xs-12" role="main">

                        <div class=" product">

                            <div class="row mt-4">
                                @if (Request::session()->get('cartMsg'))
                                    <div class="text-success mb-2">{{ Request::session()->get('cartMsg') }}
                                    </div>
                                @endif
                                <div class="col-md-5 col-sm-6 summary-before ">

                                    <div class="product-slider product-shop">
                                        <span class="onsale">Sale!</span>
                                        <ul class="slides">

                                            <a href="/img/temp-images/hoodie_7_front.jpg" data-imagelightbox="gallery"
                                                class="hoodie_7_front">
                                                <img src="/img/temp-images/hoodie_7_front-470x470.jpg"
                                                    class="attachment-shop_single" alt="image">
                                            </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-7 product-review entry-summary">

                                    {{-- <h1 class="product_title">Belted Eyelet Lace Fit</h1> --}}
                                    <h1 class="product_title ">{{ $product_details->product_name }}</h1>
                                    {{-- NOTE Rating --}}
                                    <div class="woocommerce-product-rating">
                                        <a href="#reviews" class="woocommerce-review-link">(
                                            <span class="count">
                                                @if (empty($product_details->numOfUser))
                                                    No review yet!
                                                @else
                                                    {{ $product_details->numOfUser }} customer reviews
                                                @endif
                                            </span>
                                            )</a>
                                    </div>

                                    <div>
                                        <p class="price">
                                            <ins><span class="amount">${{ $product_details->price }}</span></ins>
                                        </p>
                                    </div>

                                    <p>{{ $product_details->product_description }}</p>


                                        <form action="{{ route('addtocart',[$product_details->id])}}" method="POST">
                                        @csrf
                                        <div class="quantity">
                                            <input type="number" step="1" name="quantity" value="1" title="Qty"
                                                class="input-text qty text" size="4" min="1" style="width:30px;">
                                        </div>
                                        
                                        <button type="submit" name="cartOrBuy" value="add_to_cart" class="btn btn-outline-primary mt-3">
                                            Add to cart
                                        </button>
                                        
                                    </form>
                                    <a href="/buynow/{{$product_details->id}}" class="btn btn-outline-success mt-3">
                                        Buy Now
                                    </a>



                                    <div class="product_meta">



                                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span>.</span>


                                        <span class="posted_in">Categories:
                                            <a href="/category"
                                                rel="tag">{{ Category::find($product_details->category_id)->category_name }}</a>,
                                            <a
                                                href="/subcategory/{subcategory:id}">{{ SubCategory::find($product_details->sub_category_id)->subcategory_name }}</a>.</span>


                                    </div>

                                    <div class="share-social-icons">

                                        <a href="#" target="_blank" title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Pin on Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Google+">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- .summary -->

                            </div>

                            <div class="wrapper-description">
                                @if (Request::session()->get('addReview'))
                                    <div class="text-success mb-2">{{ Request::session()->get('addReview') }}
                                    </div>
                                @endif

                                <ul class="tabs-nav clearfix">
                                    <li class="active">Description</li>
                                    <li>Review ({{ count(Products::find($product_details->id)->review) }})</li>
                                </ul>
                                <div class="tabs-container product-comments">

                                    <div class="tab-content">
                                        <section class="related-products">

                                            <h2>Product Description</h2>

                                            <p>
                                                {{ $product_details->product_description }}
                                            </p>

                                            <h3 class="section-title">Related Products</h3>

                                            <div class="related-products-wrapper">

                                                <div class="related-products-carousel">

                                                    <div class="product-control-nav">
                                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                                    </div>

                                                    <div class="products-top"></div>
                                                    <div class="row product-listing">
                                                        <div id="product-carousel" class="product-listing">

                                                            {{-- NOTE Similer product of the same Category --}}
                                                            <?php $count = 0; ?>
                                                            @foreach (SubCategory::find($product_details->sub_category_id)->allProducts as $sameItem)

                                                                <?php if ($count == 5) {
                                                                break;
                                                                } ?>

                                                                <div class="product  item first ">
                                                                    <article>
                                                                        <figure>
                                                                            <a href="#">
                                                                                <img src="/img/temp-images/T_2_front-300x300.jpg"
                                                                                    class="img-responsive" alt="T_2_front">
                                                                            </a>
                                                                            <figcaption><span class="amount">$
                                                                                    {{ $sameItem->price }}</span>
                                                                            </figcaption>
                                                                        </figure>
                                                                        <h4 class="title"><a
                                                                                href="#">{{ $sameItem->product_name }}</a>
                                                                        </h4>
                                                                        <a href="{{ route('product._single_product', ['single_product' => $sameItem]) }}"
                                                                            class="button-add-to-cart">CHECK ME OUT</a>
                                                                    </article>
                                                                </div>
                                                                <?php $count++; ?>
                                                            @endforeach


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </section>
                                    </div>



                                    <div class="tab-content">
                                        <div class="panel entry-content">

                                            <h2>Product Description</h2>

                                            <p>{{ $product_details->product_description }}</p>
                                        </div>

                                        <div class="panel entry-content">

                                            <div id="reviews">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="comments">
                                                            <h3>
                                                                @if (!empty($product_details->rating))
                                                                    {{ $product_details->rating }} : Rating
                                                                @endif
                                                            </h3>
                                                            <h3>
                                                                @if (empty($product_details->numOfUser))
                                                                    No review yet!
                                                                @else
                                                                    {{ $product_details->numOfUser }} reviews for Ship
                                                                    Your
                                                                    Idea
                                                                @endif
                                                            </h3>
                                                            <ol class="commentlist">

                                                                @foreach (Products::find($product_details->id)->review as $review)
                                                                    <li class="comment depth-1">
                                                                        <div class="comment_container">
                                                                            <img alt="gravatar"
                                                                                src="/img/temp-images/com-grav1.jpg"
                                                                                class="avatar photo">
                                                                            <div class="comment-text">
                                                                                <p class="meta">
                                                                                    <span class="star-rating"
                                                                                        title="Rated 4.00 out of 5">
                                                                                        {{ $review->rating }}
                                                                                    </span>
                                                                                    <strong>{{ $review->user_name }}</strong>
                                                                                    – <time
                                                                                        datetime="2013-06-07T13:03:29+00:00">{{ $review->created_at }}</time>:
                                                                                </p>

                                                                                <div class="description">
                                                                                    <p>{{ $review->review }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach

                                                            </ol>


                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="review_form_wrapper">
                                                            <div id="review_form">
                                                                <div id="respond" class="comment-respond">
                                                                    <h3 class="comment-reply-title">Add a review </h3>
                                                                    <hr>
                                                                    @if (auth()->user())
                                                                        {{-- NOTE add Review --}}
                                                                        <form
                                                                            action="/add_review/{{ $product_details->id }}"
                                                                            method="post" id="commentform"
                                                                            class="comment-form">
                                                                            @csrf

                                                                            <p class="comment-form-comment"><label
                                                                                    for="comment">Add Your Rating within 1.0
                                                                                    - 10.0</label>

                                                                                <input type="number" name="rating" min="1.0"
                                                                                    max="10.0" required="">
                                                                            </p>
                                                                            <p class="comment-form-comment"><label
                                                                                    for="comment">Your
                                                                                    Review</label><textarea id="comment"
                                                                                    name="review" cols="45" rows="8"
                                                                                    aria-required="true"
                                                                                    required=""></textarea>
                                                                            </p>

                                                                            <p class="form-submit">
                                                                                <button type="submit" id="form-submit"
                                                                                    class="main-button-icon">SUBMIT</button>
                                                                            </p>

                                                                        </form>
                                                                    @else
                                                                        <h3>Please Login for give product review.</h3>
                                                                    @endif
                                                                </div>
                                                                <!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="clear"></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- #product-293 -->



                    </div>
                    <!-- end of main -->

                </div>
                <!-- end of .row -->

            </div>

            <!-- end of page content -->
        </section>

    </main>

@endsection
