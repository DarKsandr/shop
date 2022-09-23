@foreach ([] as $item)
    <li>
        <a href="{{ route('product', $item->id) }}" class="image"><img src="/assets/images/product-image/1.webp"
                alt="Cart product Image"></a>
        <div class="content">
            <a href="{{ route('product', $item->id) }}" class="title">{{$item->title}}</a>
            <span class="quantity-price">{{$item->count}} x <span class="amount">{{$item->real_price_view}}</span></span>
            <a href="#" class="remove">×</a>
        </div>
    </li>
@endforeach