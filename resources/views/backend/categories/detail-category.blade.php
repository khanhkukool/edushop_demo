<label>Chi tiết thể loại</label>
<select name="detail_category" id="detail-category">
    @foreach($detail_categories AS $detail_category)
        <option value="{{ $detail_category->id }}">{{ $detail_category->name }}</option>
    @endforeach
</select>
