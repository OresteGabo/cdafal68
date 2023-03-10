@foreach ($data_array as $data_item)
    <option value="{{  $data_item['value']?? $data_item['label']}}">{{ $data_item['label'] }}</option>
@endforeach
