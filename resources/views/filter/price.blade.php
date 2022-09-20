<!-- Sidebar single item -->
<div class="sidebar-widget">
    <h4 class="sidebar-title">Price Filter</h4>
    <div class="price-filter">
        <div class="price-slider-amount">
            <input type="text" id="amount" class="p-0 h-auto lh-1" placeholder="Add Your Price" />
            <input type="hidden" name="search[price:min]" id="price_min"
                value="{{ request()->search['price:min'] ?? $price_filter->min }}">
            <input type="hidden" name="search[price:max]" id="price_max"
                value="{{ request()->search['price:max'] ?? $price_filter->max }}">
        </div>
        <div id="slider-range" data-min="{{ $price_filter->min }}" data-max="{{ $price_filter->max }}"></div>
    </div>
</div>