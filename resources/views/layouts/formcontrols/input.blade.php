
@if($type=='checkbox')
    <label for="{{$name}}">{{$label}}:</label>
    <div class="checkbox-container">
        <input type="checkbox" id="{{$name}}" name="{{$name}}">
        <!--<span class="checkmark"></span>-->
    </div>
@else
    <div class="mb-3">
        <label for="{{$name}}" class="form-label">{{$label}}:</label>
        <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{$required??''}}>
    </div>
@endif
