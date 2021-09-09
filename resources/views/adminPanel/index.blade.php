@extends('adminPanel.main')
@section('content')

<div class="row">
  <div class="col-sm-9">
    <h1>{{$title}}</h1>
  </div>
  @if(!isset($add))
  <div class="col-sm-3">
    <a href="#addme">
      <button class="btn btn-success">ADD {{$title}}</button>
    </a>
  </div>
  @endif
</div>

<!--SUCCESS/FAILURE MESSAGES-->
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif





<!--LISTING ALL ENTRIES-->
<div class="table-responsive">
<table id="dt" class="table table-striped table-bordered second" style="width:100%">
    <thead>
      <tr>
        @foreach ($headings as $heading)
        <th scope="col">{{$heading}}</th>
        @endforeach
        <!--ACTIONS-->

        @if(isset($jsonparam))
        @foreach ($values as $hh)
        <?php $details = json_decode($hh->details_json, true);  ?>
        @foreach ($details as $key=>$val)
        <th scope="col">{{$key}}</th>
        @endforeach
        @endforeach
        @endif

        <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody id="myTable">
      <!--for extracting values in relation ship-->
      @foreach ($values as $value)
      <tr>
        @foreach ($headings as $key=>$paired_value)
     <td>
          @if($key=='created_at')
          {{date_frmt($value->created_at)}}
          @elseif($key=='updated_at')
          {{date_frmt($value->updated_at)}}
          @elseif($key=='image')
          <img src="{{asset('storage/'.strtolower($title).'/'.$value->image)}}" width="100px" height="100px">
          @elseif($key=='file')
          <a href="{{asset('storage/downloads/'.$value->file)}}" download>Download file..</a>
          @elseif($key=='resume')
          <a href="{{asset('storage/applicants/'.$value->resume)}}" download>Download Resume..</a>
          @else
         {{$value->$key}}
          @endif
     </td>
        @endforeach

        @if(isset($jsonparam))
        @foreach ($values as $hh)
        <?php $details = json_decode($hh->details_json, true);  ?>
        @foreach ($details as $key=>$val)
        <td>{{$val}}</th>
        @endforeach
        @endforeach
        @endif
        <!--actions-->
        <td>
          <!--It wil not delete any entry id $disable is set-->
          @if(!isset($del))
          <!--DELETE THE ENTRY-->
          <form action="{{ $url.'/'.$value->id }}" method="POST" onsubmit="return confirm('Are you sure, You want to delete?')">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></button>
          </form>
          <!--END-->
          @endif

          @if(!isset($edit))
          <!--EDIT THE ENTRY-->
          <a href="{{$url.'/'.$value->id.'/edit'}}">
            <button class="btn btn-warning btn-circle "><i class="fas fa-pen"></i></button>
          </a>
          <!--END-->
          @endif

          @if($url=='careers')
           <a href="{{url('/admin/applicants?job_id='.$value->id)}}" class="btn btn-info">view applications <span class="badge badge-light">{{count(App\Applicant::where('carrer_id',$value->id)->get())}}</span></a>
          @endif
        </td>


      </tr>
      @endforeach
    </tbody>
  </table>
  <!--PAGINATIONS-->

  <!--PAGINATIONS END-->

</div>

@if(isset($data))
<!--ADDING ENTRY FORM-->
<hr class="sidebar-divider">
<div class="jumbotron" id="addme">
  <h2>ADD {{$title}}</h2>
  <form action="{{$url}}" method="POST" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">

      @foreach ($data as $key => $value)
      <div class='form-group'>
        <label>{{$value['name']}}</label>
        @if($value['type'] == "select")
        <select class='form-control select_box_custom' {!! $value['attrib']!!}>
          @foreach ($value['data'] as $k2 => $dd)
          <option value='{{$k2}}'>{{$dd}}</option>
          @endforeach
        </select>
        @else
        <input class='form-control' type="{{$value['type']}}" {!! $value['attrib'] !!}>
        @endif
      </div>
      @endforeach

    </div>

    <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
  </form>

</div>

<!--END-->
@endif

<!---SCRIPTS--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<!--END SCRIPTS-->

@endsection
