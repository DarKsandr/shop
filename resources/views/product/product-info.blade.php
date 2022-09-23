<h2>{{ $product->name }}</h2>
<div class="pricing-meta">
    <ul class="d-flex">
        <li class="new-price">{{ $product->real_price_view }}</li>
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
    <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
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
        <li>{{ $product->tags_view() }}</li>
    </ul>
</div>
<div class="pro-details-quality">
    <div class="cart-plus-minus">
        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
    </div>
    <div class="pro-details-cart">
        <form action="{{route('cart.store')}}" method="post" onsubmit="addCartForm(event)">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="add-cart" type="submit"> Add To Cart</button>
        </form>
    </div>
    <div class="pro-details-compare-wishlist pro-details-wishlist ">
        <a href="{{ route('wishlist') }}"><i class="pe-7s-like"></i></a>
    </div>
    <div class="pro-details-compare-wishlist pro-details-wishlist ">
        <a href="{{ route('compare') }}"><i class="pe-7s-refresh-2"></i></a>
    </div>
</div>