@extends('adminPanel.main')
@section('content')
<div class="row">
    <div class="col-sm-9">
      <h1>FEED BACK FORM</h1>
    </div>

  </div>
  <hr>
<!--SUCCESS/FAILURE MESSAGES-->
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

  <!--url-->
  <div class="alert alert-warning" role="alert"> 
<h5>You can build the questions of feedback form here. Just add label and question and you can get the updated 
  form for your feedback ,while last form will get override.
</h5>
  </div>

  <div class="row">
  
    <div class="col-sm-11">
    <br>
    <form action="{{url('admin/form')}}" method="POST">
        @csrf
    <button type="submit" class="btn btn-success btn-block">SAVE NEW QUESTIONS</button>
    <hr>
    <button class="btn btn-primary" id="add_field_button">Add More Question</button>
	<div class="url_field">
    <div class="row">
     <input type="text" class="form-control col-sm-3" placeholder="Label" name="label[]" required>
     <br>
     <input type="text" class="form-control col-sm-6" placeholder="Question" name="question[]" required>
      </div>
	</div>  
      <br>
 
      
    </div>

    </form>
   </div> 

<!---->
  
@section('scripts')
    

<!--add more links -->
<script>
    $(document).ready(function() {
	var max_fields      = 15; //maximum input boxes allowed
	var wrapper   		= $(".url_field"); //Fields wrapper
	var add_button      = $("#add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="row"> <input type="text" class="form-control col-sm-3" placeholder="Label" name="label[]" required><input type="text" class="form-control col-sm-6" placeholder="Question" name="question[]" required><a href="#" class="remove_field btn btn-danger">X</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
    </script> 
<!--end-->    
@endsection
@endsection
