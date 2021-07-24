@extends('adminPanel.main')
@section('content')


<html>
  <head>
 <style>
      .highcharts-figure, .highcharts-data-table table {
      min-width: 320px; 
      max-width: 660px;
      margin: 1em auto;
      }
      .highcharts-data-table table {
      font-family: Verdana, sans-serif;
      border-collapse: collapse;
      border: 1px solid #EBEBEB;
      margin: 10px auto;
      text-align: center;
      width: 100%;
      max-width: 500px;
      }
      .highcharts-data-table caption {
      padding: 1em 0;
      font-size: 1.2em;
      color: #555;
      }
      .highcharts-data-table th {
      font-weight: 600;
      padding: 0.5em;
      }
      .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
      padding: 0.5em;
      }
      .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
      }
      .highcharts-data-table tr:hover {
      background: #f1f7ff;
      }
      .table{
      border-width:20px;

      }
    </style>
  </head>
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
              <h4><b>TOTAL FRANCHISES</b></h4>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
               <h2><b>5</b></h2> 
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
              <h4><b>TOTAL FAQ'S ENTRIES</b></h4>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <h2><b>10</b></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 =
    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
              <h4><b>TOTAL CAREER'S ENTRIES</b></h4>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>10</b></h2>
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
              <h4><b>TOTAL NEWS ADDED</b></h4>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>10</b></h2>
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
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              <h4><b>TOTAL ORDER NOW REQUEST'S</b> </h4>
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h2><b>50</b></h2>
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
              <h4><b>TOTAL DOWNLOAD'S ENTRIES</b></h4>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <h2><b>50</b></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--INFO END-->

@endsection

