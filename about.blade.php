<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://snipback.com/" />
    <meta name="google-site-verification" content="MbcZOx042pMY1IZ7IIoP-h7aprySe5SidwVvkJykAfc" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> --}}
    <meta name="keywords" content="game, sports, event, Powerful Multi-Camera Platform, Live Clipping & Tagging, snipback">
    <meta name="description" content="Watch the game, not your screen! Use our game remote to bookmark after any play and we’ll generate a 10 second clip (8 seconds in the past, 2 seconds in the future). You can also add audio notes and color tags to all your bookmarks. View game footage and bookmarks easily after the game, as well as share highlight reels (based on your bookmarks) and individual clips easily">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Video for Teams, Coaches, Athletes | Snipback</title>
    {{-- <title>{{$title}}</title> --}}
    <?php $time=time(); ?>
    @php
    $og_thumbnail   =  (isset($og_thumbnail) && !empty($og_thumbnail)) ? $og_thumbnail : URL::to('/').'/images/logo.png';
    $og_url         =  (isset($og_url) && !empty($og_url)) ? $og_url : url()->full();
    $og_title       =  (isset($og_title) && !empty($og_title)) ? $og_title : 'SNIPBACK AI';
    $og_description =  (isset($og_description) && !empty($og_description)) ? $og_description : 'Watch the game, not your screen! Use our game remote to bookmark after any play and we’ll generate a 10 second clip (8 seconds in the past, 2 seconds in the future). You can also add audio notes and color tags to all your bookmarks. View game footage and bookmarks easily after the game, as well as share highlight reels (based on your bookmarks) and individual clips easily';
    @endphp
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="application-name" content="{{$og_title}}"/>
    <meta name="apple-mobile-web-app-title" content="{{$og_title}}"/>
    <meta property="fb:app_id" content="1245824489356485"/>
    <meta property="og:title" content="{{$og_title}}"/>
    <meta name="description" content="Snipback: Capture, save, and share real-time moments effortlessly with our innovative live video recording app.">
    <meta property="og:description" content="{{$og_description}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{$og_url}}">
    <meta property="og:image" content="{{$og_thumbnail}}"/>
    <!-- <meta property="og:image:type" content="image/png" > -->
    <meta property="og:image:width" content="1800" >
    <meta property="og:image:height" content="550" >

    <meta name="twitter:title" content="{{$og_title}}">
    <meta name="twitter:image" content="{{$og_thumbnail}}">
    <meta name="twitter:description" content="{{$og_description}}">

    <!-- fav icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/home/favicon.png') }}">
    <!-- CSS -->
       <!-- flickity link from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/home/main.min.css') }}?v={{$time}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/vendor/boxicons/css/boxicons.min.css"> --}}
    
    {{-- <link rel="stylesheet" href="<?php echo URL::to('/');?>/css/jquery-ui.min.css"> --}}
    {{-- <link rel="stylesheet"  rel="dns-prefetch"  href="<?php echo URL::to('/');?>/css/font-awesome.min.css"> --}}

    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/style.min.css?v={{$time}}"> --}}
    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/custom.min.css?v={{$time}}"> --}}
    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/vidshare.min.css?v={{$time}}"> --}}
    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/responsive.min.css?v={{$time}}"> --}}

    {{-- <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/styles.css?v={{$time}}"> --}}

    <link href="<?php echo URL::to('/'); ?>/css/fonts.googleapis.min.css" rel="stylesheet">

    <!-- slider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet"/>

    <style>
        container.app.parent.docked.opened .chatstack-app.parent, #chatstack-container.app.parent.floating.opened .chatstack-app.parent {
            right: 52px;
            bottom: 82px;
            height: 79vh !important;
        }

      
             .main-carousel {
            width: 100%;
            height: auto;
            }
            .carousel-cell {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .flickity-page-dots .dot.is-selected {
                opacity: 1;
                background: #E1261C;
            }
            .testimonial_img_wrap{
                border: 1px solid #707070;
                border-radius: 20px;
                padding: 1.75rem 1.75rem;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                height: 180px;

            }
            .customer_name {
                font-size: 18px;
                color: #242526;
                font-weight: 500;
                height: 64px;
                padding-top: 12px;
            }
            .happy_customer h2{
                font-size: 20px;
                font-weight: bold;
                color: #000000;
                text-align: center;
                margin-bottom: 15px;
            }
            .happy_customer h3{
                font-size: 30px;
                font-weight: 500;
                color: #000000;
                text-align: center;
                margin-bottom: 20px;

            }
            .happy_customer h4{
                margin-bottom: 93px;
            }
            
    @media (min-width: 300px) {
        .testimonial_img_wrap{
                height: auto;
                padding: 0.75rem 0.75rem;

            }
            .testimonial_img_wrap_custom .testimonial_img_wrap{
                height: 146px;
                padding: 0.75rem 0.75rem;

            }
            .customer_name {
                font-size: 10px;
            }
    }

    @media (min-width: 576px) {
        .testimonial_img_wrap{
                height: 160px;

            }
            .customer_name {
                font-size: 14px;
            }
    }
    @media (min-width: 768px) {
        .testimonial_img_wrap{
                height: 103px;

            }
            .customer_name {
                font-size: 14px;
            }
    }
    @media (min-width: 992px) {
        .testimonial_img_wrap{
                height: 137px;
            

            }
            .customer_name {
                font-size: 16px;
            }
    }
    @media (min-width: 1200px) {
        .testimonial_img_wrap{
                height: 170px;

            }
    }

    </style>

    
    <!-- aws upload -->
    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.1340.0.min.js"></script>
    
    @if (env('APP_ENV') =='uat')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E7WZ3MWW7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-2E7WZ3MWW7');
        </script>

        <!-- Google Tag Manager -->
        <script>!function(e,t,a,r,g){e[r]=e[r]||[],e[r].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var n=t.getElementsByTagName(a)[0],s=t.createElement(a);s.async=!0,s.src="https://www.googletagmanager.com/gtm.js?id="+g+("dataLayer"!=r?"&l="+r:""),n.parentNode.insertBefore(s,n)}(window,document,"script","dataLayer","GTM-PVK3QFQL");</script>
        <!-- End Google Tag Manager -->
    @endif
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "WebSite",
          "name": "snipback",
          "url": "https://snipback.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
    </script>


    <!-- START chatstack.com Live Chat HTML Code --
    <script type="text/javascript">
        var Chatstack = { server: 'sn-lv.snipback.com' };
        (function(d, undefined) {
            // JavaScript
            Chatstack.e = []; Chatstack.ready = function (c) { Chatstack.e.push(c); }
            var b = d.createElement('script'); b.type = 'text/javascript'; b.async = true;
            b.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + Chatstack.server + '/livehelp/scripts/js.min.js';
            var s = d.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(b, s);
        })(document);
    </script>
    !-- END chatstack.com Live Chat HTML Code -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVK3QFQL"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @php $user_id = Session::get('user_id'); @endphp

    @php
    $url = url('');
    // $href = "https://www.snipback.com/";
    $href = env('APP_URL');
    $parent_org_ids = [];
    @endphp

    <div class="page-wrapper" data-scroll-container>

        <!-- loader -->
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>


        <!-- Navbar -->
        <header id="navbar">
        <div class="header-wrap-inner">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{env("APP_URL")}}">
                        <img src="{{ asset('/assets/images/home/logo-large.png') }}" alt="snipback-logo" id="light-logo"  class="logo logo1">
                        <img src="{{ asset('/assets/images/home/logo-dark.png') }}" alt="snipback-logo" id="dark-logo" class="logo logo2">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#main-sidebar" aria-controls="mainSidebar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="menu_link nav-link @if(Route::current()->getName()=='about'|| Route::current()->getName()=='root') active @endif" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/film" class="menu_link nav-link @if(Route::current()->getName()=='home' || Route::current()->getName()=='games' || Route::current()->getName()=='moreFilm') active @endif">Film</a>
                            </li>
                            @php
                                $oid=Session::get('organizationId');
                                $hid=Session::get('home_id');
                                $org_role_id    = Session::get('org_role_id');
                            @endphp
                            @if(Session::get('user_id'))
                            <li class="nav-item" <?= ($org_role_id == 2 || $org_role_id == 5) ? 'style="display:none;"' : ''?>>
                                <a href="/listCustomTags" id="tags_page" class="menu_link nav-link @if(Route::current()->getName()=='customtags') active @endif">Tags</a>
                            </li>
                            <li class="nav-item" <?= ($org_role_id == 2 || $org_role_id == 5) ? 'style="display:none;"' : ''?>>
                                <a href="/listSnipCollection" id="collections_page" class="menu_link nav-link @if(Route::current()->getName()=='snipCollectionList') active @endif">Snip Collections</a>
                            </li>
                            <li class="nav-item" <?= (!isRecruiter()) ? 'style="display:none;"' : ''?> id="recruit_page">
                                <a href="/recruit" id="recruit_page_block" class="menu_link nav-link @if(Route::current()->getName()=='recruit') active @endif">Recruit</a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href="/pricing" class="menu_link nav-link @if(Route::current()->getName()=='pricing') active @endif">Pricing</a>
                            </li>

                            {{-- <li class="li-custom"><a href="/" class="menu_link nav-link-custom @if(Route::current()->getName()=='about'|| Route::current()->getName()=='root') active-custom @endif" aria-current="page">Home</a></li> --}}
                            {{-- <li class="li-custom"><a href="/film"  class="menu_link nav-link-custom @if(Route::current()->getName()=='home' || Route::current()->getName()=='games' || Route::current()->getName()=='moreFilm') active-custom @endif">Film</a></li> --}}
                        </ul>
                        <ul class="buttons profileSec">
                            @if(!empty(Session::get('user_id')))
                            @php
                                $user_avatar = '';
                                $user_avatar = Session::get('user_avatar');
                                $find_letter = explode(' ', $data_dropdown['user_detail']['name']);
                                $first_character = substr($find_letter[0], 0, 1);
                                @$second_character = substr($find_letter[1], 0, 1);
                                $text = strtoupper($first_character . @$second_character);
                            @endphp
                            <li class="nav-item">
                                <p class="mb-0 name-custom">Welcome! {{$data_dropdown['user_detail']['name']}}</p>
        
                                @foreach($data_dropdown['organization'] as $organization)
                                @if($organization['id'] == Session::get('organizationId'))
                                @php
                                if ($organization['id'] == Session::get('home_id')) {
                                    $new_env = "Home";
                                } else {
                                    $env = $organization['name'];
                                    if (strlen($env) > 27) {
                                        $split = substr($env, 0, 27);
                                        $new_env =  $split . '...';
                                    } else {
                                        $new_env = $env;
                                    }
                                }
                                @endphp
                                {{-- <h6 id="env" class="mb-0 home-environment-content1">{{ $new_env }} Environment</h6> --}}
                                <p class="mb-0 name-custom1" id="env" style="text-align: right;">{{ $new_env }}</p>
                                @endif
                                @endforeach
                            </li>
                            @if($user_avatar=='')
                            <span id="text_img" data-letters="{{$text}}"></span>
                            @else
                            {{-- <img src="../../assets/images/home-page/images/home-page/profile-new.png" alt="Profile Image"> --}}
                            <span><img src="{{$user_avatar}}" alt="profile" class="profileImg"></span>
                            @endif
                            
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile-settings"><span class="profileIco"><img src="<?php echo URL::to('/'); ?>/images/profile.svg" alt="thumbnail"></span>View Profile</a>
        
                                    @php $allow_organisation_create = array(363, 1707, 3452, 130, 1705); @endphp
        
                                    @if(in_array(Session::get('user_id'), $allow_organisation_create))
                                    <a class="dropdown-item dropdownItembold arrowright-hide add_env" href="javascript:void(0)" id="submenu">
                                        <span class="profileIco plus">
                                            <img class="add_env_show" src="{{ asset('images/plus_dark.png') }}">
                                            <img class="add_env_hide" src="{{ asset('images/minus_dark.png') }}">
                                        </span>Add Organization
                                    </a>
                                    <div id="add_envnmnt" style="display:none">
                                        <div class="input-group mb-3">
                                            <span class="fs-16 mb-3 text-danger small" id="org_name_err" style="display:none;"></span>
                                            <input type="text" id="org_name" class="form-control addorginput" aria-describedby="basic-addon2">
                                            <div class="input-group-append btndiv">
                                                <button class="btn btn-success submit_org addorgbtn" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <a class="dropdown-item dropdownItembold arrowright-hide" href="javascript:void(0)" id="submenu" onclick="restrictCreateOrganisation();">
                                        <span class="profileIco plus">
                                            <img class="add_env_show" src="{{ asset('images/plus_dark.png') }}">
                                            <img class="add_env_hide" src="{{ asset('images/minus_dark.png') }}">
                                        </span>Add Organization
                                    </a>
                                    @endif
        
                                    @if(!empty(Session::get('user_id')))
                                    <a class="dropdown-item dropdownItembold arrowright-hide" href="/games" id="submenu">
                                        <span class="profileIco game">
                                            <img class="" src="{{ asset('/images/outline.png') }}">
                                        </span>Games
                                    </a>
                                    
                                    <a class="dropdown-item dropdownItembold arrowright-hide layut" href="javascript:void(0)" id="openOrganizationSettings">
                                        <span class="profileIco copy-mail">
                                            <img src="{{ asset('/assets/images/settings.svg') }}" alt="Copy Org Email">
                                        </span>Organization Settings
                                    </a>
                                    @endif
        
                                    <a class="dropdown-item bold dropdownItembold arrowright-hide" href="javascript:void(0)" id="submenu">
                                        <span class="profileIco">
                                            <img src="{{ asset('/images/check-box.svg') }}" alt="thumbnail">
                                        </span>Environment
                                    </a>
                                    <div class="submenu environment-select" style="display: block !important;">
                                    @php $processed_ids = []; @endphp
                                    <ul class="orgLi">
                                        @foreach($data_dropdown['organization'] as $organization)
                                        @php
                                        $org_id = isset($organization['id']) ? $organization['id'] : 0;
                                        $orgname = addslashes($organization['name']);
                                        if(in_array($org_id, $processed_ids)){
                                            continue;
                                        }
                                        $processed_ids[] = $org_id;
                                        $child_class    = '';
                                        $wrap_class     = '';
                                        @endphp
                                        @if(isset($organization['parent_org_id']) && $organization['parent_org_id'] > 0)
                                            @php
                                                $child_class    = 'org-child';
                                                $wrap_class     = 'org-parent-'.$organization['parent_org_id'];
                                                if(!in_array($organization['parent_org_id'],$parent_org_ids)){
                                                    $parent_org_ids[] = $organization['parent_org_id'];
                                                }
                                            @endphp
                                        @endif
                                        @if($organization['organization_type']==2)
                                        <li class="org-wrap" id="org-{{$org_id}}">
                                            <a href="javascript:void(0)" class="organization_names dropdown-item" id="env_{{$org_id}}" onclick="switch_environment({{$org_id}},'Home',{{$organization['role_id']}})">
                                                <input type="hidden" name="orgid" id="orgid" value="{{ $org_id }}">
                                                <span class="profileIco invisible">
                                                    <img src="<?php echo URL::to('/'); ?>/images/check-box.svg" alt="thumbnail">
                                                </span>
                                                Home
                                            </a>
                                        </li>
                                        @else
                                        <li class="org-wrap {{ $wrap_class }} {{$child_class}}" id="org-{{$org_id}}">
                                            <a href="javascript:void(0)" class="organization_names dropdown-item" id="env_{{$org_id}}" onclick="switch_environment({{$org_id}},'{{ $orgname }}',{{$organization['role_id']}})">
                                                <span class="profileIco invisible">
                                                    <input type="hidden" name="orgid" id="orgid" value="{{ $org_id }}">
                                                    <input type="hidden" name="orgid" class="orgid" value="{{ $org_id }}">
                                                    <img src="<?php echo URL::to('/'); ?>/images/check-box.svg" alt="thumbnail">
                                                </span>
                                                {{$organization['name']}}
                                            </a>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>

                                    <a class="dropdown-item" href="/logout"><span class="profileIco"><img src="<?php echo URL::to('/'); ?>/images/power.svg" alt="thumbnail"></span>Logout</a>
                                </div>
                            </div>

                            @else
                            {{-- <li class="nav-item">
                                <a class="nav-link btn btn-primary sm" href="#" >Demo</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link btn btn-white sm" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                                {{-- <a href="/login" class="nav-link-login">Login</a> --}}
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </header>

        <!-- Hero banner -->

        <!-- first banner wipe-item -->
            <section class="hero-banner" data-scroll-section>
                <div class="hero-banner-full-wrap" id="slider">
                    <div class="hero-banner-outer slide-show"  id="item1">
                        <div class="container">
                            <div class="slider" >
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/banner-img1.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/banner-img2.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/base.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/banner-img3.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/baseball-new.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/pic11.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/pic10.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/singlebanner.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Film <span class="marked">Amplified</span></h1>
                                                <p>Where filming takes on a <span class="marked">NEW <br class="desktop">LEVEL</span> <br class="mobile">of Dynamic Action.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/music.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Beyond <span class="marked">Sports</span></h1>
                                                <p>Theater, Orchestra, Classrooms,<br class="desktop">
                                                    Graduation, Concerts, Lectures,<br class="desktop">
                                                    Training, Oversight, and much more.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/Graduation.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Beyond <span class="marked">Sports</span></h1>
                                                <p>Theater, Orchestra, Classrooms,<br class="desktop">
                                                    Graduation, Concerts, Lectures,<br class="desktop">
                                                    Training, Oversight, and much more.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-banner-inner item">
                                    <div class="row align-items-center gx-5 gy-4">
                                        <div class="col-md-6">
                                            <div class="banner-image-wrap">
                                                <img src="{{ asset('/assets/images/home/Classroom.png') }}" alt="banner-image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-content">
                                                <h1>Beyond <span class="marked">Sports</span></h1>
                                                <p>Theater, Orchestra, Classrooms,<br class="desktop">
                                                    Graduation, Concerts, Lectures,<br class="desktop">
                                                    Training, Oversight, and much more.</p>
                                                {{-- <div class="btn-wrap">
                                                    <button class="btn btn-outline-white md">Explore it</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Eco system -->
        <section class="eco-system" id="grow">
            <div class="eco-system-outer" >
                <div class="container">
                    <div class="eco-system-inner">
                        <div class="main-heading lg" id="reveal-head">
                            <h2>The Ultimate End-to-End <br class="desktop"><br class="mobile"> Film EcoSystem</h2>
                        </div>
                        <div class="content" id="content">
                            <div class="row justify-content-center ultimate-icon-flex">
                                <!-- first column -->
                                <div class="col-4 col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 item-column">
                                    <div class="item-inner">
                                        <div class="icon-wrap dark" id="icon-wrap">
                                            <i class="icon icon-capture xxxl scaled-down" id="icon"></i>
                                        </div>
                                        <div class="title-wrap">
                                            <h4>Capture</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second column -->
                                <div class="col-4 col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 item-column">
                                    <div class="item-inner reverse">
                                        <div class="icon-wrap red" id="icon-wrap">
                                            <i class="icon icon-benefit xxxl" id="icon"></i>
                                        </div>
                                        <div class="title-wrap">
                                            <h4>Benefit</h4>
                                        </div>
                                    </div>
                                </div>

                                <!--Third column -->
                                <div class="col-4 col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 item-column">
                                    <div class="item-inner">
                                        <div class="icon-wrap dark" id="icon-wrap">
                                            <i class="icon icon-distribute xxxl" id="icon"></i>
                                        </div>
                                        <div class="title-wrap">
                                            <h4>Distribute</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- View more btn column -->
                                <div class="col-lg-12">
                                    <div class="more-btn-wrap">
                                        <button class="btn btn-outline-dark sm" id="learn-more-btn-1"><i class="icon icon-plus"></i> Learn about the all powerful snip</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <div class="bg-wrapper">
            <!-- learn more -->
            <section class="learn-more bg-dark hide "  id="learn-more-1">
                <div class="container">
                    <div class="slider-buttons">
                        <div class="left">
                            <button class="btn close-btn" id="close-btn-1" title="Close" ><i class="icon icon-close sm"></i></button>
                        </div>
                        <div class="right buttons-wrap">
                            <button class="btn chevron-left sm"><i class="icon icon-chevron"></i></button>
                            <button class="btn chevron-right sm"><i class="icon icon-chevron"></i></button>
                        </div>
                    </div>
                    <div class="learn-more-slider">
                        <div class="items">
                            <div class="row gy-4 align-items-center">
                                <div class="col-md-5">
                                    <div class="left-side-image-wrap">
                                        <img src="{{ asset('/assets/images/home/snipimg-1.png') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="right-side-wrap">
                                        <p>SNIPS are the building blocks within the SnipBack Universe. You can share them, download them, and layer information on top of them via audio, color, and custom tags. Snips can be added into various COLLECTIONS or combined into highlights. COLLECTIONS, unlike highlights, are dynamic, interactive, and filterable.</p>
                                        <p><b>SnipBack utilizes three specialized COLLECTIONS:</b> <br class="desktop">My Snips, which is your private Collection; Staff Snips, which is a shared Collection; and Stat Snips, which is a specialized Collection that incorporates stats and analytics for various sports. Users can also create as many Custom Collections as they want, even being able to combine Snips from multiple organizations. Users can also share Collections with others via SnipReels, a powerful interactive sharing experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="row gy-4 align-items-center">
                                <div class="col-md-5">
                                    <div class="left-side-image-wrap">
                                        <img src="{{ asset('/assets/images/home/snipimg-2.png') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="right-side-wrap">
                                        <p>The experience of capturing Snips is no less powerful than the Snips themselves. Snips can be captured live during an event, either individually, or as a team. Snipping can be done via any mobile device, smart watch, or Bluetooth clicker.</p>
                                        <p>Each user can drop a captured Snip, on-the-fly, into their My Snips or Staff Snips Collection. When reviewing the Staff Snips Collection later (or live during the event), users can easily filter by staff members who Snipped any portion of the event. Organizers can even open up Snipping for all attendees, allowing each person to build their own personal Collections Live! When an event is ended, all those who Snipped the event will get their custom highlight reel based on their Snips. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Film capture -->
            <section class="film-capture gray-bg " id="grow2">
                <div class="film-capture-outer">
                    <div class="container">
                        <div class="film-capture-inner" >
                            <div class="main-heading lg" id="reveal-head">
                                <h2>Film Capture<br class="mobile"> Powerful - Adaptable - Easy</h2>
                                <p>4K / 60 fps / AI / Wi-Fi 6E / 6-Core / 5x Optical /<br class="mobile"> 15x Digital Auto View Sync / <br class="desktop"> Auto Upload /<br class="mobile"> Long Lasting Battery Online or Offline</p>
                            </div>
                            <div class="content">
                                <div class="row gy-4 film-slider">
                                    <!-- first column -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 column-bordered item">
                                        <div class="item-inner">
                                            <div class="icon-wrap no-bg" id="captured-icon">
                                                <img src="{{ asset('/assets/images/home/cam-1.png') }}" alt="image" id="captured-image">
                                            </div>
                                            <div class="title-wrap">
                                                <h5>Permanently Mounted<br class="desktop"><br class="mobile"> Facility cameras</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Second column -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 column-bordered item">
                                        <div class="item-inner no-bg">
                                            <div class="icon-wrap no-bg" id="captured-icon">
                                                <img src="{{ asset('/assets/images/home/cam-2.png') }}" alt="image" id="captured-image">
                                            </div>
                                            <div class="title-wrap">
                                                <h5>Roaming<br class="desktop"><br class="mobile"> Crowd Cams</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Third column -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 column-bordered item">
                                        <div class="item-inner">
                                            <div class="icon-wrap no-bg" id="captured-icon">
                                                <img src="{{ asset('/assets/images/home/cam-3.png') }}" alt="image" id="captured-image">
                                            </div>
                                            <div class="title-wrap">
                                                <h5>Floating Cameras<br class="desktop"><br class="mobile"> Tripods, Clamps, Magnet Mounts</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Remote Control -->
            <section class="remote-control" id="grow3">
                <div class="remote-control-outer">
                    <div class="container">
                        <div class="remote-control-inner">
                            <div class="main-heading" id="reveal-head">
                                    <h2>Remote Control</h2>
                                    <p>iOS / Android</p>
                            </div>
                            <div class="content">
                                <div class="remote-control-image-wrap">
                                    <div class="svg-wrap desktop-view">
                                        <object data="{{ asset('/assets/images/home/remote-control.svg') }}" alt="mobile-image" id="mobile-image"></object>
                                    </div>
                                    <img class="mobile-view" src="{{ asset('/assets/images/home/remote-control-mob.png') }}" alt="mobile-image" id="mobile-image">
                                </div>
                                <ol class="remote-control-list mobile-view">
                                    <li class="list-item">Multi - View </li>
                                    <li class="list-item">Pre-tag setup the play in advance <br class="mobile">before snipping </li>
                                    <li class="list-item">Migrate Cameras to Next Game</li>
                                    <li class="list-item">Remote Control Cameras</li> 
                                    <li class="list-item">Snip w/o pre-tag clip the <br class="mobile">play after it happens</li>
                                </ol>
                                <div class="more-btn-wrap">
                                    <button class="btn btn-outline-dark sm" type="button" id="learn-more-btn-2"><i class="icon icon-plus"></i> Learn more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Live Tagging -->
            <section class="live-tagging bg-dark learn-more" id="learn-more-2">
                <div class="live-tagging-outer">
                    <div class="container">
                        <div class="live-tagging-inner">
                            <div class="main-heading flex">
                                <button class="btn close-btn" title="Close" id="close-btn-2"><i class="icon icon-close sm"></i></button>
                                <div class="text">
                                    <h2>Live Tagging / Coding</h2>
                                    <p>Bluetooth Clicker, Smart Watch, iPad,<br class="mobile"> Android Tablet, Smart Phone</p>
                                </div>
                            </div>
                            <div class="content">
                                <div class="row gy-4">
                                    <div class="col-md-9">
                                        <div class="live-tagging-main-image-wrap">
                                            <img class="desktop-view zoom2 zoom-image"  src="{{ asset('/assets/images/home/live-tagging-2.svg') }}" alt="mobile-image" id="live-tagging-image" data-magnify-src="{{ asset('/assets/images/home/live-tagging2x.png') }}">
                                            <object class="desktop-view zoom2"  data="{{ asset('/assets/images/home/live-tagging-2.svg') }}" alt="mobile-image" id="live-tagging-image"></object>
                                            <img class="mobile-view" src="{{ asset('/assets/images/home/live-tagging-mob.svg') }}" alt="mobile-image" id="live-tagging-image">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mobile-view">
                                        <ol class="live-tagging-list">
                                            <li class="list-item">Select / Switch tag list </li>
                                            <li class="list-item">Easily associate tag with player (s) </li>
                                            <li class="list-item">Secondary color tags</li>
                                            <li class="list-item">Add Audio Tag with Snip</li> 
                                            <li class="list-item">Edit tag list on-the-fly</li>
                                            <li class="list-item">Snip Collections</li>
                                            <li class="list-item">Pre-Tag snip marks the end of the play</li>
                                            <li class="list-item">Share snip on-the-fly via sms, email or <br class="mobile">social media</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row gy-4 mobile-centered-row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-4">
                                                <div class="sub-image-full-wrap">
                                                    <div class="sub-image">
                                                        <img src="{{ asset('/assets/images/home/bluetooth-clicker.png') }}" alt="sub-image" id="live-tagging-image">
                                                    </div>
                                                    <p class="title">Bluetooth Clicker</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-4">
                                                <div class="sub-image-full-wrap">
                                                    <div class="sub-image">
                                                        <img src="{{ asset('/assets/images/home/smart-watch.png') }}" alt="sub-image" id="live-tagging-image">
                                                    </div>
                                                    <p class="title">Smart Watch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="more-btn-wrap">
                                            <a href="" class="btn btn-outline-white sm"><i class="icon icon-plus-white"></i> Learn more</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Film review -->
            <section class="film-review" id="grow4">
                <div class="film-capture-outer">
                    <div class="container">
                        <div class="">
                            <div class="film-capture-inner" >
                                <div class="row gx-5 gy-4 align-items-center">
                                    <div class="col-lg-5 mobile-view">
                                        <div class="main-heading">
                                            <h2>Need More?<br class="mobile"> Power Up with iPad</h2>
                                            <p>Enhanced Football Tagging</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 slider-column">
                                        <div class="film-review-slider">
                                            <img src="{{ asset('/assets/images/home/tagging1.png') }}" alt="slider-image" class="item">
                                            <img src="{{ asset('/assets/images/home/tagging2.png') }}" alt="slider-image" class="item">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="main-heading left-aligned ">
                                            <h2 class="desktop-view">Need More?<br class="desktop"> Power Up with iPad</h2>
                                            <p class="desktop-view">Enhanced Football Tagging</p>
                                            <button class="btn btn-outline-dark sm" type="button" id="learn-more-btn-3" ><i class="icon icon-plus"></i> Learn More<span class="desktop-view"> About Tag Management</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- learn more -->
            <section class="learn-more bg-dark tag-list-collpase" id="learn-more-3">
                <div class="container">
                    <div class="learn-more-inner">
                        <div class="main-heading flex">
                            <button class="btn close-btn" title="Close" id="close-btn-3"><i class="icon icon-close sm"></i></button>
                            <h2>Robust<br class="mobile"> Tag List Management</h2>
                        </div>
                        <div class="row gy-4 align-items-start">
                            <div class="col-md-12 mobile-view">
                                <div class="middle-side-image-wrap">
                                    <img src="{{ asset('/assets/images/home/tag-list-mob.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="left-side-image-wrap">
                                    <h4 class="head"><span class="number">1.</span>Tag List</h4>
                                    <ul>
                                        <li>
                                            <h6>Create</h6>
                                            <p>Create as many tag lists as desired</p>
                                        </li>
                                        <li>
                                            <h6>Share</h6>
                                            <p>Share tag lists with others so they don't have <br class="mobile">to start from scratch</p>
                                        </li>
                                        <li>
                                            <h6>Duplicate</h6>
                                            <p>Easily duplicate existing tag lists to modify <br class="mobile">and create several variants </p>
                                        </li>
                                        <li>
                                            <h6>Edit</h6>
                                            <p>Tag lists can be edited in Tag List <br class="mobile">Management, but can also be edited on-the-<br class="mobile">fly when in use</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 desktop-view">
                                <div class="middle-side-image-wrap">
                                    <img src="{{ asset('/assets/images/home/tag-list.svg') }}" alt="image" class="zoom3" data-magnify-src="{{ asset('/assets/images/home/tag-list-2x.png') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="right-side-wrap">
                                    <h4 class="head"><span class="number">2.</span>Your tags</h4>
                                    <ul>
                                        <li>
                                            <h6>Tag Name</h6>
                                            <p>You can create as many tags in a tag list as <br class="mobile">desired.</p>
                                        </li>
                                        <li>
                                            <h6>Color</h6>
                                            <p>Associate any color with any tag. </p>
                                        </li>
                                        <li>
                                            <h6>Roster</h6>
                                            <p>When a roster is available for any film you <br class="mobile">can associate player(s) with any tag assigned <br class="mobile">to a Snip.  </p>
                                        </li>
                                        <li>
                                            <h6>Select from any Tag List</h6>
                                            <p>When Snipping Live or after the event via <br class="mobile">OnDemand playback, you can easily switch <br class="mobile">between tag lists within the same film. 
                                            </p>
                                        </li>
                                        <li>
                                            <h6>Filter by Tags</h6>
                                            <p>You can easily filter by any combination of <br class="mobile">tags. In addition to your custom tags, <br class="mobile">SnipBack gives you the ability to add <br class="mobile">secondary system color tags to add even <br class="mobile">more depth to your searches.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Film review video-->
            <section class="video-wrap" id="grow5">
                <div class="video-wrap-outer">
                    <div class="container">
                        <div class="main-heading" id="reveal-head">
                            <h2 id="typewriter-text">Powerful Film Review</h2>
                            <p>Multi-View, Side by Side, Stats Collections,<br class="mobile"> Whiteboarding, Share</p>
                        </div>
                        <div class="film desktop-view " id="film"  >                       
                            <object class="w-100 film-banner" data="{{ asset('/assets/images/home/powerback-img-ful.svg') }}" type="image/svg+xml" id="svgobj"></object>
                            <img class="w-100 film-banner desktop-view zoom4" src="{{ asset('/assets/images/home/powerback-img-ful-zoom2x.png') }}" type="image/svg+xml" data-magnify-src="{{ asset('/assets/images/home/powerback-img-ful-zoom2x.png') }}">
                        </div>
                        <div class="film-review-main-image-wrap mobile-view">
                            <div class="image-wrap">
                                <img src="{{ asset('/assets/images/home/film-review.png') }}" alt="film-review-image">
                            </div>
                            <div class="image-description">
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Stat Report</h4>
                                        <p>View or Share Stat Report.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>SnipReels</h4>
                                        <p>Save Sub-Collections of desired snips for <br class="mobile">easy playback.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Filter</h4>
                                        <p>Filter Snips by any applied tags.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="grouped-item">
                                    <h4 class="head">Snip Collections</h4>
                                    <div class="item">
                                        <div class="inner-group">
                                            <h4>My Snips</h4>
                                            <p>Private Collection viewable only by <br class="mobile">logged in user.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="inner-group">
                                            <h4>Team Snips</h4>
                                            <p>Shared Collection viewable by staff.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="inner-group">
                                            <h4>Stat Snips</h4>
                                            <p>Stat Collection created by our SnipBack <br class="mobile">Assist Service.</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Captures Snips</h4>
                                        <p>Tap any Snip to play it.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Side by Side</h4>
                                        <p>any two views side by side.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Edit Snip Edit Snip</h4>
                                        <p>Easily edit snip length, associated <br class="mobile">tags, or assigned Collection.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>New Snip + Tag(s)</h4>
                                        <p>Easily add new Snip by tapping at the END <br class="mobile">of a play.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Game Block</h4>
                                        <p>Seamlessly transition to full game film at any <br class="mobile">time by tapping game block.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Saved Whiteboards and <br class="mobile"><span class="text-mb-break">Highlight Reels</span></h4>
                                        <p>Easily create, view, share, or download.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Live Whiteboard</h4>
                                        <p>Available for both livestream and <br class="mobile">OnDemand playback.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Set Preferred View for <br class="mobile">each Snip</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <div class="inner-group">
                                        <h4>Multiple Views</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="more-btn-wrap">
                                <button class="btn btn-outline-dark sm"><i class="icon icon-plus"></i> Learn more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Film review -->
            <section class="enhanced-security gray-bg" id="grow6">
                <div class="enhanced-security-outer">
                    <div class="container">
                        <div class="enhanced-security-inner">
                            <div class="main-heading" id="reveal-head">
                                <h2>Enhanced Security and Control</h2>
                                <p>Encryption, Restrict Re-Sharing Never<br class="mobile"> Selling your data</p>
                            </div>
                            <div class="row gy-4 align-items-center">
                                <div class="col-md-6">
                                    <div class="red-cirle-image-wrap">
                                        <div class="image-wrap">
                                            <img class="red-circle-image" id="red-circle" src="{{ asset('/assets/images/home/red-circle-bg.svg') }}" alt="red-circle-image">
                                            <img class="key-hole-image" src="{{ asset('/assets/images/home/keyhole.svg') }}" alt="keyhole-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="enhanced-security-content">
                                        <h3>Multi Platform</h3>
                                        <div class="button-wrap">
                                            <a href="" class="btn btn-gray">iOS</a>
                                            <a href="" class="btn btn-dark-green">Android</a>
                                            <a href="" class="btn btn-blue">Web</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Snipback sideline -->
            <section class="snipback-sideline" id="grow7">
                <div class="snipback-sideline-outer">
                    <div class="container">
                        <div class="snipback-sideline-inner">
                            <div class="main-heading" id="reveal-head">
                                <h2>Snipback Sideline</h2>
                                <p>Instant Sideline Review Combined with<br class="mobile"> Live Snipping / Coding. <br class="desktop">Unlimited Number<br class="mobile"> of Views.</p>
                            </div>
                            <div class="content">
                                <div class="item-outer first">
                                    <div class="sub-heading">
                                        <h4>Capture & Stream</h4>
                                    </div>
                                    <div class="row gy-4">
                                        <!-- first column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4 column-bordered">
                                            <div class="item-inner">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/cam-1.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5>Permanently<br class="desktop"> Mounted<br class="mobile"> Facility cameras</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Second column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4 column-bordered">
                                            <div class="item-inner no-bg">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/cam-2.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5>Roaming<br class="mobile"> Crowd Cams</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Third column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4 column-bordered">
                                            <div class="item-inner">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/cam-3.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5><span class="bold">Floating Cameras</span><br class="mobile"> Tripods, Clamps, Magnet Mounts</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-4 align-items-center">
                                        <div class="col-xl-4 col-lg-4 col-md-4 mobile-view" >
                                            <div class="divider-img">
                                                <img src="{{ asset('/assets/images/home/path-divider.svg') }}" alt="divider">
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                            <div class="text-wrap">
                                                <h5 class="head">Remote <br class="mobile">Control <br class="mobile">Live Snipping / Coding</h5>
                                                <p class="sub-text">via Mobile, <br class="mobile">Smartwatch & <br class="desktop"><br class="mobile">Bluetooth Clicker</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 desktop-view">
                                            <div class="divider-img">
                                                <img src="{{ asset('/assets/images/home/path-divider.svg') }}" alt="divider">
                                            </div>
                                        </div>
                                            
                                        <div class="col-6 col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                            <div class="text-wrap right">
                                                <h5 class="head">Online & <br class="desktop"><br class="mobile">Offline Mode</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-outer second">
                                    <div class="sub-heading">
                                        <h4>Playback & Whiteboard</h4>
                                    </div>
                                    <div class="row gy-4 align-items-center">
                                        <!-- first column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4 ">
                                            <div class="item-inner">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/tablet.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5>Tablet</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Second column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4">
                                            <div class="item-inner no-bg">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/web.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5>Web</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Third column -->
                                        <div class="col-4 col-xl-4 col-lg-4 col-md-4 column-bordered">
                                            <div class="item-inner">
                                                <div class="icon-wrap no-bg">
                                                    <img src="{{ asset('/assets/images/home/mobile.png') }}" alt="image">
                                                </div>
                                                <div class="title-wrap">
                                                    <h5>Mobile</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="end-text-wrap mobile-view">
                                    <p>Instant Playback, Works Online and Offline (No<br class="mobile"> Internet Required), Live Stream Unlimited Views,<br class="mobile"> Setup in 5 Minutes, Live Snip/Code, Parents Can<br class="mobile"> Snip Their Kids.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- snipback-sideline video -->
                    <div class="video-full-wrap" id="snipback-sideine-video">
                        <div class="container">
                            <div class="main-heading mobile-view">
                                <h2><span class="not-bold">Advanced</span> Film Playback</h2>
                                <p>Access Multiple Views, Review Live Snips,<br class="desktop"><br class="mobile"> Filter by Tag and/or Player, Whiteboard,<br class="desktop"><br class="mobile"> Add New Snips + Tags</p>
                            </div>
                            <div class="row">
                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-md-sm-12">
                                    <div class="positioned">
                                        <div class="image-wrap">
                                            <img class="mobile-view" src="{{ asset('/assets/images/home/adv-playback.png') }}" alt="thumbnail">
                                            <img class="desktop-view" src="{{ asset('/assets/images/home/adv-playback2.png') }}" alt="thumbnail" id="sideline-image">
                                        </div>                      
                                        <ul class="adv-playback-list" id="view5">
                                            <li class="list-item"><span class="text">Sideline / Pressbox Instant Playback</span></li>
                                            <li class="list-item"><span class="text">Live Snipping/Coding via App,<br class="mobile"> Watch, or Clicker</span></li>
                                            <li class="list-item"><span class="text">“Floating” Recorders Mounted via<br class="mobile"> Tripod, Magnet, or Clamps.</span></li>
                                        </ul>
                                        <div class="instant-heading desktop-view" id="view1">
                                            <h5>Instant playback, Works online and offline (No internet required), Live stream unlimited views, Setup in 5 minutes, Live snip/code, Parents can snip their kids.</h5>
                                        </div>
                                        <div class="adv-film-list desktop-view" id="view2">
                                            <div class="main-heading left-aligned">
                                                <h2>Advanced <br class="desktop">Film Playback</h2>
                                            </div>
                                            <ul class="list">
                                                <li class="list-item">Access multiple views</li>
                                                <li class="list-item">Review live snips </li>
                                                <li class="list-item">Filter by tag and/or player </li>    
                                                <li class="list-item">Whiteboard </li>
                                                <li class="list-item">Add New Snips + Tags</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-md-sm-12" id="view4">
                                    <div class="live-snipping-wrap">
                                        <div class="">
                                            <div class="main-heading left-aligned">
                                                <h2>Live Snipping / <br class="desktop">Coding + Tagging</h2>
                                            </div>
                                            <ul class="live-snipping-list">
                                                <li class="list-item">Play snips on-the-fly in collections. </li>
                                                <li class="list-item">Add audio tags to your snips. </li>
                                                <li class="list-item">Add secondary color tags allowing more <br class="mobile">granular searches. </li>
                                                <li class="list-item">Assign multiple tags and/or players to any <br class="mobile">snip.</li> 
                                                <li class="list-item">Proprietary pre-tag for American Football allows you to setup play in advance before <br class="mobile">snipping. </li>
                                                <li class="list-item">Available for playback immediately. </li>
                                                <li class="list-item">Share on-the-fly via SMS, email, or <br class="mobile">social. </li>
                                            </ul>
                                            <div class="live-snipping-full-image mobile-view">
                                                <img src="{{ asset('/assets/images/home/live-snipping-2xdesktop.png') }}" alt="live-snipping-image">
                                            </div>
                                            <div class="live-snipping-full-image-wrap desktop-view">
                                                <div class="main-heading">
                                                    <h2>Live Snipping /Coding <br class="desktop">+ Tagging</h2>
                                                </div>
                                                <div class="live-snipping-full-image ">
                                                    <img class="zoom" src="{{ asset('/assets/images/home/live-snipping-2xdesktop.png') }}" alt="live-snipping-image" data-magnify-src="{{ asset('/assets/images/home/sideline_mag_.5x.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- snipback sideline extra -->
            <section class="snipback-sideline-extra">
                <!-- snipback sideline extras -->
                <div class="snip-back-slide-extra" id="snipback-extra">
                    <div class="container mobile-width">
                        <div class="snip-back-slide-extra-inner">
                            <div class="row gy-4 gx-5 snipback-slide-slider">
                                <div class="col-lg-4 item">
                                    <div class="items">
                                        <div class="icons">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/enhanced.svg') }}" alt="icon">
                                        </div>
                                        <div class="text-wrap">
                                            <h2>Enhanced<br class="desktop"> Film Exchange</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 item">
                                    <div class="items">
                                        <div class="icons">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/gudl.svg') }}" alt="icon">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/dropbox.svg') }}" alt="icon">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/google_drive.svg') }}" alt="icon">
                                        </div>
                                        <div class="text-wrap">
                                            <h2>Easily Receive Film by <br class="desktop"><br class="mobile">Email2Upload via Hudl,<br class="desktop"> Dropbox, <br class="mobile">and Google <br class="desktop">Drive link</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 item">
                                    <div class="items">
                                        <div class="icons">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/share.svg') }}" alt="icon">
                                            <img class="icon-img" src="{{ asset('/assets/images/home/link.svg') }}" alt="icon">
                                        </div>
                                        <div class="text-wrap">
                                            <h2>Easily Share via <br class="desktop">Pool Share or <br class="desktop"><br class="mobile">Direct Link</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- multicam-capabilities -->
            <section class="multicam-capabilties" id="multicam">
                <div class="multicam-capabilties-outer">
                    <div class="container">
                        <div class="multicam-capabilties-inner">
                            <div class="main-heading" id="reveal-head">
                                <h2>Flexible <br class="mobile">Multi-Cam Capabilities</h2>
                                <p>Auto-sync of All Views. "Floating" Wire-Free<br class="mobile"> Cameras, <br class="desktop">Allow Placement Anywhere.</p>
                            </div>
                            <div class="multicam-content">
                                <div class="cards-wrap">
                                    <div class="row gy-4">
                                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                            <div class="card" id="card">
                                                <img src="{{ asset('/assets/images/home/sec12-img1.svg') }}" alt="image" class="thumb" id="thumb">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                            <div class="card" id="card">
                                                <img src="{{ asset('/assets/images/home/sec12-img2.svg') }}" alt="image" class="thumb" id="thumb">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                            <div class="card" id="card">
                                                <img src="{{ asset('/assets/images/home/sec12-img3.svg') }}" alt="image" class="thumb" id="thumb">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card">
                                            <div class="card">
                                                <img src="{{ asset('/assets/images/home/sec12-img4.svg') }}" alt="image" class="thumb" id="thumb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- case study -->
            <section class="case-study" id="case-study">
                <div class="case-study-outer">
                    <div class="container">
                        <div class="case-study-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 mobile-view">
                                    <div class="main-heading">
                                        <h2>In Action</h2>
                                        <p>Unleash floating Multi-View cameras for<br class="mobile"> precise instruction</p>
                                        <div class="sub-head-group">
                                            <h6>Case Study - 6 Camera Mini Camp</h6>
                                            <p>See every angle for precise assessment <br class="mobile">and instruction.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 case-study-col desktop-view">
                                    <div class="main-heading left-aligned">
                                        <h2><span class="marked">CASE STUDY</span><br class="desktop"> 6 Camera Mini Camp</h2>
                                        <p>See every <br class="desktop">angle for precise <br class="desktop">assessment and <br class="desktop">instruction.</p>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 case-study-col">
                                    <div class="case-study-demo" id="case-study-demo">
                                        <img class="main-image" src="{{ asset('/assets/images/home/casestudy-main.png') }}" alt="image">
                                        <img class="case-study-path desktop-view" src="{{ asset('/assets/images/home/casestudy-path.svg') }}" alt="image">
                                        <img class="case-study-path mobile-view" src="{{ asset('/assets/images/home/casestudy-path-mob.svg') }}" alt="image">
                                        <div class="sub-images-wrap">
                                            <div class="inner-item">
                                                <img src="{{ asset('/assets/images/home/case-study-1.png') }}" alt="sub-image" class="sub-image">
                                                <h5>Inside Drill<br class="desktop"><br class="mobile">End Zone View</h5>
                                            </div>
                                            <div class="inner-item">
                                                <img src="{{ asset('/assets/images/home/case-study-2.png') }}" alt="sub-image" class="sub-image">
                                                <h5>Inside Drill<br class="desktop"><br class="mobile">Sideline View</h5>
                                            </div>
                                            <div class="inner-item">
                                                <img src="{{ asset('/assets/images/home/case-study-3.png') }}" alt="sub-image" class="sub-image">
                                                <h5>Inside Drill<br class="desktop"><br class="mobile">End Zone View <br class="mobile">Defense</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 case-study-col desktop-view">
                                    <div class="main-heading left-aligned">
                                        <h2>In Action</h2>
                                        <p>Unleash <br class="desktop">floating Multi- <br class="desktop">View cameras for precise instruction</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- banner one sections -->
            <div class="banners-container" id="banners-container">
                <section class="banner-1">
                    <div class="bg" style="background-image: linear-gradient(45deg, #0000007a, #0000007a), url('{{ asset('/assets/images/home/cloud-bg.png') }}');"></div>
                    <h2 id="reveal-head">Cloud AI</h2>
                </section>
                <section class="banner-1">
                    <div class="bg" style="background-image: linear-gradient(45deg, #0000007a, #0000007a), url('{{ asset('/assets/images/home/assist-bg.png') }}');"></div>
                    <!-- <img class="sub-image" src="{{ asset('/assets/images/home/snipback-report.png') }}" alt="image"> -->
                    <div class="sub-image-custom">
                    <img src="{{ asset('/assets/images/home/snipback-report.png') }}" alt="image" class="zoom2" data-magnify-src="{{ asset('/assets/images/home/report-2x.png') }}">

                    </div>

                    <h2 id="reveal-head" class="text-slider">
                        <span class="item">SnipBack Assist <br class="desktop"><br class="mobile">Interactive Stats & Analytics</span>
                        <span class="item">Basketball, Football, Volleyball, Tennis, Soccer, LaCrosse, Ice Hockey, and Baseball/Softball.</span>
                    </h2>
                </section>
    
       
                <section class="banner-1">
                    <div class="bg" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.48), rgba(0, 0, 0, 0.48),rgba(0, 0, 0, 0.01)), url('{{ asset('/assets/images/home/football.png') }}');"></div>
                    <h2 id="reveal-head">Rich Experience with HD Streaming,<br class="mobile"> Scoreboard Overlays, Multiple Views,<br class="mobile"> Stream Snipping,Pause/Rewind, and<br class="mobile"> Monetization.</h2>
                </section>
             
            </div>

            <!-- Testimonial -->
            <section class="happy_customer">
                <div>
                    <h2>Testimonials</h2>
                    <h3>Happy Customers</h3>
                </div>
                <div class="main-carousel">
                    <div class="carousel-cell">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <h4 >HIGH SCHOOL</h4>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic1.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Oak Hill Academy</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic2.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Grand Blanc High School</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic3.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Arbor Prep</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic4.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Powers Catholic</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic5.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Detroit Catholic Central</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic6.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Columbia Central High School</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic7.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Flushing</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic8.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Lapeer High School</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic9.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Kearsley High School</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic10.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Clio</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic11.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Frankenmuth High School</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic12.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">New Lothrop</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic13.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Sagiinaw Arthur Hill</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="schoolpic14.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Westﬁeld Prep</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="container">
                        <div class="row testimonial_img_wrap_custom">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <h4 >COMMUNITY COLLEGES</h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="testimonial_img_wrap">
                                                <img src="college1.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Grand Rapids Community College</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="testimonial_img_wrap">
                                                <img src="college2.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Mid-Michigan Community College</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="testimonial_img_wrap">
                                                <img src="college3.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Purdue Northwest</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                                    <div class="testimonial_img_wrap">
                                        <img src="college4.png" class="img-fluid">
                                    </div>
                                    <p class="customer_name text-center">Alma College</p>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-4">
                                    <div class="testimonial_img_wrap">
                                        <img src="college5.png" class="img-fluid">
                                    </div>
                                    <p class="customer_name text-center">Kuyper</p>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-4">
                                    <div class="testimonial_img_wrap">
                                        <img src="college6.png" class="img-fluid">
                                    </div>
                                    <p class="customer_name text-center">Hillsdale College</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <h4>CLUBS</h4>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club1.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">align-items-center</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club2.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Legacy Football</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club3.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Michigan Mystics</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club4.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Illiois Lady Lightning</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club5.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">REALBasketball</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club6.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Ohio Premier Basketball</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club7.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">Rice Basketball Academy</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club8.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">West Michigan Drive</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club9.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">MSF Flight</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="testimonial_img_wrap">
                                                <img src="club10.png" class="img-fluid">
                                            </div>
                                            <p class="customer_name text-center">MidwestElite EYBL</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </section>





            <!-- Secondary banner-->
            <section class="secondary-banner-container" id="secondary-banner">
                <div class="item">
                    <div class="container">
                        <div class="main-heading" id="reveal-head">
                            <h2>Team Chat &<br class="desktop"> Video Rooms <br class="mobile">Powered by NGauge</h2>
                            <p>Exclusive Features to Streamline Team <br class="mobile">Meetings and Virtual Events<br class="desktop"><br class="desktop"></p>
                        </div>
                        <div class="image-wrap">
                            <img src="{{ asset('/assets/images/home/secondarybanner-12x.png') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="main-heading" id="reveal-head">
                            <h2>Fundraise with<br class="desktop"><br class="mobile"> NGauge Virtual Events</h2>
                            <p>Monetize via One-on-One or Group Events, with <br class="mobile">Enhance <br class="desktop">Features Such Live Polls and <br class="mobile">Virtual Selfies</p>
                        </div>
                        <div class="image-wrap desktop-view">
                            <img class="desktop-view" src="{{ asset('/assets/images/home/nguagenew.png') }}" alt="image">
                        </div>
                        <div class="image-wrap mobile-view">
                            <img  src="{{ asset('/assets/images/home/secondary-banner-2-mob.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer -->
        <Footer id="footer">
            <div class="footer-outer">
                <div class="container">
                    <div class="footer-inner">
                        <div class="main-heading" id="reveal-head">
                            <h2>Scan & Download the App</h2>
                            <p>Anyone can get started using SnipBack for their <br class="mobile">events in less than 5 <br class="desktop">minutes. Just <a href="" class="download-btn">download<br class="mobile"> the App</a> and have a full-fledged event <br class="desktop">platform<br class="mobile"> on your phone.</p>
                        </div>
                        <div class="barcode-wrap">
                            <!-- IOS -->
                            <div class="barcode-inner">
                                <img class="barcode-img" src="{{ asset('/assets/images/home/ios.png') }}" alt="barcode-image">
                                <a href="https://apps.apple.com/us/app/snipback/id1117265365"><img src="{{ asset('/assets/images/home/appstore.png') }}" alt="appstore-img"></a>
                            </div>
                            <!-- divider -->
                            <div class="divider"></div>
                            <!-- Android -->
                            <div class="barcode-inner">
                                <img class="barcode-img" src="{{ asset('/assets/images/home/android.png') }}" alt="barcode-image">
                                <a href="https://play.google.com/store/apps/details?id=com.hipoint.snipbackai&hl=en&gl=US"><img src="{{ asset('/assets/images/home/google.png') }}" alt="playstore-img"></a>
                            </div>
                        </div>
                        <div class="contact-us-wrap">
                            <button class="btn btn-outline-white sm" type="button" data-bs-toggle="modal" data-bs-target="#contactModal"><i class="icon icon-chevron-white"></i>&nbsp;&nbsp;&nbsp;Contact us</button>
                        </div>
                    </div>
                    <div class="footer-sub-inner">
                        <div class="social-media-btn">
                            <a href="https://www.facebook.com/snipbackapp/" target="_blank" title="Facebook"><i class="icon icon-facebook"></i></a>
                            <a href="https://twitter.com/snipbackapp" target="_blank" title="Twitter"><i class="icon icon-twitter"></i></a>
                            <a href="https://www.instagram.com/snipbackpro/" target="_blank" title="Instagram"><i class="icon icon-instagram"></i></a>
                            <a href="https://www.linkedin.com/showcase/snipback/" target="_blank" title="Linkedin"><i class="icon icon-linkedin"></i></a>
                            <a href="https://www.youtube.com/channel/UCfBiqr-7am068jPwRVwsOmA/videos" target="_blank" title="YouTube"><i class="icon icon-youtube"></i></a>
                        </div>
                        <div class="copyright-text">
                            <small>Copyright © 2024 SnipBack. All rights reserved.  | <a href="{{env("APP_URL")}}/terms-of-use">Terms &amp; Conditions</a></small>
                        </div>
                    </div>
                </div>
                
            </div>
        </Footer>

        <!-- contact-us modal -->
        <div class="modal no-curve fade custom-modal lenis lenis-smooth" id="contactModal" tabindex="2" aria-labelledby="conatctModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="contact-us-outer">
                            <div class="container">
                                <div class="main-heading flex">
                                    <div class="left">
                                        <button class="btn close-btn" data-bs-dismiss="modal" aria-label="Close" title="Close" ><i class="icon icon-close sm"></i></button>
                                    </div>
                                    <div class="right">
                                        <h2>Contact Us</h2>
                                        <p>We're here to help and answer any question you might have.<br class="desktop"> We look forward to hearing from you.</p>
                                    </div>
                                </div>
                                <div class="contact-us-form-wrap">
                                    <form action="">
                                        <div class="row gy-4">
                                            <div class="col-lg-12">
                                                <label for="contact_name" class="form-label">Name</label>
                                                <input type="text" class="form-control contact_us-form " id="contact_name" placeholder="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="contact_email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control contact_us-form " id="contact_email" placeholder="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="contact_phone" class="form-label">Phone</label>
                                                <div class="mobile-wrap">
                                                    <select class="form-control mobile-code" id="contact_country_code"></select>
                                                    <input type="number" class="form-control contact_us-form mobile-number numbers-only" id="contact_phone" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="contact_description" class="form-label ">Description</label>
                                                <textarea class="form-control contact_us-text-area non-common" id="contact_description" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="submit-btn-wrap">
                                    {{-- <button class="btn btn-outline-dark sm"><i class="icon icon-plus"></i>  Submit</button> --}}
                                    <button class="btn btn-outline-dark sm submit_contact" onclick="sendContactFormData();"><i class="icon icon-plus"></i>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--mobile sidebar -->
        <div class="sidebar offcanvas offcanvas-start"  tabindex="-1" id="main-sidebar" aria-labelledby="mainSidebarLabel">
            <div class="offcanvas-header end">
                <button type="button" class="btn close-btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon icon-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="main-logo">
                    <img src="{{ asset('/assets/images/home/mobile-logo.png') }}" alt="logo">
                </div>
                <ul class="menu-wrap">
                    <li class="menu-item">
                        {{-- <a href="/">Home</a> --}}
                        <a href="/" class="menu_link @if(Route::current()->getName()=='about'|| Route::current()->getName()=='root') active @endif">Home</a>
                    </li>
                    <li class="menu-item">
                        {{-- <a href="/film">Film</a> --}}
                        <a href="/film" class="menu_link @if(Route::current()->getName()=='home' || Route::current()->getName()=='games' || Route::current()->getName()=='moreFilm') active @endif">Film</a>
                    </li>
                    @php
                    $oid=Session::get('organizationId');
                    $hid=Session::get('home_id');
                    $org_role_id    = Session::get('org_role_id');
                    @endphp
                    @if(Session::get('user_id'))
                    <li class="menu-item">
                        <a href="/listCustomTags" id="tags_page" class="menu_link @if(Route::current()->getName()=='customtags') active @endif" <?= ($org_role_id == 2 || $org_role_id == 5) ? 'style="display:none;"' : ''?>>Tags</a>
                    </li>
                    <li class="menu-item">
                        <a href="/listSnipCollection" id="collections_page" class="menu_link @if(Route::current()->getName()=='snipCollectionList') active @endif" <?= ($org_role_id == 2 || $org_role_id == 5) ? 'style="display:none;"' : ''?>>Snip Collections</a>
                    </li>
                    <li class="menu-item">
                        <a href="/recruit" id="recruit_page_block" class="menu_link @if(Route::current()->getName()=='recruit') active @endif">Recruit</a>
                    </li>
                    @endif
                    <li class="menu-item">
                        {{-- <a href="#">Pricing</a> --}}
                        <a href="/pricing" class="menu_link @if(Route::current()->getName()=='pricing') active @endif">Pricing</a>
                    </li>
                    <li class="menu-item">
                        <div class="menu-buttons">
                            <div>
                                @if(!empty(Session::get('user_id')))
                                @php
                                $user_avatar = '';
                                $user_avatar = Session::get('user_avatar');
                                $find_letter = explode(' ', $data_dropdown['user_detail']['name']);
                                $first_character = substr($find_letter[0], 0, 1);
                                @$second_character = substr($find_letter[1], 0, 1);
                                $text = strtoupper($first_character . @$second_character);
                                @endphp
                                <p class="mb-0 name-custom">Welcome! {{$data_dropdown['user_detail']['name']}}</p>
                            
                                @foreach($data_dropdown['organization'] as $organization)
                                    @if($organization['id'] == Session::get('organizationId'))
                                        @php
                                        if ($organization['id'] == Session::get('home_id')) {
                                            $new_env = "Home";
                                        } else {
                                            $env = $organization['name'];
                                            if (strlen($env) > 27) {
                                                $split = substr($env, 0, 27);
                                                $new_env =  $split . '...';
                                            } else {
                                                $new_env = $env;
                                            }
                                        }
                                        @endphp
                                    {{-- <h6 id="env" class="mb-0 home-environment-content1">{{ $new_env }} Environment</h6> --}}
                                    <p class="mb-0 name-custom1" id="env" style="text-align: right;">{{ $new_env }}</p>
                                    @endif
                                @endforeach
                            </div>
                            @if($user_avatar=='')
                            <span id="text_img" data-letters="{{$text}}"></span>
                            @else
                            <span><img src="{{$user_avatar}}" alt="profile" class="profileImg"></span>
                            @endif
                            
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile-settings"><span class="profileIco"><img src="<?php echo URL::to('/'); ?>/images/profile.svg" alt="thumbnail"></span>View Profile</a>
                                    
                                    @php $allow_organisation_create = array(363, 1707, 3452, 130, 1705); @endphp
                                    
                                    @if(in_array(Session::get('user_id'), $allow_organisation_create))
                                    <a class="dropdown-item dropdownItembold arrowright-hide add_env" href="javascript:void(0)" id="submenu">
                                        <span class="profileIco plus">
                                            <img class="add_env_show" src="{{ asset('images/plus_dark.png') }}">
                                            <img class="add_env_hide" src="{{ asset('images/minus_dark.png') }}">
                                        </span>Add Organization
                                    </a>
                                    <div id="add_envnmnt" style="display:none">
                                        <div class="input-group mb-3">
                                            <span class="fs-16 mb-3 text-danger small" id="org_name_err" style="display:none;"></span>
                                            <input type="text" id="org_name" class="form-control addorginput" aria-describedby="basic-addon2">
                                            <div class="input-group-append btndiv">
                                                <button class="btn btn-success submit_org addorgbtn" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <a class="dropdown-item dropdownItembold arrowright-hide" href="javascript:void(0)" id="submenu" onclick="restrictCreateOrganisation();">
                                        <span class="profileIco plus">
                                            <img class="add_env_show" src="{{ asset('images/plus_dark.png') }}">
                                            <img class="add_env_hide" src="{{ asset('images/minus_dark.png') }}">
                                        </span>Add Organization
                                    </a>
                                    @endif
                                    
                                    @if(!empty(Session::get('user_id')))
                                    <a class="dropdown-item dropdownItembold arrowright-hide" href="/games" id="submenu">
                                        <span class="profileIco game">
                                            <img class="" src="{{ asset('/images/outline.png') }}">
                                        </span>Games
                                    </a>
                                    
                                    <a class="dropdown-item dropdownItembold arrowright-hide layut" href="javascript:void(0)" id="openOrganizationSettings">
                                        <span class="profileIco copy-mail">
                                            <img src="{{ asset('/assets/images/settings.svg') }}" alt="Copy Org Email">
                                        </span>Organization Settings
                                    </a>
                                    @endif
                                    
                                    <a class="dropdown-item bold dropdownItembold arrowright-hide" href="javascript:void(0)" id="submenu">
                                        <span class="profileIco">
                                            <img src="{{ asset('/images/check-box.svg') }}" alt="thumbnail">
                                        </span>Environment
                                    </a>
                                    <div class="submenu environment-select" style="display: block !important;">
                                        @php $processed_ids = []; @endphp
                                        <ul class="orgLi">
                                            @foreach($data_dropdown['organization'] as $organization)
                                            @php
                                            $org_id = isset($organization['id']) ? $organization['id'] : 0;
                                            $orgname = addslashes($organization['name']);
                                            if(in_array($org_id, $processed_ids)){
                                                continue;
                                            }
                                            $processed_ids[] = $org_id;
                                            $child_class    = '';
                                            $wrap_class     = '';
                                            @endphp
                                            @if(isset($organization['parent_org_id']) && $organization['parent_org_id'] > 0)
                                            @php
                                            $child_class    = 'org-child';
                                            $wrap_class     = 'org-parent-'.$organization['parent_org_id'];
                                            if(!in_array($organization['parent_org_id'],$parent_org_ids)){
                                                $parent_org_ids[] = $organization['parent_org_id'];
                                            }
                                            @endphp
                                            @endif
                                            @if($organization['organization_type']==2)
                                            <li class="org-wrap" id="org-{{$org_id}}">
                                                <a href="javascript:void(0)" class="organization_names dropdown-item" id="env_{{$org_id}}" onclick="switch_environment({{$org_id}},'Home',{{$organization['role_id']}})">
                                                    <input type="hidden" name="orgid" id="orgid" value="{{ $org_id }}">
                                                    <span class="profileIco invisible">
                                                        <img src="<?php echo URL::to('/'); ?>/images/check-box.svg" alt="thumbnail">
                                                    </span>
                                                    Home
                                                </a>
                                            </li>
                                            @else
                                            <li class="org-wrap {{ $wrap_class }} {{$child_class}}" id="org-{{$org_id}}">
                                                <a href="javascript:void(0)" class="organization_names dropdown-item" id="env_{{$org_id}}" onclick="switch_environment({{$org_id}},'{{ $orgname }}',{{$organization['role_id']}})">
                                                    <span class="profileIco invisible">
                                                        <input type="hidden" name="orgid" id="orgid" value="{{ $org_id }}">
                                                        <input type="hidden" name="orgid" class="orgid" value="{{ $org_id }}">
                                                        <img src="<?php echo URL::to('/'); ?>/images/check-box.svg" alt="thumbnail">
                                                    </span>
                                                    {{$organization['name']}}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>

                                    <a class="dropdown-item" href="/logout"><span class="profileIco"><img src="<?php echo URL::to('/'); ?>/images/power.svg" alt="thumbnail"></span>Logout</a>
                                </div>
                            </div>
                            
                            @else
                            {{-- <button class="btn btn-primary md">Demo</button> --}}
                            <button class="btn btn-white md" data-bs-toggle="modal" data-bs-target="#login-modal">Login</button>
                            @endif
                        </div>
                    </li>
                </ul>
                <div class="menu-footer-wrap">
                    <div class="app-download">
                        <a href=""><img src="{{ asset('/assets/images/home/appstore.png') }}" alt="appstore-img"></a>
                        <a href=""><img src="{{ asset('/assets/images/home/google.png') }}" alt="google-img"></a>
                    </div>
                    <div class="social-media-btn">
                        <a href="https://www.facebook.com/snipbackapp/" target="_blank" title="Facebook"><i class="icon icon-facebook"></i></a>
                        <a href="https://twitter.com/snipbackapp" target="_blank" title="Twitter"><i class="icon icon-twitter"></i></a>
                        <a href="https://www.instagram.com/snipbackpro/" target="_blank" title="Instagram"><i class="icon icon-instagram"></i></a>
                        <a href="https://www.linkedin.com/showcase/snipback/" target="_blank" title="Linkedin"><i class="icon icon-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UCfBiqr-7am068jPwRVwsOmA/videos" target="_blank" title="YouTube"><i class="icon icon-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- login modal -->
        <div class="modal login-modal lenis lenis-smooth custom-modal fade" id="login-modal" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true"> {{--  style="top: 80px;" --}}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="logo-wrap">
                            <img src="{{ asset('/assets/images/home/logo-dark.png') }}" alt="logo">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="userlogin" class="login-form">
                            <div class="row gy-4">
                                <!-- danger Alert -->
                                <div class="alert alert-danger" id="login_result" role="alert" style="display: none;">
                                    <strong> Incorrect Email Address or Password </strong>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon icon-email sm"></i>
                                            </span>
                                            <input type="email" class="form-control form-input input-img1" name="emailaddress" id="email_address"  placeholder="Email Address">
                                        </div>
                                        <div class="error">  <span class="text-danger text-danger validatnText" id="errr_email"></span> </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon icon-security sm"></i>
                                            </span>
                                            <input type="password" id="password" name="userpassword" oninput="return checkPasswordStrength(this)" class="form-control form-input input-img2" placeholder="Password" >
                                        </div>
                                        <div class="error"> <span class="text-danger text-danger validatnText" id="err_password"></span> </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- reCAPTCHA widget -->
                                    @if(env('APP_ENV')== "qa")
                                    <div class="g-recaptcha" data-sitekey="6LfKdk0pAAAAAInO83AFlXYVy2_s2-u2EpWn34Xb"></div>
                                    {{-- <div class="g-recaptcha" data-sitekey="6LfL96wpAAAAAHtvBvYeidKX1tDj57HFBpBcLKu7"></div> --}}
                                    @elseif(env('APP_ENV')== "uat" )
                                    <div class="g-recaptcha" data-sitekey="6LeMok0pAAAAAE39AoZ8IHfjwYWjwHNUVuBwDCmz"></div>
                                    {{-- <div class="g-recaptcha" data-sitekey="6LeX36MpAAAAAMPt-b4sbY4z5sI50xo1fnVpMM0q"></div> --}}
                                    @endif
                                </div>
                                <div class="login-captchaerror text-danger mt-2 text-center"></div>
                                <div class="col-lg-12">
                                    <div class="submit-btn">
                                        <button id="login_submit" onclick="myFunction()" class="btn btn-primary sm btn-submit">SIGN IN<i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="forget-password-wrap">
                            <a href="/forgotpassword" class="forget-password">Forgot password?</a>
                        </div>
                        <div class="sign-in-button">
                            <a href="{{ url('login/google') }}" class="btn btn-white signin-btn sm"><i class="icon icon-google-black sm"></i> Sign In with Google</a>
                            <a href="{{ url('login/apple') }}" class="btn btn-white signin-btn sm"><i class="icon icon-apple-black sm"></i> Sign In with Apple</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="signup-btn">
                            <small><a href="/signup">Sign Up</a> for SNIPBACK</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="organization_settings_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button"  id= "organization_settings_close" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="loader" id="org_settings_loader" style="display: block;">
                        <img src="/upload/orange-loader.gif" style="top: 50%!important;">
                    </div>
                    <div class="modal-body">
                        <section class="popup-section org_setting_popup_section">
                            <div class="d-grid btn-section">
                                <button class="btn btn-primary org_setting_title" type="button">ORGANIZATION SETTING</button>
                                
                            </div>
                            <div class="org_setting_list">
                                <p class="mb-0">ORGANIZATION</p>
                                <P class="mb-0" id="org_setting_org_name"></P>
                            </div>
                            <div class="org_setting_list snip_duration_div">
                                <p class="mb-0">SNIP DURATION</p>
                                <div class="d-flex justify-content-end">
                                    <p class="mb-0 seconds-content mr-2">10 sec</p>
                                    @php
                                    $snipduration =  Config::get("global.con.snipduration");
                                    @endphp
                                    <select class="form-select select-form select-form snipduration  edit-input hide mr-2" id="snipduration_update">
                                        @foreach($snipduration as $key => $duration)
                                        <!-- @php
                                            $dura  = explode(" ",$duration);
                                            @endphp -->
                                        <option value="{{ $duration }}" >{{ $key }}</option>
                                        @endforeach
                                    </select>
                                        <!-- <input type="text" class="form-control snipduration edit-input hide mr-2" id="snipduration_update" pattern="\d{2}" maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '');"> -->
                                    <div class="sec-text hide mr-2"></div>
                                    <p class="icon-container layout_duration mb-0">
                                        <span class="edit-icon snip_edit"><i class="fas fa-edit fa-1x"></i></span>
                                        <span class="tick-icon snipupdate hide" id="updation_duration"><i class="fas fa-check fa-1x"></i></span>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="org_setting_list">
                                <p class="mb-0 mt-1">ENABLE PRE-TAGGING</p>
                                <div class="form-check form-switch custom-toggle-btn">
                                    <input class="org_setting_form_check_input form-check-input" type="checkbox" role="switch"
                                        id="org_setting_pre_tagging" checked>
                                </div>
                            </div>
                            <div class="org_setting_list org_setting_recruit" style="display:none;">
                                <p class="mb-0 mt-1">ENABLE RECRUIT</p>
                                <div class="form-check form-switch custom-toggle-btn">
                                    <input class="org_setting_form_check_input form-check-input" type="checkbox" role="switch"
                                        id="org_setting_recruit" checked>
                                </div>
                            </div>
                            <div class="org_setting_list clickable" data-action="connect_to_stripe">
                                <p id="org_setting_stripe" class="mb-0">CONNECT STRIPE</p>
    
                            </div>
    
                            @php  $allowed_users = array(363, 1707, 4948, 197);   @endphp
                            @if(in_array(Session::get('user_id'), $allowed_users))
                                <div class="org_setting_list clickable" data-action="facility_cams">
                                    <p id="org_setting_facilitycam" class="mb-0">FACILITY CAMERAS</p>
                                </div>
                            @endif
                            
                            <div class="org_setting_list" id = "org_setting_email_div">
                                <p class="mb-0">COPY ORGANIZATION EMAIL ADDRESS</p>
                                <P class="mb-0">
                                    <img src="images/copy_icon.png" class="copy_icon" id="org_setting_copy" >
                                    <input type="hidden" id="org_setting_email" value="">
                                </P>
                            </div>

                            <div class="org_setting_list clickable" id = "org_setting_leave_div" data-action="leave_organization">
                                <p class="mb-0">LEAVE ORGANIZATION</p>
                                <P class="mb-0"></P>
                            </div>
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="facilityCams" tabindex="-1" role="dialog" aria-labelledby="facilityCamsLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content col-12">
                    <div class="modal-header">
                        <h5 class="modal-title">VENUE/LOCATION</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container pt-1">
                            <div class="venues row" id="venues"></div>
                            <form action="{{ route('saveFacilityCamRooms') }}" method="POST" class="save-facility-rooms row">
                                <div class="create-venues table-responsive row mt-4">
                                    <table class="table table-borderless">
                                        <tbody id="tbody">
                                    
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col text-center">
                                    <input type="hidden" name="deleted_camera_ids" id="deleted_camera_ids">
                                    <button type="submit" class="btn btn-primary create-btn border-0 btn-popup width-100 bgcolor-red saveFacilityRooms">SAVE</button>
                                    <button type="submit" class="btn btn-primary border-0 btn-popup width-100 bgcolor-red updateFacilityRooms" style="display:none;">UPDATE</button>
                                    <a class="btn btn-primary border-0 btn-popup width-100 cancelFacilityRooms" style="display:none;">CANCEL</a>
                                    <a class="btn btn-primary border-0 btn-popup width-100 bgcolor-red showCameraGames back-to-venue" style="display:none;">BACK</a>
                                    <a class="addMainLocation" id="addMainLocation"><img src="../assets/images/add-green.png"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @php
            $teamJoininfostats ="-1";
            $teamJoininfomsg ="";
        
            if(!empty($teamJoinInfo)){
                $teamJoininfostats = $teamJoinInfo['status'];
                $teamJoininfomsg   = $teamJoinInfo['message'];
            }
        @endphp
        <input type="hidden" id="jointeamstatus" value="{{ $teamJoininfostats }}">
        <input type="hidden" id="jointeammsg" value="{{ $teamJoininfomsg }}">
    </div>
    
    @include('footerbuttons')


    <!-- script -->

    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script> --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="https://snipback.com/assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="<?php echo URL::to('/');?>/js/popper.min.js"></script>
    <script src="<?php echo URL::to('/');?>/js/sweetalert.min.js"></script>

    <script src="<?php echo URL::to('/'); ?>/js/moment.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script src="<?php echo URL::to('/'); ?>/./assets/vendor/rsa/bin/jsencrypt.min.js?v={{$time}}"></script>
    <script src="<?php echo URL::to('/'); ?>/js/enc-rsa.js?v={{$time}}"></script>

    <script>
        var devTool = '<?php echo env('ENABLE_DEV_TOOL') ?>';
        var devAccess = '<?php echo env('DEV_TOOL_ACCESS') ?>';
        var parentOrgIds = '<?php echo json_encode($parent_org_ids) ?>';
    </script>

    <script src="<?php echo URL::to('/'); ?>/js/custom.min.js?v={{$time}}"></script>
    <script src="<?php echo URL::to('/'); ?>/js/countries.js?v={{$time}}"></script>
    <script src="<?php echo URL::to('/'); ?>/js/common-scripts.js?v={{$time}}"></script>

    {{-- <script src="<?php echo URL::to('/'); ?>/js/home-page.js?v={{$time}}"></script> --}}
    <script src="<?php echo URL::to('/'); ?>/js/organization_settings.js?v={{$time}}"></script>

    <!--
        DO NOT REMOVE!!
        This tag is used for Interstellar marketing purposes and it's required to remain here
    -->
    <script type="text/javascript">
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript"; mf.defer = true;
            mf.src = "//cdn.mouseflow.com/projects/a3174259-0f45-4fbd-b69b-92d9ac947954.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
        for (const [key, value] of Object.entries(JSON.parse(parentOrgIds))) {
            $('.environment-select #env_'+value).addClass('org-parent');
            $('#org-'+value).append('<i class="org-expand fas fa-chevron-down" data-id="'+value+'"></i>');
            $('.org-parent').prop("onclick", null).off("click");
        }
    </script>
    <!-- END DO NOT REMOVE SECTION -->
    
    <?php if(isset($widget)){?>

    <script type="text/javascript">
        var widget = "<?php echo $widget; ?>";
    </script>
    
    <?php }else{ ?>
    
    <script type="text/javascript">
        var widget = "-1";
    </script>
    
    <?php } ?>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <!-- Bootstrap js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Gsap -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <!-- locomotive scroll -->
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>

   
    <!-- recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


   <!-- slider -->
   <script src="{{ asset('/js/home/slick.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- magnify -->
    <script src="{{ asset('/js/home/jquery.magnify.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('/js/home/custom.js') }}"></script>
    <script src="<?php echo URL::to('/'); ?>/js/common.js"></script>

     <!-- flickity script from CDN without integrity attribute -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('.main-carousel').flickity({
                // options
                cellAlign: 'center',
                contain: true,
                adaptiveHeight: true,
            });
        });
    </script>

   

    <script type="text/javascript">
        (function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
            'https://hipoint.ladesk.com/scripts/track.js',
            function(e){ LiveAgent.createButton('jxed2nva', e); });
    </script>

    <script>

        $(document).on("click", function(event){
            var $trigger = $(".dropdown");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".dropdown-menu").removeClass('show');
            }
        });

    </script>
    
</body>
</html>
