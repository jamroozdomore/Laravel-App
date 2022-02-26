@extends('layouts.userlayout')
@section('title', 'Home Page')
@section('main')
@section('navbrand', 'home')
		<main class="">
			<section id="section1" class="w-[100%] h-fit bg-white container mx-auto flex flex-wrap overflow-hidden">

				<div class="lg:w-[40%] w-full lg:pt-64 md:my-20 my-20 text-center px-4 lg:text-left">
					<h1 class="border-l-2 w-fit mx-auto border-[#ED2775] text-[#ED2775] font-bold pl-2 lg:mx-0">
						Secure Application
					</h1>
					<h1 class="lg:text-5xl md:text-3xl text-2xl font-bold leading-tight	mt-3">
						Manage All of Your Stuff Using a Texap
					</h1>
					<p class="leading-2 text-gray-700 pb-8 pt-5">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt eifend odio viverra diam aliquet donec again.
					</p>
					<a href="{{url('/contact')}}" class="text-sm shadow-md shadow-red-800 font-bold bg-gradient-to-r from-pink-600 to-orange-500 text-white px-8 py-4 rounded-full hover:bg-gradient-to-r hover:from-pink-600 hover:to-pink-500">
						Start Free Trial
					</a>
				</div>

				<div class="lg:w-[60%] w-full mt-auto mx-auto">
					<div class="px-14 pt-5">
						<img src="img/banner-img.png" alt="" class="">
					</div>
				</div>
			</section>

		</main>
@endsection 