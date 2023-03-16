
@foreach ($data_array as $data_item)
    <option value="{{  $data_item->id}}">{{ $data_item->label }}</option>
@endforeach

