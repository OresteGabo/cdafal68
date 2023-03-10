<!--
for text, search, url, tel, email, date, month, week, time, datetime-local, number, range, color, et password
-->
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}:</label>
    <select name="{{$name}}" id="{{$name}}" class="form-select" {{$required??''}}>
        <option value="">Choississez</option>
        @include('layouts.selects.options',['data_array'=>$data_array])
    </select>
    <div id="{{$name}}-error-msg" class="invalid-feedback"></div>
</div>
