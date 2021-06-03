@extends('layout')

@section('content')
    <?php use App\Models\Products; ?>
    <!-- start main content -->
    <main class="main-container">
        <!--Checkout Area Start-->
        <section class="checkout-area area-padding ptb-40">
            <!-- Begin checkout -->
            <div class="ld-subpage-content">

                <div class="checkout-content">

                    <!-- Begin checkout section -->
                    <section class="checkout">
                        <section class="checkout-section">

                            <div class="ld-checkout-inner">

                                <div class="xs-margin"></div>

                                <div class="accordion" id="collapse">
                                    <div class="accordion-group panel darkerbg">

                                        <div class="container">
                                            <h2 class="accordion-title">
                                                <span>
                                                    Billing Informations
                                                </span>
                                                
                                                <h3 class="text-success">
                                                    @if (Request::session()->get('buy_success'))
                                                        {{Request::session()->get('buy_success')}}
                                                    @endif
                                                </h3>
                                            </h2>
                                            <div class="row accordion-body-wrapper">
                                                <form action="/buynow/{{$product->id}}" method="POST">
                                                    @csrf
                                                    
                                                    <div class="col-sm-6 padding-right-md">
                                                        <h3 class="subtitle">Your Personal Details</h3>
                                                        <div class="xs-margin half">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class=" table-responsive">
                                                                <table class="table table-bordered">
                                                                    <!-- Table Header -->
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Image</th>
                                                                            <th>Product Name</th>
                                                                            <th>Quantity</th>
                                                                            <th>Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <!-- Product image -->
                                                                            <td>
                                                                                <a href="#">
                                                                                    <img src="/img/small/50.jpg"
                                                                                        class="img-responsive" />
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                {{ $product->product_name }}
                                                                            </td>
                                                                            <td>
                                                                                <input type="number" name="quantity" value="1">
                                                                            </td>
                                                                            <td>{{ $product->price }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="md-margin visible-xs clearfix">
                                                    </div>

                                                    <div class="col-sm-6 padding-left-md">
                                                        <h3 class="subtitle">Your Address</h3>

                                                        <div class="xs-margin half">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address1" class="form-label">Enter your Name
                                                            </label>
                                                            <input type="text" name="name" class="form-control input-lg">
                                                            
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address1" class="form-label">Enter your Phone Number
                                                            </label>
                                                            <input type="number" name="phone" class="form-control input-lg">
                                                            
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address1" class="form-label">Enter your address
                                                            </label>
                                                            <input type="text" name="address" class="form-control input-lg">
                                                            
                                                        </div>
                                                        <div class="top-5px">
                                                        </div>

                                                        <div class="xs-margin">
                                                        </div>
                                                        <input type="submit" class="btn btn-outline-success "
                                                            value="Continue">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="xlg-margin">
                            </div>

                </div>

        </section>


        </section>
        <!-- End checkout section -->


        </div>
        <!-- /.checkout-content -->
        </div>
        <!-- /.ld-subpage-content -->
        <!-- End checkout -->
        </section>
        <!--End of Checkout Area-->


    </main>
@endsection
