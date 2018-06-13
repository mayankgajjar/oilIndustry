<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Oil Industry an Industrial</title>
            <!-- custom-website_theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-website_theme -->
    <link href="{{ asset('website_theme/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('website_theme/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('website_theme/css/style3.css') }}" rel="stylesheet" type="text/css"  />
    <link href="{{ asset('website_theme/css/team.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <!-- font-awesome-icons -->
    <link href="{{ asset('website_theme/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
	
<body>
    @php 
        $info = GetContactinfo();
        $about = GetAboutus(); 
        $slieder= GetSlieder();
        $milestone = GetMilestone();
    @endphp
<!-- banner -->
<input type="hidden" name="experience" value="@php echo $milestone['experience'] @endphp" id='experience' />
<input type="hidden" name="awards" value="@php echo $milestone['awards'] @endphp" id='awards' />
<input type="hidden" name="workers" value="@php echo $milestone['workers'] @endphp" id='workers' />
<input type="hidden" name="companies" value="@php echo $milestone['companies'] @endphp" id='companies' />
    <div class="header">
        <!--<div class="w3layouts_header_left">
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Log in</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>
            </ul>
        </div> -->
        <div class="w3layouts_header_right">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i>{{$info['phone']}}</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{$info['email']}}">{{$info['email']}}</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="top_heder_agile_info">
        <div class="w3ls_agile_header_inner">	
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html"><i class="fa fa-tint" aria-hidden="true"></i> OIL INDUSTRY <span>The Real Quality</span> </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--juliet">
                        <ul class="nav navbar-nav">
                            <li class="menu-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="menu-item" ><a href="{{url('seeservices')}}" >Services</a></li>
                            <li class="menu-item"><a href="{{url('seegallery')}}">Gallery</a></li>
                            <li class="menu-item"><a href="{{url('addtestimonial')}}">Testimonials</a></li>
                            
                            <li class="menu-item"><a href="{{url('mailus')}}">Mail Us</a></li>
                        </ul>
                        <div class="agileinfo_social_icons">
                            <ul class="agileits_social_list">
                                <li><a href="{{$about['facebook_link']}}" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$about['twitter_link']}}" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$about['rss_link']}}" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </div>
<!-- //banner -->
@yield('content')

<!-- footer -->
<div class="footer">
    <div class="container">
         
        <div class="col-md-4 agile_footer_grid">
            <h3>About Us</h3>
            <p>{{$about['description']}}</p>
            <ul class="agileits_social_list">
                <li><a href="{{$about['facebook_link']}}" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{$about['twitter_link']}}" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{$about['rss_link']}}" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4 agile_footer_grid">
            <h3>Latest News</h3>
            <ul class="agileits_w3layouts_footer_grid_list">
                @foreach(GetNews() as $news)
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="" data-custom-value='{{$news['id']}}' class="open-news">{{$news['title']}}</a>
                    </li>
                @endforeach
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <a href="#" data-toggle="modal" data-target="#myModal">Nullam sed turpis gravida</a>
                </li> -->
            </ul>
        </div>
        <div class="col-md-4 agile_footer_grid">
            <h3>Contact Info</h3>
            <ul class="w3_address">
                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{$info['address']}}</li>
                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:{{$info['email']}}">{{$info['email']}}</a></li>
                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>{{$info['phone']}}</li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="w3_agileits_footer_grids">
            <div class="col-md-4 wthree_footer_grid_left"></div>
            <div class="col-md-8 wthree_footer_grid_right">
                <h3>Sign up for our Newsletter</h3>
                <form id="form-subscribers">
                    {{csrf_field()}}
                    <input type="email" name="email" placeholder="Enter your email..." required="" id="email">
                    <input type="submit" value="Submit" class="save-subscribers">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agileinfo_copyright">
            <p>© 2017 Oil Industry. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="NewsModel" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div id="news-html"></div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Sign In</h3>	
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Sign In">
                            </div>
                        </form>
                    </div>
                    <div class="login-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Sign Up</h3>	
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Username" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="password" placeholder="Confirm Password" required="">
                            <input type="submit" value="Sign Up">
                        </form>
                    </div>
                    <p><a href="#"> By clicking register, I agree to your terms</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal2 -->	

<!-- //bootstrap-pop-up -->
<!-- js -->
<script src="{{ asset('website_theme/js/jquery-2.1.4.min.js') }}"></script>
<!-- carousal -->
<script src="{{ asset('website_theme/js/slick.js') }}"></script>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.min.js') }}"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint:800,
                    settings: {
                      arrows: true,
                      centerMode: false,
                      slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                      arrows: true,
                      centerMode: false,
                      centerPadding: '40px',
                      slidesToShow: 1
                    }
                }
             ]
        });
    });
