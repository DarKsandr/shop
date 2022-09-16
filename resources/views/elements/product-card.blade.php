<!-- Single Prodect -->
<div class="product">
    <span class="badges">
        @include('shop.badges')
    </span>
    <div class="thumb">
        <a href="{{ route('product', $product->id) }}" class="image">
            <img src="/assets/images/product-image/1.webp" alt="Product" />
            <img class="hover-image" src="/assets/images/product-image/1.webp" alt="Product" />
        </a>
    </div>
    <div class="content">
        <span class="category"><a href="#">{{ $product->category->name }}</a></span>
        <h5 class="title" data-bs-toggle="tooltip" title="{{$product->name}}"><a href="{{ route('product', $product->id) }}">{{ Str::limit($product->name, 25) }}
            </a>
        </h5>
        <span class="price">
            @include('shop.price')
        </span>
    </div>
    <div class="actions">
        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
            data-bs-target="#modal-Cart{{$product->id}}"><i class="pe-7s-shopbag"></i></button>
        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
            data-bs-target="#modal-Wishlist{{$product->id}}"><i class="pe-7s-like"></i></button>
        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal"
            data-bs-target="#quickViewModal{{$product->id}}"><i class="pe-7s-look"></i></button>
        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#modal-Compare{{$product->id}}"><i
                class="pe-7s-refresh-2"></i></button>
    </div>
</div>

@section('modal')
    @parent
    @include('product.modal', ["product" => $product])
@endsection

