@if ($product->discount < 0)
    <span class="old">{{ $product->price_view }}</span>
@endif
<span class="new">{{ $product->real_price_view }}</span>
