@extends('adminPanel.main')
@section('content')


<html>

  <body>
<h3><b>WELCOME TO ADMIN PANEL !</b></h3>
<br>
<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              <h5><b>Total Franchises Added</b></h5>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
               <h2><b>{{App\Franchise::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>
      {{-- <div style="text-align:center;padding-top:0px;"  class="jumbotron" >
        @foreach ($user_arr as $key=>$value)
        <h6><b>{{$key}}:  {{$value}}</b></h6>
        @endforeach
      </div> --}}
    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
            <h5><b>Total Career's Added</b></h5>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <h2><b>{{App\Career::count()}}</b></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
            <h5><b>Total Downloads Added</b></h5>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\Download::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
            <h5><b>Total News Added</b></h5>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\Newsfeed::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-xl-12 col-md-12 mb-12">
    {{-- <h4>FOR ALL EDUCATION PACKAGES</h4> --}}
  </div>
  <br><br>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              <h6><b>Total Contact Us Entries</b> </h6>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\Contact::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              <h6><b>Total Orders Entries</b> </h6>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\Order::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              <h6><b>Total Faqs Entries</b> </h6>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\Faq::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              <h6><b>Total Get Franchise Entries</b> </h6>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>{{App\GetFrenchise::count()}}</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<!--INFO END-->

@endsection

