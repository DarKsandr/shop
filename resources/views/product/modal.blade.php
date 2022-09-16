<!-- Modal -->
<div class="modal modal-2 fade" id="quickViewModal{{ $product->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                        class="pe-7s-close"></i></button>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="/assets/images/product-image/zoom-image/1.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="/assets/images/product-image/zoom-image/2.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="/assets/images/product-image/zoom-image/3.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="/assets/images/product-image/zoom-image/4.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="/assets/images/product-image/zoom-image/5.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>{{ $product->name }}</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">{{$product->price_view(true)}}</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                            </div>
                            <p class="mt-30px">{{ $product->description }}</p>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>SKU:</span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{ $product->sku }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Category: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{ $product->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tags: </span>
                                <ul class="d-flex">
                                    {{-- <li>
                                        <a href="#">Smart Device, </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart"> Add To
                                        Cart</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                            <div class="payment-img">
                                <a href="#"><img src="/assets/images/icons/payment.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal Cart -->
<div class="modal customize-class fade" id="modal-Cart{{$product->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to cart successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="/assets/images/product-image/1.webp" alt="{{$product->name}}">
                    </div>
                    <h2 class="tt-title"><a href="#">{{$product->name}}</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal wishlist -->
<div class="modal customize-class fade" id="modal-Wishlist{{$product->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to Wishlist successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="/assets/images/product-image/1.webp" alt="{{$product->name}}">
                    </div>
                    <h2 class="tt-title"><a href="#">{{$product->name}}</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal compare -->
<div class="modal customize-class fade" id="modal-Compare{{$product->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to compare successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="/assets/images/product-image/1.webp" alt="{{$product->name}}">
                    </div>
                    <h2 class="tt-title"><a href="#">{{$product->name}}</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
