@extends('adminPanel.main')
@section('content')
<br>
<a href="{{url()->previous()}}">
<button class="btn btn-warning">GO BACK</button>
</a>
<br><br>
<h1>EDIT {{$title}}</h1>
<div class="card-body">

<form action="{{$url}}/{{$orient->id}}" method="{{$method}}">
@foreach ($data as $key => $value) 
<?php $aslam = $value['naming']; ?>
    <div class='form-group'>
    <label>{{$value['name']}}</label>

    @if($value['type'] == "select")
        <select class='form-control select_box_custom' {!! $value['attrib']!!}>
        @foreach ($value['data'] as $k2 => $dd) 
            <option value='{{$k2}}' {{is_selected($k2, $orient->$aslam)}}>{{$dd}}</option>
        @endforeach
        </select>
    @else
        <input class='form-control' type="{{$value['type']}}" {!! $value['attrib'] !!} value="{{$orient->$aslam}}">
    @endif

    </div>
@endforeach
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT">
<button class="btn btn-primary"> Update</button>

</form>
</div>

@endsection