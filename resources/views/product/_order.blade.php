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
                            
                            <!-- Shopping Edit Profile -->
                            <div class="shopping-wishlist">
                                <!-- Recent Purchase Table -->
                                <div class=" table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order Id</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id = 1; ?>
                                            @foreach ($order as $item)
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

                                                    {{-- <td>
                                                        <div class="btn-group btn-group-xs">
                                                            <button class="btn btn-sm btn-default">
                                                                <form action="/removeFromCart/{{ $item->id }}" method="POST">
                                                                    @csrf
                                                                    <button type='submit'
                                                                        class="btn btn-sm btn-red"><i class="fa fa-trash-o"></i>
                                                                        {{ $item->id }}
                                                                    </=>
                                                                </form>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                                <?php $id++; ?>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="shopping-pagination">
                                    <ul class="pagination pull-right">

                                        <li>{{ $order->links() }}</li>
                                    </ul>
                                </div>
                                <!-- Pagination end-->

                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>



@endsection
