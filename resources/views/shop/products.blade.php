<!-- Tab Content Area Start -->
<div class="row">
    <div class="col">
        <div class="tab-content">
            <div class="tab-pane fade @if(!isset($_COOKIE["shop-view-type"]) || $_COOKIE["shop-view-type"] == '#shop-grid')active show @endif" id="shop-grid">
                <div class="row mb-n-30px">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            @include('elements.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade mb-n-30px @if(($_COOKIE["shop-view-type"] ?? '') == '#shop-list')active show @endif" id="shop-list">
                @foreach ($products as $product)
                    <div class="shop-list-wrapper mb-30px">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('product', $product->id) }}" class="image">
                                            <img src="/assets/images/product-image/1.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/images/product-image/1.webp"
                                                alt="Product" />
                                        </a>
                                        <span class="badges">
                                            @include('shop.badges')
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-xl-8">
                                <div class="content-desc-wrap">
                                    <div class="content">
                                        <span class="category"><a
                                                href="#">{{ $product->category->name }}</a></span>
                                        <h5 class="title"><a
                                                href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                        </h5>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="box-inner">
                                        <span class="price">
                                            @include('shop.price')
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Tab Content Area End -->
<!--  Pagination Area Start -->
<input type="hidden" id="currentPage" value="{{ $products->currentPage() }}">
{{-- <div class="mt-5">{{ $products->links() }}</div> --}}
@if ($products->lastPage() > 1)
    <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
        <div class="pages">
            <ul>
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="li" onclick="setPage({{ $i }})"><a
                            class="page-link @if ($i == $products->currentPage()) active @endif"
                            href="javascript:void(0)">{{ $i }}</a></li>
                @endfor
            </ul>
        </div>
    </div>
@endif
<!--  Pagination Area End -->
