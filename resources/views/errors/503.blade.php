@extends('layouts.error')
@section('title', '503 Service Unaviable')

@section('code', '503')
@section('message', 'Under Construction')
@section('content')
	<div>
		<a href="{{url('/')}}" class="cursor-pointer p-4 bg-white rounded-full text-pink-700 font-bold hover:bg-red-500 hover:text-white hover:border-2 duration-300">
			HOME PAGE
		</a>
	</div>	
@endsection

