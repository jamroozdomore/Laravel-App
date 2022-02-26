@extends('layouts.userlayout')
@section('title', 'About Page')
@section('main')
@section('navbrand', 'About')
		<main class="min-h-screen ">
				<div class="container text-center py-16 mx-auto">
					<h1 class="pb-10">
						Trusted by world famous companies:
					</h1>
					<ul class="flex items-center shrink-0 overflow-x-auto gap-6 mx-10">
						<li class="shrink-0 my-5"><img src="img/svg/partner1.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner2.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner3.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner4.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner5.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner6.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner7.png" alt=""></li>
						<li class="shrink-0 my-5"><img src="img/svg/partner8.png" alt=""></li>
					</ul>
				</div>
				<div class="flex h-fit flex-wrap">
					<div class="xl:w-1/2 xl:pl-40 xl:pr-10 xl:my-auto text-[#ED2775] font-2xl w-full bg-white text-black flex flex-col px-20">
						<h1 class="lg:text-4xl md:text-3xl text-2xl font-bold leading-tight	mt-10">
							Most Probably You Are Getting Best App Ever
						</h1>
						<p class="leading-2 text-gray-800 pb-8 pt-5">
							Cloud based storage for your data backup just log in with your mail account from play store and using whatever you want for your business purpose orem ipsum dummy text. Never missyour chance its just began.
						</p>
						<div class="flex">
							<i class="bi bi-cloud-download text-[#ED2775] text-3xl mr-3"></i>
							<span>
								<h1 class="font-bold text-md">Free Download App</h1>
								<p  class="leading-2 text-gray-800 py-2">Just log in with your mail account from play store and using whatever you want for your business purpose.</p>
							</span>
						</div>
						<div class="flex">
							<i class="bi bi-award text-[#ED2775] text-3xl mr-3"></i>
							<span>
								<h1 class="font-bold text-md">Trusted and Reliable</h1>
								<p  class="leading-2 text-gray-800 py-2">Most provabily best you can trust on it, just log in with your mail account from play store and using whatever you want for your business.</p>
							</span>
						</div>
						<div class="flex">
							<i class="bi bi-gear text-[#ED2775] text-3xl mr-3"></i>
							<span>
								<h1 class="font-bold text-md">Cloud Storage</h1>
								<p  class="leading-2 text-gray-800 py-2">Cloud based storage for your data backup just log in with your mail account from play store and using whatever you want for your business purpose orem ipsum dummy.</p>
							</span>
						</div>
						<div class="mb-10 mt-5">
							<a href="{{url('/contact')}}" class="text-sm shadow-md shadow-red-800 font-bold bg-gradient-to-r 		from-pink-600 to-orange-500 text-white px-8 py-4 rounded-full hover:bg-gradient-to-r hover:from-pink-600 hover:to-pink-500">
								Start Free Trial
							</a>
							<a href="{{url('/503')}}" class="font-bold text-sm border-b-2 border-black mx-4 hover:text-[#ED2775] hover:border-[#ED2775] hover:border-0 duration-300">
								See All Features
							</a>
						</div>

					</div>
					<div class="xl:w-1/2 w-full">
					<img src="img/overview1.jpeg" alt="" class="w-full py-10 xl:px-0 px-10">
					</div>
				</div>
		</main>
@endsection 