@extends('layouts.master')



@section('title')
Dashboard
@endsection


@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Admin Dashboard</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <div class="content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-chart" align="center">
                    <div class="card-header">
                      <h4 class="card-title" >Registered User</h4>
                    </div>
                    <div class="card-body">
                      <div class="chart-area">
                        <h1> {{ $users->total() }}</h1>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card card-chart" align="center">
                    <div class="card-header">
                      <h4 class="card-title">Treatment Amount</h4>
                                      
                    </div>
                    <div class="card-body">
                      <div class="chart-area">
                        <h1 > {{ $treatments->total() }} </h1>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card card-chart" align="center">
                    <div class="card-header">
                      <h4 class="card-title">Enquiries</h4>    
                    </div>
                    <div class="card-body">
                      <div class="chart-area">
                        <h1> {{ $enquiries->total() }} </h1>
                      
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection



@section('scripts')

@endsection