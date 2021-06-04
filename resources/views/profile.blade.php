@extends('layout')

@section('content')


<main class="main-container">
    <div>
        <h3 class="text-success">
            @if (Request::session()->get('profileUpdate'))
                {{Request::session()->get('profileUpdate')}}
            @endif
        </h3>
    </div>
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
                                        <div class="row accordion-body-wrapper">
                                            <form action="/profile/edit" method="POST">
                                                @csrf
                                                <div class="md-margin visible-xs clearfix">
                                                </div>

                                                <div class="col-sm-6 padding-left-md">
                                                    <h3 class="subtitle">Edit Profile</h3>

                                                    <div class="xs-margin half">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="address1" class="form-label">Enter your Name
                                                        </label>
                                                        <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control input-lg">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Enter your Email
                                                        </label>
                                                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control input-lg">
                                                        
                                                    </div>
                                                    <input type="submit" class="btn btn-outline-success "
                                                        value="Update">
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