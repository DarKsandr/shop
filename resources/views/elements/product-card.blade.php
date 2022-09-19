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
</div>

