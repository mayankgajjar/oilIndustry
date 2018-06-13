@extends('layouts.website')
  @section('content')
<!-- banner -->
<div class="banner-silder">
    <div class="banner">
        <ul></ul>
        <ol></ol>
        <i class="left"></i><i class="right"></i>
        <div class="banner_wthree_agile_info">
            <section class="rw-wrapper">
                <div class="rw-sentence">
                    <span>The Finest Quality </span>
                    <br />
                    <span>of Oil And</span>
                    <div class="rw-words rw-words-1">
                        <span></span>
                        <span>Gas Resources</span>
                        <span>Fuel</span>
                        <span>Gas Resources</span>
                        <span>Gas Flaring</span>

                    </div>
                </div>
            </section>
            <div class="wthree_more">
                <a href="single.html" data-toggle="modal" data-target="#myModal" class="button--wayra button--border-thick button--text-upper button--size-s">Learn More</a>
            </div>
            <div class="social_list_w3ls">
                <a href="#" class="w3_agile_facebook_agile"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a href="#" class="agile_twitter_agile"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                <a href="#" class="w3_agile_dribble_agile"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
                <a href="#" class="w3_agile_vimeo_agile"><span class="fa fa-vimeo" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->


<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">

        <h2 class="w3l_header">Our Introduction</h2>
        <p class="quia">Who we are</p>
        <p class="agile_para">{{$introduction['description']}}</p>

        <div class="col-md-2 w3_agileits_banner_bottom_grid">
            <h5>Oil</h5>
        </div>
        <div class="col-md-10 w3_agileits_banner_bottom_grid_left">
            <ul id="flexiselDemo1">	
                @php 
                $image = explode(",",$introduction['image']); 
                $image_des = explode(",",$introduction['image_description']);
                @endphp 
                @foreach($image as $key=>$img)
                    <li>
                        <div class="agileits_w3layouts_banner_bottom_grid">
                            <div class="wthree_banner_bottom_grid1">
                                <img src="{{ URL::asset('/introduction_images/'.$img) }}" alt=" " class="img-responsive" />
                                <div class="agileinfo_banner_bottom_grid1_pos">
                                    <h3>The Oil</h3>
                                    <p>Real Quality</p>
                                </div>
                            </div>
                            <h4><a href="">{{$image_des[$key]}}</a></h4>
                        </div>
                    </li>
                @endforeach
              
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- Tooltip -->
<div class="tooltip-content">
    <div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Oil Industry</h4>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('website_theme/images/g4.jpg') }}" alt="">
                    <h5>Curabitur quis egestas.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- //Tooltip -->


<!-- banner-bottom -->
<div class="services">
    <div class="container">
        <h3 class="w3l_header two">Services We Do</h3>
        <p class="quia">What We Do</p>
        <div class="wthree_services_bottom_left w3ls_banner_bottom_grids">
            <div class="wthree_services_bottom_left_grid">
                @foreach($services as $ser)
                    <div class="col-md-4 w3_agileits_services_bottom_l_grid">
                        <div class="agile_services_bottom_l_grid1">
                            <img src="{{ URL::asset('/service_images/'.$ser['image']) }}" alt=" " class="img-responsive" />
                            <div class="w3_service_bottom_grid_pos">
                                <h3>Oil Industry</h3>
                            </div>
                        </div>
                        <div class="serve_info_agile two">
                            <h4>{{$ser['title']}}</h4>
                            <p>{{$ser['service_status']}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
</div>
<!--//services -->
<!--/team-->
<div class="team">
    <div class="container">
        <h3 class="w3l_header">Meet Our Team</h3>
        <p class="quia">Who We Are</p>
        <div class="w3ls_banner_bottom_grids">
            <!--<div class="col-md-3 agileits-team-grid">
                <div class="team-info">
                    <img src="{{ asset('website_theme/images/t1.jpg') }}" alt="">
                    <div class="team-caption"> 
                        <h4>Peter Parker</h4>
                        <p>Security</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agileits-team-grid">
                <div class="team-info">
                    <img src="{{ asset('website_theme/images/t4.jpg') }}" alt="">
                    <div class="team-caption"> 
                        <h4>Steven Wilson</h4>
                        <p>Worker</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agileits-team-grid">
                <div class="team-info">
                    <img src="{{ asset('website_theme/images/t2.jpg') }}" alt="">
                    <div class="team-caption"> 
                        <h4>Kate Winslet</h4>
                        <p>Supervisor</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agileits-team-grid">
                <div class="team-info">
                    <img src="{{ asset('website_theme/images/t3.jpg') }}" alt="">
                    <div class="team-caption"> 
                        <h4>Justo Congue</h4>
                        <p>Worker</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            @foreach($teams as $team)
                <div class="col-md-3 agileits-team-grid">
                <div class="team-info">
                    <img src="{{ URL::asset('/team_images/'.$team['emp_photo']) }}" alt="" >
                    <div class="team-caption"> 
                        <h4>{{$team['emp_name']}}</h4>
                        <p>{{$team['designations_name']}}</p>
                        <ul>
                            <li><a href="{{$team['emp_facebook_link']}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$team['emp_twitter_link']}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$team['emp_rss_link']}}"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!--//team-->
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
<!-- projects -->
<div class="projects">
    <div class="container">
        <h3 class="w3l_header">Latest Works</h3>
        <p class="quia">View our Works</p>
        <div class="w3ls_banner_bottom_grids">
            <div class="col-md-8 projects-agileits-left">
                <div class="w3_agile_projects_grid">
                    <div class="w3layouts_projects_grid projects1">
                        <div class="w3layouts_projects_grid_pos">
                            <div class="wthree_text">
                                <h6>Industry</h6>
                            </div>
                        </div>
                    </div>

                    <div class="projects1-info-w3ls">
                        <h6>Lorem ipsum dolor</h6>
                        <p>Donec semper rutrum ipsum et bibendum.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_agile_projects_grid">
                    <div class="w3layouts_projects_grid projects2">
                        <div class="w3layouts_projects_grid_pos">
                            <div class="wthree_text">
                                <h6>Industry</h6>
                            </div>
                        </div>
                    </div>
                    <div class="projects2-info-w3ls">
                        <h6>Consectetur adipiscing</h6>
                        <p>Donec semper rutrum ipsum et bibendum.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 projects-agileits-right">
                <div class="w3_agile_projects_grid">
                    <div class="w3layouts_projects_grid projects3">
                        <div class="w3layouts_projects_grid_pos">
                            <div class="wthree_text">
                                <h6>Industry</h6>
                            </div>
                        </div>
                    </div>
                    <div class="projects3-info-w3ls">
                        <h6>Lorem ipsum dolor</h6>
                        <p>Donec semper rutrum ipsum et bibendum.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //projects -->
<!-- testimonials -->
<div class="testimonials"> 
    <div class="container">
        <h3 class="w3l_header two">Testimonials</h3>
        <p class="quia">Our Clients words </p>

        <div class="w3ls_testimonials_grids">
            <section class="center slider">
                @foreach($testimonials as $test)
                    <div class="agileits_testimonial_grid">
                        <div class="w3l_testimonial_grid">
                            <p>{{$test['description']}}</p>
                            <h4>{{$test['name']}}</h4>
                            <h5>{{$test['designations_name']}}</h5>
                            <div class="w3l_testimonial_grid_pos">
                                <img src="{{ URL::asset('/testimonial_images/'.$test['image']) }}" alt=" " class="img-responsive" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</div>
<!-- //testimonials -->
@stop