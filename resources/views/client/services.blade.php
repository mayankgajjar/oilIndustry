@extends('layouts.website')
  @section('content')
  <!-- //banner -->
  <div class="banner1">
      <div class="w3layouts_banner1_info">
          <h2>Services</h2>
      </div>
  </div>
  <!-- banner-bottom -->
  <div class="banner-bottom">
      <div class="container">
          <h3 class="w3l_header">What we offer</h3>
          <p class="quia">Oil Industry</p>

          <div class="w3ls_service_grids">
                @foreach($offer as $off)
                    <div class="col-md-3 w3l_service_grid_left">
                        <div class="w3_service_grid_left_grid">
                            <i class="{{$off['icon']}}" aria-hidden="true"></i>
                        </div>
                        <h4>{{$off['title']}}</h4>
                        <p>{{$off['description']}}</p>
                    </div>
                @endforeach
              <div class="clearfix"> </div>
          </div>
      </div>
  </div>
  <!-- //banner-bottom -->
  <!-- stats -->
  <div class="stats">
      <div class="container">
          <div class="col-md-3 w3_stats_grid">
              <h3 id="w3l_stats1" class="odometer">0</h3>
              <p>Years of Experience</p>
          </div>
          <div class="col-md-3 w3_stats_grid">
              <h3 id="w3l_stats2" class="odometer">0</h3>
              <p>Awards Winning</p>
          </div>
          <div class="col-md-3 w3_stats_grid">
              <h3 id="w3l_stats3" class="odometer">0</h3>
              <p>Workers</p>
          </div>
          <div class="col-md-3 w3_stats_grid">
              <h3 id="w3l_stats4" class="odometer">0</h3>
              <p>Companies</p>
          </div>
          <div class="clearfix"> </div>

      </div>
  </div>
  <!-- //stats -->
  <!-- featured-services -->
  <div class="banner-bottom">
      <div class="container"> 
          <h3 class="w3l_header">Our Featured Services</h3>
          <p class="quia">Oil Industry</p>

          <div class="w3ls_service_grids">
                @foreach($fservice as $fs)
                    <div class="col-md-4 w3_agile_services_grid">
                      <div class="agile_services_grid">
                          <div class="hover06 column">
                              <div>
                                  <figure><img src="{{ URL::asset('/featuredservice_images/'.$fs['image']) }}" alt=" " class="img-responsive" /></figure>
                              </div>
                          </div>
                          <div class="agile_services_grid_pos">
                              <i class="{{$fs['icon']}}" aria-hidden="true"></i>
                          </div>
                      </div>
                      <h4>{{$fs['title']}}</h4>
                      <p>{{$fs['description']}}</p>
                  </div>
                @endforeach
              <div class="clearfix"> </div>
          </div>
      </div>
  </div>
  <!-- //featured-services -->
@stop