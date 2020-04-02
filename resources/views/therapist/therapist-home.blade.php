@extends('layouts.therapistnavbar')



@section('title')
    Dashboard 
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Therapist Dashboard</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <div class="content">
                      <div class="row">
                    <div class="col-lg-4">
                      <div class="card card-chart">
                        
                        <div class="card-body">
                          <div class="chart-area center">
                            @if(Auth::user()->status == '0')
                            
                            <p style="color:red" align="center">(Nothing to show)</p> <br>
                            <p style="color:red" align="center">-Please Update Your Profile-</p>

                            @else 
                            <div class="card-header">
                              <h4 class="card-title" align="center">Customer Booking</h4>
                            </div>
                            <h1 align="center"> {{ $bookings->total() }}</h1>
                          
                            @endif
                          
                          </div>
                          
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card card-chart">
                        
                        <div class="card-body">
                          <div class="chart-area center">
                            <div class="card-header">
                              <h4 class="card-title" align="center">Status</h4>
                            </div><br>
                            @if(Auth::user()->status == '0')
                            
                            <p align="center">New Therapist</p> <br>
                         @else 
                           <p align="center">Existing Therapist</p> <br>
                          
                          @endif
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
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                
              </div>
           
            </div>
          </div>
        </div>

@endsection



@section('scripts')

@endsection