<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <style>
        * {
        	box-sizing: border-box;
        }
        body {
            height: 100%;
            width: 100%;
            /* padding: 20px; */
            margin: 0;
            display: flex;
            font-family: sans-serif;
        }
        .menu {
            /* border-radius: 7.5px; */
            height: 100%;
            min-height: 100vh;
            background: -webkit-linear-gradient(-45deg, #3ca9e2 0%, #3ca9e5 100%);
            padding: 15px 15px 0;
            width: 50px;
            transition: width 0.25s;
            /* overflow: hidden; */
            display: inline-block;
        }
        .menu.active {
            width: 200px;
        }
        .menu.active .heading p {
            opacity: 1;
        }
        .menu.active .wrap {
            opacity: 1;
            height: auto;
        }
        .menu.active .menu-icon span {
            transform: rotateY(90deg);
        }
        .menu.active .menu-icon span:first-child {
            transform: rotate(-45deg);
        }
        .menu.active .menu-icon span:last-child {
            transform: rotate(45deg);
        }
        .menu.active .menu-icon span:first-child {
            top: 0;
        }
        .menu.active .menu-icon span:last-child {
            top: 2px;
        }
        .menu .wrap {
            min-width: calc(200px - 30px);
            opacity: 0;
            transition: width 0.25s, opacity 0.25s;
            height: 0;
            overflow: hidden;
        }
        .menu .heading {
            padding: 0 0 15px;
            margin-bottom: 10px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }
        .menu .heading p {
            transition: opacity 0.25s;
            opacity: 0;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .menu .heading .menu-icon {
            position: absolute;
            right: 0;
            top: -5px;
            cursor: pointer;
            /* height: 14px; */
            width: 20px;
            color:white;
            font-size:22px;
        }
        .menu .heading .menu-icon span {
            transition: transform 0.25s, right 0.25s;
        }
        .menu .heading .menu-icon span:first-child {
            transform-origin: top right;
        }
        .menu .heading .menu-icon span:last-child {
            transform-origin: bottom right;
        }
        .menu .heading .menu-icon span:first-child, .menu .heading .menu-icon span:last-child {
            position: relative;
            right: 3px;
        }
        .menu .heading .menu-icon p {
            margin: 0;
            padding: 0;
        }
        .menu .heading .menu-icon span {
            width: 100%;
            height: 2px;
            display: block;
            margin-bottom: 4px;
            background-color: white;
        }
        .menu .dropdown {
            position: relative;
        }
        .menu .dropdown p {
            cursor: pointer;
        }
        .menu .dropdown:before {
            position: absolute;
            top: 8px;
            right: 0;
            height: 0;
            width: 0;
            border-top: 5px solid transparent;
            border-left: 8px solid white;
            border-bottom: 5px solid transparent;
            content: "";
            transition: transform 0.25s;
        }
        .menu .dropdown.js-opened:before {
            transform: rotate(90deg);
        }
        .menu .dropdown a {
            margin-left: 10px;
        }
        .menu .dropdown + a {
            margin-top: 0;
        }
        .menu .dropdown + .title {
            margin-top: 5px;
        }
        .menu .dropdown .links {
            overflow: hidden;
        }
        .menu .dropdown .links a {
            position: relative;
            padding-left: 10px;
            z-index: 1;
            text-decoration: none;
        }
        /* .menu .dropdown .links a:before {
            z-index: -1;
            position: absolute;
            left: 0;
            top: calc(50% - 2px);
            content: "";
            display: inline-block;
            vertical-align: middle;
            width: 4px;
            height: 4px;
            background-color: white;
            border-radius: 4px;
            transition: background-color 0.25s, border-radius 0.25s, width 0.25s, height 0.25s, top 0.25s;
        } */
        /* .menu .dropdown .links a:hover:before {
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            width: 100%;
            height: 100%;
            top: 0;
        } */
        .menu .title {
            color: rgba(255, 255, 255, 0.75);
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            padding-top: 10px;
            margin-top: 10px;
        }
        .menu a {
            text-decoration: none;
        }
        .menu p {
            cursor: default;
        }
        .menu a, .menu p {
            margin: 5px 0;
            padding: 5px 0;
            display: block;
            color: white;
            font-size: 14px;
            line-height: 16px;
        }
        .content {
            /* border: 1px solid rgba(0, 0, 0, 0.15); */
            /* display: flex;
            flex-wrap: wrap; */
            flex-grow: 1;
            /* margin-left: 20px; */
            /* border-radius: 7.5px; */
            overflow: auto;
        }
        .content .header {
            width: 100%;
            min-height: 50px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            padding: 10px 20px;
            background: -webkit-linear-gradient(-45deg, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.1) 100%);
        }
        .content .header p, .content .header a {
            margin: 5px 0;
            color: #3ca9e2;
        }
        .content .header p {
            margin-right: 10px;
        }
        .content .header a {
            color: #3ca9e2;
        }
        .content .body {
            padding: 5px;
            display: flex;
            width: 100%;
            /* background: -webkit-linear-gradient(-45deg, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.1) 100%); */
            /* height: 100%; */
        }

        .main{
            display: flex;
            width: 100%;
        }

        .display-comment .display-comment {
            margin-left: 15px;
        }

        .container{
            padding: 0px !important;       
        }
    
        /* Small devices (tablets, 768px and up) */
        @media screen and (max-width: 768px) {
            .menu {
                /* border-radius: 7.5px; */
                background: -webkit-linear-gradient(-45deg, #3ca9e2 0%, #3ca9e5 100%);
                min-height: auto;
                height: 50px;
                padding: 15px 15px;
                width: 100%;
                transition: width 0.25s;
                /* overflow: hidden; */
                display: inline-block;
            }
            .menu .heading {
                padding: 0 0 5px;
                margin-bottom: 0px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
                overflow: hidden;
                border-bottom: 0px;
            }
            .menu .heading .menu-icon {
                position: absolute;
                right: 0px;
                /* top: 0px; */
                cursor: pointer;
                /* height: 14px; */
                width: 20px;
            }
            .menu.active {
                width: auto;
                height: auto;
            }
            .main{
                flex-direction: column;
            }
            .menu a{
                margin: 5px 0;
                padding: 5px 0;
                display: block;
                color: white;
                font-size: 15px;
                line-height: 16px;
                height: 25px;
                /* border: 1px solid red; */
            }
            .menu .title {
                display: none;
            }
            .menu.active .heading p {
                font-size: 1.5em;
                color: #fff;
                text-align: center
            }

            .display-comment .display-comment{
                margin-left:0px; 
            }

            .content .body{
                padding: 0px 0px;
            }

        }
        @media (min-width: 576px){
            .container{
                max-width: none !important;       
            }
        }
        @media (min-width: 1200px){
            .container{
                width: 100% !important;       
            }
        }
        @media (min-width: 992px){
            .container{
                width: 100% !important;       
            }
        }
        @media (min-width: 768px){
            .container{
                width: 100% !important;       
            }
        }
        
    </style>
</head>

<body>
<div class="main">
@include('partials.navbar')

<div class="content">
	{{-- <div class="header"></div> --}}
	<div class="body">
        @yield('content')
	</div>
</div>
</div>
<script>

menuDropdowns = function(){
	$('.dropdown').each(function(){
		const links = $(this).find('.links');
		const h = links.height();
		
		links.css('height', '0');
		
		$(this).click(function(){
			if ($(this).toggleClass('js-opened').hasClass('js-opened')) {
				links.css('height', h);
			} else {
				links.css('height', 0);
			};
			
		});
	});
};

$( document ).ready(function() {
	
	menuDropdowns();
	
	$('.js-toggle-menu').click(function(){
		$('.menu').toggleClass('active');
	});	
});
</script>
</body>
</html>