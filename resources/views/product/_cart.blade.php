@extends('layout')

@section('content')
    <?php use App\Models\Products; ?>
    <div class="main-block">



        <div class="container">

            <!-- Actual content -->
            <div class="ecommerce pt-40">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Shopping items content -->
                        <div class="shopping-content">
                            <!-- Block Title -->
                            <h4 class="text-success">
                                @if (Request::session()->get('checkOut_success'))
                                    {{ Request::session()->get('checkOut_success') }}
                                @endif
                            </h4>
                            <h4 class="text-danger">
                                @if (Request::session()->get('itemRemoved'))
                                    {{ Request::session()->get('itemRemoved') }}
                                @endif
                            </h4>
                            <!-- Shopping Edit Profile -->
                            <div class="shopping-wishlist">
                                <!-- Recent Purchase Table -->
                                <div class=" table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cart Id</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id = 1; ?>
                                            @foreach ($cart as $item)
                                                <tr>
                                                    <td>{{ $id }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <!-- Product image -->
                                                    <td>
                                                        @if (file_exists("
                                                            /img/shop/{{ Products::find($item->products_id)->image }}"))
                                                            <a href="#">
                                                                <img src="img/small/{{ Products::find($item->products_id)->image }}" alt="" class="img-responsive" />
                                                            </a>
                                                        @else
                                                        <a href="#">
                                                            <img src="img/small/50.jpg" alt="" class="img-responsive" />
                                                        </a>
                                                        @endif
                                                        
                                                    </td>
                                                    <td>
                                                        <a href="/product/{{ $item->products_id }}">
                                                            {{ Products::find($item->products_id)->product_name }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ Products::find($item->products_id)->price }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-xs">
                                                            <button class="btn btn-sm btn-default">
                                                                <form action="/removeFromCart/{{ $item->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type='submit' class="btn btn-sm btn-red"><i
                                                                            class="fa fa-trash-o"></i>
                                                                        {{ $item->id }}
                                                                        </=>
                                                                </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $id++; ?>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="shopping-pagination">
                                    <ul class="pagination pull-right">

                                        <li>{{ $cart->links() }}</li>
                                    </ul>
                                </div>
                                <!-- Pagination end-->
                                <div class="col-sm-6 padding-left-md">
                                    <h3 class="subtitle">Your Address</h3>

                                    <div class="xs-margin half">
                                    </div>
                                    <form action="/checkoutall" class="pull-right" method="POST">
                                        @csrf
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

                                        <input type="submit" name="checkout" value="Checkout All"
                                            class=" btn btn-outline-success">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>



@endsection
