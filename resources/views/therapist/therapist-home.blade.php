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
                    <div class="col-lg-4">
                      <div class="card card-chart">
                        <div class="card-header">
                          <h4 class="card-title">Bookings Pending</h4>
                        </div>
                        <div class="card-body">
                          <div class="chart-area center">
                            <h1> {{ $bookings->total() }}</h1>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
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