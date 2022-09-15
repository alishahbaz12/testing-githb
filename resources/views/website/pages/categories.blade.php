
@extends('website.master')
@section('title' , "Categories")

@section('content')

    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('{{asset('website/assets/images/banners/banner-top.jpg')}}');">
            <div class="container position-relative">
                <div class="row">
                    <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                        <h3>Electronic<br>Deals</h3>
                        <a href="category.html" class="btn btn-dark">Get Yours!</a>
                    </div>
                    <div class="pl-lg-3 col-md-4 offset-md-0 offset-1 pt-3">
                        <div class="coupon-sale-content">
                            <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                            </h4>
                            <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">$100</b> OFF</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Men</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </nav>

        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">



        </nav>

        <div class="row">
            @foreach ($category as $cateorylist)


            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="product-default">
                    <figure>
                        <a href="{{url('category=' .$cateorylist->name)}}">
                            <img src="{{asset($cateorylist->image_url)}}" width="180" height="180" alt="product" />
                            <img src="{{asset($cateorylist->image_url)}}" width="180" height="180" alt="product" />
                        </a>

                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>

                    <div class="product-details">
                        <div class="category-wrap">
                            {{-- <div class="category-list">
                                <a href="category.html" class="product-category">{{$cateorylist->category->name}}</a>
                            </div> --}}
                        </div>

                        <h3 class="product-title"> <a href="product.html">{{$cateorylist->name}}</a>
                        </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->


                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            @endforeach



        </div>
        <!-- End .row -->

        <nav class="toolbox toolbox-pagination">
            <div class="toolbox-item toolbox-show">
                <label>Show:</label>

                <div class="select-custom">
                    <select name="count" class="form-control">
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                    </select>
                </div>
                <!-- End .select-custom -->
            </div>
            <!-- End .toolbox-item -->

            <ul class="pagination toolbox-item">
                <li class="page-item disabled">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><span class="page-link">...</span></li>
                <li class="page-item">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End .container -->

    <div class="sidebar-overlay"></div>
    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar d-lg-none">
        <div class="sidebar-wrapper">
            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                </h3>

                <div class="collapse show" id="widget-body-2">
                    <div class="widget-body">
                        <ul class="cat-list">
                            <li>
                                <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-1">
                                    Accessories<span class="products-count">(3)</span>
                                    <span class="toggle"></span>
                                </a>
                                <div class="collapse show" id="widget-category-1">
                                    <ul class="cat-sublist">
                                        <li>Caps<span class="products-count">(1)</span></li>
                                        <li>Watches<span class="products-count">(2)</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-2">
                                    Dress<span class="products-count">(4)</span>
                                    <span class="toggle"></span>
                                </a>
                                <div class="collapse" id="widget-category-2">
                                    <ul class="cat-sublist">
                                        <li>Clothing<span class="products-count">(4)</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-3">
                                    Electronics<span class="products-count">(2)</span>
                                    <span class="toggle"></span>
                                </a>
                                <div class="collapse" id="widget-category-3">
                                    <ul class="cat-sublist">
                                        <li>Headphone<span class="products-count">(1)</span></li>
                                        <li>Watch<span class="products-count">(1)</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-4">
                                    Fashion<span class="products-count">(6)</span>
                                    <span class="toggle"></span>
                                </a>
                                <div class="collapse" id="widget-category-4">
                                    <ul class="cat-sublist">
                                        <li>Shoes<span class="products-count">(4)</span></li>
                                        <li>Bag<span class="products-count">(2)</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Music</a><span class="products-count">(2)</span></li>
                        </ul>
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
            </div>
            <!-- End .widget -->

            <div class="widget">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                </h3>

                <div class="collapse show" id="widget-body-3">
                    <div class="widget-body pb-0">
                        <form action="#">
                            <div class="price-slider-wrapper">
                                <div id="price-slider"></div>
                                <!-- End #price-slider -->
                            </div>
                            <!-- End .price-slider-wrapper -->

                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                <div class="filter-price-text">
                                    Price:
                                    <span id="filter-price-range"></span>
                                </div>
                                <!-- End .filter-price-text -->

                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                            <!-- End .filter-price-action -->
                        </form>
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
            </div>
            <!-- End .widget -->

            <div class="widget widget-color">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                </h3>

                <div class="collapse show" id="widget-body-4">
                    <div class="widget-body pb-0">
                        <ul class="config-swatch-list">
                            <li class="active">
                                <a href="#" style="background-color: #000;"></a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #0188cc;"></a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #81d742;"></a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #6085a5;"></a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #ab6e6e;"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
            </div>
            <!-- End .widget -->

            <div class="widget widget-size">
                <h3 class="widget-title">
                    <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                </h3>

                <div class="collapse show" id="widget-body-5">
                    <div class="widget-body pb-0">
                        <ul class="config-size-list">
                            <li class="active"><a href="#">XL</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">S</a></li>
                        </ul>
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
            </div>
            <!-- End .widget -->

            <div class="widget widget-featured">
                <h3 class="widget-title">Featured</h3>

                <div class="widget-body">
                    <div class="owl-carousel widget-featured-products">
                        <div class="featured-col">
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-4.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-4-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for the
                                            Young - S</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-5.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-5-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue
                                            Shoes</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-6.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-6-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .featured-col -->

                        <div class="featured-col">
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-1.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-1-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth
                                            Speaker</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-2.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-2-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual
                                            HandBag</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-3.jpg" width="75" height="75" alt="product" />
                                        <img src="assets/images/products/product-3-2.jpg" width="75" height="75" alt="product" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D
                                            Speaker</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .featured-col -->
                    </div>
                    <!-- End .widget-featured-slider -->
                </div>
                <!-- End .widget-body -->
            </div>
            <!-- End .widget -->

            <div class="widget widget-block">
                <h3 class="widget-title">Custom HTML Block</h3>
                <h5>This is a custom sub-title.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
            </div>
            <!-- End .widget -->
        </div>
        <!-- End .sidebar-wrapper -->
    </aside>
    <!-- End .col-lg-3 -->

    <div class="mb-3"></div>
    <!-- margin -->

@endsection
