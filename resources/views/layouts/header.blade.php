<?php
  use App\Category;
  $categories = Category::all();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bulletin board</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="{{ asset('template/tooplate_style.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('template/css/ddsmoothmenu.css') }}" />

<script type="text/javascript" src="{{ asset('template/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/ddsmoothmenu.js') }}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="{{ asset('template/css/jquery.dualSlider.0.2.css') }}" />

<script src="{{ asset('template/js/jquery-1.3.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/js/jquery.timers-1.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/js/jquery.dualSlider.0.3.min.js') }}" type="text/javascript"></script>


<script type="text/javascript">

    $(document).ready(function() {

        $("#carousel").dualSlider({
            auto:false,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });

    });


</script>

<link rel="stylesheet" href="{{ asset('template/css/slimbox2.css') }}" type="text/css" media="screen" />
<script type="text/JavaScript" src="{{ asset('template/js/slimbox2.js') }}"></script>

</head>
<body>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="{{ route('home') }}">Bulletin board</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('categories') }}">Categories</a>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('getCategory', ['id' => $category->id]) }}">Category {{ $category->title }} </a></li>
                            @endforeach
                      	</ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a href="{{ route('contact') }}" class="last">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li><a href="{{ route('adverts.create') }}">Add Advert</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </li>

                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('regionsForRegister') }}">Register</a></li>
                    @endauth
                    @endif
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->

        <div id="header_bottom">
        	<div id="tooplate_search">
                <form action="{{ route('adverts.search') }}" method="get">
                  <input type="text" value="{{ old('title') }}" name="title" id="title" placeholder="Search Advert" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" required />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->