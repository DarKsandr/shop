<!-- Sidebar single item -->
<div class="sidebar-widget">
    <h4 class="sidebar-title">Categories</h4>
    <div class="sidebar-widget-category">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <label class="w-100">
                        <input type="checkbox" name="search[category][]" value="{{ $category->id }}"
                            class="label-to-bold-if-checked d-none category-filter category"
                            @if (in_array($category->id, request()->search['category'] ?? [])) checked @endif>
                        <span>{{ $category->name }}
                            ({{ $category->products()->count() }})
                        </span>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
</div>
