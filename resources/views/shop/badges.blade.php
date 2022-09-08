@if ($product->discount < 0)
    <span class="sale">{{ $product->discount_view() }}</span>
@endif
@if ($product->new)
    <span class="new">New</span>
@endif
