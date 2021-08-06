@extends('adminPanel.main')
@section('content')

<div class="row">
    <div class="col-sm-9">
    <h1>{{$title}}</h1>
    </div>
    <div class="col-sm-3">
    <a href="#addme">
    <button class="btn btn-success">ADD {{$title}}</button>
    </a>
    </div>
</div>

<!--SUCCESS/FAILURE MESSAGES-->
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif


   
  <br>
<!--SEARCH ON FORM-->
<input id="myInput" type="text" class="form-control" placeholder="SEARCH RECORDS FROM TABLE" style="height:50px; font-weight:bold;">
<!--END-->

<!--LISTING ALL ENTRIES-->
<div class="table-responsive">    
<table class="table table-striped">
<thead>
     <tr>
         @foreach ($headings as $heading)
          <th scope="col">{{$heading}}</th>          
         @endforeach
         <!--ACTIONS-->
        <th scope="col">Actions</th>     
    </tr>
</thead>
      
<tbody id="myTable">
  <!--for extracting values in relation ship-->
    @foreach ($values as $value)
    <tr>
       @foreach ($headings as $key=>$paired_value)
       <?php $va = $value->$key; ?>
    
    <!--for extracting values in relation ship--> 
    <td >{{$va}}</td>
       @endforeach
       
       <!--actions-->
       <td>   
           <!--It wil not delete any entry id $disable is set-->
           @if(!isset($disable))
              <!--DELETE THE ENTRY-->
              <form action="{{ $url.'/'.$value->id }}" method="POST" onsubmit="confirm('Are you sure, You want to delete?')">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></button>
              </form>
              <!--END-->
          @endif

              <!--EDIT THE ENTRY-->
               <a href="{{$url.'/'.$value->id.'/edit'}}">
                <button class="btn btn-warning btn-circle "><i class="fas fa-pen"></i></button>
              </a>    
                <!--END-->
      </td>
  
  
   </tr>
   @endforeach  
</tbody>
</table>
<!--PAGINATIONS-->
{{$values->links()}}
<!--PAGINATIONS END-->

</div>

 <!--ADDING ENTRY FORM-->
 <hr class="sidebar-divider"> 
 <div class="jumbotron" id="addme">
<h2>ADD {{$title}}</h2>
<form action="{{$url}}" method="POST">
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

 <!---SCRIPTS--->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
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