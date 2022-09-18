<!-- Tab Content Area Start -->
<div class="row">
    <div class="col">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="shop-grid">
                <div class="row mb-n-30px">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            @include('elements.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade mb-n-30px" id="shop-list">
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
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                    class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
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
<input type="hidden" id="currentPage" value="{{$products->currentPage()}}">
{{-- <div class="mt-5">{{ $products->links() }}</div> --}}
<div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
    <div class="pages">
        <ul>
            <li class="li" onclick="setPage(1)"><a class="page-link" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a>
            </li>
            @for ($i = 1; $i <= $products->lastPage(); $i++)
                <li class="li" onclick="setPage({{$i}})"><a class="page-link @if($i == $products->currentPage()) active @endif" href="javascript:void(0)">{{$i}}</a></li>
            @endfor
            <li class="li" onclick="setPage({{$products->lastPage()}})"><a class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul>
    </div>
</div>
<!--  Pagination Area End -->