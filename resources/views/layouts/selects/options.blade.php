
@foreach ($data_array as $data_item)
    <option value="{{  $data_item->id}}">
        @if(isset($data_item->cp))
            {{ $data_item->cp }} - {{ $data_item->label }}
        @else
            {{ $data_item->label }}
        @endif
    </option>
@endforeach

