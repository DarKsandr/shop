<!-- Modal -->
<div class="modal modal-2 fade" id="quickViewModal{{ $product->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                        class="pe-7s-close"></i></button>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        @include('product.product-image')
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            @include('product.product-info')
                            @include('elements.banks-card')
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