</script>
<!-- //carousal -->
<!-- //js -->
<script>
    $(function(){ 

  // parameters
  // image height
  var images_height = '650px';
  var images_url = [];
  var simage =  {!! json_encode($slieder) !!};
    for (var key in simage) {
        if (simage.hasOwnProperty(key)) {
            var url = '{{ url('/slieder_images')}}';
            var images = url+'/'+simage[key].image;
            images_url.push(images);
        }
    }

  var images_count = images_url.length;
  
  // create nodes
  for(var j=0;j<images_count+1;j++){
      $('.banner ul').append('<li></li>')
  }

  // pagination
  for(var j=0;j<images_count;j++){
      if(j==0){
          $('.banner ol').append('<li class="current"></li>')
      }else{
          $('.banner ol').append('<li></li>')
      }
  }

  // convert images into backgrounds
  $('.banner ul li').css('background-image','url('+images_url[0]+')');
  
  $.each(images_url,function(key,value){
      $('.banner ul li').eq(key).css('background-image','url('+value+')');
  });

  $('.banner').css('height',images_height);

  $('.banner ul').css('width',(images_count+1)*100+'%');

  $('.banner ol').css('width',images_count*20+'px');
  $('.banner ol').css('margin-left',-images_count*20*0.5-10+'px');

  var num = 0;

  var window_width = $(window).width();

  $(window).resize(function(){
      window_width = $(window).width();
      $('.banner ul li').css({width:window_width});
      clearInterval(timer);
      nextPlay();
      timer = setInterval(nextPlay,2000);
  });

  $('.banner ul li').width(window_width);

  // pagination dots
  $('.banner ol li').mouseover(function(){
      $(this).addClass('current').siblings().removeClass('current');
      var i = $(this).index();
      //console.log(i);
      $('.banner ul').stop().animate({left:-i*window_width},500);
      num = i;
  });

  // autoplay
  var timer = null;

  function prevPlay(){
      num--;
      if(num<0){
          $('.banner ul').css({left:-window_width*images_count}).stop().animate({left:-window_width*(images_count-1)},500);
          num=images_count-1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count-1){
          $('.banner ol li').eq(images_count-1).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  function nextPlay(){
      num++;
      if(num>images_count){
          $('.banner ul').css({left:0}).stop().animate({left:-window_width},500);
          num=1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count){
          $('.banner ol li').eq(0).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  timer = setInterval(nextPlay,2000);

  // auto pause on mouse enter
  $('.banner').mouseenter(function(){
      clearInterval(timer);
      $('.banner i').fadeIn();
  }).mouseleave(function(){
      timer = setInterval(nextPlay,2000);
      $('.banner i').fadeOut();
  });

  // goto next
  $('.banner .right').click(function(){
      nextPlay();
  });

  // back to previous
  $('.banner .left').click(function(){
      prevPlay();
  });

});
    </script>
<!-- flexisel -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,    		
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems:2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });
    });
</script>
<script src="{{ asset('website_theme/js/jquery.flexisel.js') }}"></script>
<!-- //flexisel -->
<!-- odometer-script -->
<script src="{{ asset('website_theme/js/odometer.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js') }}"></script>
<script></script>
<script>
    window.odometerOptions = {
      format: '(,ddd).dd'
    };
    setTimeout(function(){
            jQuery('#w3l_stats1').html($('#experience').val());
    }, 1000);
</script>
<script>
    window.odometerOptions = {
      format: '(,ddd).dd'
    };
    setTimeout(function(){
            jQuery('#w3l_stats2').html($('#awards').val());
    }, 1000);
</script>
<script>
    window.odometerOptions = {
      format: '(,ddd).dd'
    };
    setTimeout(function(){
            jQuery('#w3l_stats3').html($('#workers').val());
    }, 1000);
</script>
<script>
    window.odometerOptions = {
      format: '(,ddd).dd'
    };
    setTimeout(function(){
            jQuery('#w3l_stats4').html($('#companies').val());
    }, 1000);
</script>
		<!-- //odometer-script -->
<!-- start-smoth-scrolling -->
<script src="{{ asset('website_theme/js/move-top.js') }}"></script>
<script src="{{ asset('website_theme/js/easing.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
    $(".menu-item").click(function(){		
        $(".menu-item").removeClass("active");
        $(this).addClass("active");
    });
    
    $(".save-subscribers").click(function(e){		
        e.preventDefault();
        var formdata = $('#form-subscribers').serialize();
        $.ajax( {
            type: "POST",
            url: "{{ route('subscribers.store') }}",
            data: formdata,
            success: function( response ) {
                if(response == 'Email address is already in use'){
                    swal('error',response);
                } else{
                    $('#email').val('');
                    swal(response);
                }
            }
        });
    });
    
    $(".open-news").click(function(e){		
        e.preventDefault();
        var id = $(this).data("custom-value");
            $.ajax({
                url: 'shownews',
                type: 'POST',
                data: {'newsid' : id,'_token':$('input:hidden[name=_token]').val()},
                success: function(data) {
                    $('#news-html').html(data);
                    $('#NewsModel').modal('show');
                },
            });
    });
    
});
</script>
<!-- start-smoth-scrolling -->
	

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {					
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="{{ asset('website_theme/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>
