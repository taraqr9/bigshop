@extends('layout')

@section('register')

    <main class="container">

        <section>

            <div class="signuppanel">

                <div class="row">

                    <div class="col-md-6">

                        <div class="signup-info">
                            <div class="logopanel">
                                <h1><span>[</span> Big Shop <span>]</span></h1>
                            </div><!-- logopanel -->

                            <div class="mb20"></div>

                            <h5><strong>Bootstrap 3 Ecommerce Template!</strong></h5>
                            <p>Big Shop is a great theme that is perfect any browser.</p>
                            <p>Below are some of the benefits you can have when purchasing this template.</p>
                            <div class="mb20"></div>

                            <div class="feat-list">
                                <i class="fa fa-wrench"></i>
                                <h4 class="text-success">Easy to Customize</h4>
                                <p>Big Shop is made using Bootstrap 3 so you can easily customize any element of this
                                    template following the structure of Bootstrap 3.</p>
                            </div>

                            <div class="feat-list">
                                <i class="fa fa-compress"></i>
                                <h4 class="text-success">Fully Responsive Layout</h4>
                                <p>Big Shop is design to fit on all browser widths and all resolutions on all mobile
                                    devices. Try to scale your browser and see the results.</p>
                            </div>

                            <div class="feat-list mb20">
                                <i class="fa fa-search-plus"></i>
                                <h4 class="text-success">Retina Ready</h4>
                                <p>When a user load a page, a script checks each image on the page to see if there's a
                                    high-res version of that image. If a high-res exists, the script will swap that image in
                                    place.</p>
                            </div>

                            <h4 class="mb20">and much more...</h4>

                        </div><!-- signup-info -->

                    </div><!-- col-sm-6 -->

                    <div class="col-md-6">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <h3 class="nomargin">Sign Up</h3>
                            <p class="mt5 mb20">Already a member? <a href="login"><strong>Login</strong></a></p>

                            <label class="control-label">Your Name</label>
                            <div class="mb10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb10">
                                <label class="control-label">Email Address</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb10">
                                <label class="control-label">Password</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb10">
                                <label class="control-label">Retype Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>



                            <br />

                            <button type="submit" class="btn btn-success btn-block">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div><!-- col-sm-6 -->

                </div><!-- row -->



            </div><!-- signuppanel -->

        </section>
    </main>

@endsection
