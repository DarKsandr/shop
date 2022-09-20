<!-- Sidebar single item -->
<div class="sidebar-widget">
    <div class="form-check">
        <input class="form-check-input new-filter" type="checkbox" id="is_new" value="1" name="search[new]"
            @if ((request()->search['new'] ?? 0) == 1) checked @endif>
        <label class="form-check-label w-100" for="is_new">
            New
        </label>
    </div>
</div>
