<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/bundle.css')}}" type="text/css"/>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{url('frontend/images/favicon/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('frontend/images/favicon/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('frontend/images/favicon/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('frontend/images/favicon/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{url('frontend/images/favicon/apple-touch-icon-60x60.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{url('frontend/images/favicon/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{url('frontend/images/favicon/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{url('frontend/images/favicon/apple-touch-icon-152x152.png')}}" />
    <link rel="icon" type="image/png" href="{{url('frontend/images/favicon/favicon-196x196.png')}}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{url('frontend/images/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{url('frontend/images/favicon/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{url('frontend/images/favicon/favicon-16x16.png')}}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{url('frontend/images/favicon/favicon-128.png')}}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


    <!-- open graph -->
	<meta property="og:site_name" content="Template">
     <meta property="og:url" content="http://template/" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="template" />
     <meta property="og:description" content="template" />
     <meta property="og:image" content="http://template/" />
	 <meta property="og:locale" content="ru_RU">
     <!-- open graph -->
</head>
<body>
<header>
    <div class="container">
        <div class="main-toolbar">
            <div class="main-links d-mobile">
                <ul>
                    <li><a href="javascript:void(0)" class="open-menu"><i class="icon-menu"></i></a></li>
                    <li><a href="javascript:void(0)" class="open-search"><i class="icon-search"></i></a></li>
                </ul>
            </div>
            <div class="main-logo">
                <a href="javascript:void(0)"><img src="{{url('frontend/images/logo-colored.svg')}}" alt="logo"></a>
            </div>
            <div class="main-menu">
                <div class="menu-scroll">
                    <ul>
                        <li><a href="javascript:void(0)">CuraLin</a></li>
                        <li><a href="javascript:void(0)">Shop</a></li>
                        <li><a href="javascript:void(0)">Blog</a></li>
                        <li><a href="javascript:void(0)">Refer A Friend</a></li>
                        <li class="dropdown"><a href="javascript:void(0)">About</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="javascript:void(0)">Our Story</a></li>
                                    <li><a href="javascript:void(0)">Partnerships</a></li>
                                    <li><a href="javascript:void(0)">Contact</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-search">
                <form>
                    <button type="button"><i class="icon-search"></i></button>
                    <label>
                        <input type="text" placeholder="Type your keyword">
                    </label>
                </form>
            </div>
            <div class="main-links">
                <ul>
                    <li><a href="javascript:void(0)" class="open-modal" data-fancybox data-src="#login-modal">
                        <span>Account</span> <i class="icon-user"></i></a></li>
                    <li><a href="javascript:void(0)" class="open-modal" data-fancybox data-src="#side-cart">
                        <span>Cart - 0</span> <i class="icon-cart" data-items="0"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>