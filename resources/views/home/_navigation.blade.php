<?php 
use App\Models\Category;
use App\Models\SubCategory;
?>

<div class="navi">
    <div class="container">
        <div class="navy">
            <ul>
                <!-- Main menu -->
                <li><a href="/">Home</a>
                </li>

                <li><a href="/category">Category</a>
                    <ul>
                        @foreach (Category::all() as $item)
                        <li>
                            <a href="{{ route('product._subcategory',['subcategory'=>$item])}} ">
                                {{ $item->category_name }}
                            </a>
                            <ul>
                                
                                @foreach (Category::find($item->id)->subCategory  as $subCate)
                                <li>
                                    <a href="{{ route('product._products',['product'=>$item])}}">{{ $subCate->subcategory_name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                        {{-- <li><a href="#">Men's Fashion</a>
                            <ul>
                                <li><a href="#">T-shirt</a></li>
                                <li><a href="#">Panjabi</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories</a></li>


                            </ul>
                        </li>
                        <li><a href="#">Women's Fashion</a>
                            <ul>
                                <li><a href="#">Saree</a></li>
                                <li><a href="#">Traditional Clothing</a></li>
                                <li><a href="#">Bag</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories</a></li>


                            </ul>
                        </li>
                        <li><a href="#">Laptop</a>
                            <ul>
                                <li><a href="#">Vaio</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Toshiba</a></li>
                                <li><a href="#">HP</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Smartphone</a>
                            <ul>
                                <li><a href="#">Iphone</a></li>
                                <li><a href="#">Oppo</a></li>
                                <li><a href="#">Nokia</a></li>
                                <li><a href="#">Sony</a></li>
                                <li><a href="#">Samsung</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Accessories</a>
                            <ul>
                                <li><a href="#">Headphone</a></li>
                                <li><a href="#">Adapter</a></li>
                                <li><a href="#">Bag</a></li>
                                <li><a href="#">Baby doll</a></li>

                            </ul>
                        </li>
                        <!-- Multi level menu -->
                        <li><a href="#">Multi Level Menu</a>
                            <ul>
                                <!-- Sub menu -->
                                <li><a href="#">Menu #1</a></li>
                                <li><a href="#">Menu #1</a></li>
                                <li><a href="#">Menu #1</a>
                                    <ul>
                                        <!-- Sub menu -->
                                        <li><a href="#">Menu #2</a></li>
                                        <li><a href="#">Menu #2</a></li>
                                        <li><a href="#">Menu #2</a>
                                            <ul>
                                                <!-- Sub menu -->
                                                <li><a href="#">Menu #3</a></li>
                                                <li><a href="#">Menu #3</a></li>
                                                <li><a href="#">Menu #3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>

                <li><a href="#">Pages</a>
                    <ul>
                        <li><a href="shop.html"><span>Shop</span></a></li>
                        <li><a href="single-product.html"><span>Single product</span></a></li>
                        <li><a href="shopping-cart.html"><span>Cart</span></a></li>
                        <li><a href="checkout.html"><span>Checkout</span></a></li>
                        <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                        <li><a href="404.html"><span>404 Page</span></a></li>
                    </ul>
                </li>



                <li>
                    @guest
                        <a href="#">Login</a>
                        <ul>
                            <li><a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a></li>
                            <li><a href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>

                        </ul>
                    @else
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul>
                            <li><a href="/profile"><span>{{ __('Profile') }}</span></a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    @endguest
                </li>


                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
