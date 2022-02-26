<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
		
	<header class="sticky top-0">
		  <nav class="p-3 bg-white md:flex md:items-center md:justify-around">
				<div class="flex justify-between items-center ">
					<span class="flex flex-col items-center text-2xl font-[Poppins] cursor-pointer">
						<img class="h-10 inline"
						src="img/svg/logo.png">
						<h2 class="text-sm ml-8 text-[#FA6153] font-[fantasy]">@yield ('navbrand')</h2>
					</span>
						</div>
				<ul class="md:flex md:items-center z-[-1] md:z-auto bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 top-[-400px]">
					<li class="mx-4 my-6 md:my-0">
						<a href="{{url('/')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Home</a>
					</li>
					<li class="mx-4 my-6 md:my-0">
						<a href="{{url('/about')}}" class="text-sm font-bold hover:text-pink-500 duration-300">About Us</a>
					</li>
					<li class="mx-4 my-6 md:my-0">
						<a href="{{url('/page')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Pages</a>
					</li>
					<li class="mx-4 my-6 md:my-0">
						<a href="{{url('/blog')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Blog</a>
					</li>
					<li class="mx-4 my-6 md:my-0">
						<a href="{{url('/contact')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Contact</a>
					</li>
					<a href="{{url('contact')}}" class="text-sm shadow-lg shadow-pink-300 font-bold bg-gradient-to-r from-pink-600 to-orange-500 text-white px-8 py-4 rounded-full hover:bg-gradient-to-r hover:from-pink-600 hover:to-pink-500 md:ml-5 md:w-[auto] w-full">
					Get Started
					</a>
				</ul>

  				</nav>
	</header>

		@yield('main')

	<footer class="h-fit bg-[#262A37] pt-20 pb-28 mx-auto">
					<div class="text-center text-white mx-auto">
						<img class="mx-auto" src="img/svg/favicon.png" alt="" width="60px">
						<h2 class="text-3xl font-bold my-5">Texap</h2>
						<div class="mt-8 border-b-2 border-b-[#3D4354] pb-10">	
							<a href=""><i class="mx-1 bg-[#3D4354] rounded-full hover:bg-[#FA6153] duration-300 p-2.5 bi bi-facebook"></i></a>
							<a href=""><i class="mx-1 bg-[#3D4354] rounded-full hover:bg-[#FA6153] duration-300 p-2.5 bi bi-twitter"></i></a>
							<a href=""><i class="mx-1 bg-[#3D4354] rounded-full hover:bg-[#FA6153] duration-300 p-2.5 bi bi-linkedin"></i></a>
							<a href=""><i class="mx-1 bg-[#3D4354] rounded-full hover:bg-[#FA6153] duration-300 p-2.5 bi bi-messenger"></i></a>
							<a href=""><i class="mx-1 bg-[#3D4354] rounded-full hover:bg-[#FA6153] duration-300 p-2.5 bi bi-github"></i></a>
						</div>
						<div class="">
							<ul class="flex justify-center my-10">
								<li class="mx-3 my-6 md:my-0">
									<a href="{{url('503')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Service</a>
									</li>
								<li class="mx-3 my-6 md:my-0">
									<a href="{{url('503')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Support</a>
								</li>
								<li class="mx-3 my-6 md:my-0">
									<a href="{{url('503')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Privacy</a>
								</li>
								<li class="mx-3 my-6 md:my-0">
									<a href="{{url('/503')}}" class="text-sm font-bold hover:text-pink-500 duration-300">FAQ's</a>
								</li>
								<li class="mx-3 my-6 md:my-0">
									<a href="{{url('/contact')}}" class="text-sm font-bold hover:text-pink-500 duration-300">Contact</a>
								</li>
							</ul>
						</div>
						<div>
							<h1 class="text-gray-300 text-sm">Copyright © 2022 <span class="text-white font-bold">Texap</span>. All Rights Reserved by <span class="text-white font-bold">EnvyTheme</span></h1>
						</div>
					</div>
	</footer>


</body>
</html>
