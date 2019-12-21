@extends('layout.master')

@section('title','about me')

@section('content')
	
	<div class="about">
		<div class="row">
			<div class="about_1 col-sm-6">
				<img src="{{URL::asset('images/a.jpg')}}" width="90%" height="400">
				<div class="about_11">
					<h3>BECOME MY BFF</h3>
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="mailto::naymyoooit888@gmail.com"><i class="fa fa-envelope-open"></i></a>
					<a href="https://twitter.com/NayMyoO21471085"><i class="fa fa-twitter-square"></i></a>

				</div>
			</div>
			<div class="about_2 col-sm-6">
				<h3>HI, MY NAME IS <b><i>NAY MYO OO</i></b></h3>
				<P>I am from <b>Naung hkio</b>. Now, I live in <b>Mandalay</b>. I want to be a web developer. I am studying at <b>Computer University of Mandalay.</b></P>

				<h3>That is some of my skill set</h3>
				<h6>HTML/CSS</h6>
				<div class="progress">
					<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:90%;"></div><p style="font-size: 2em; line-height: 20px;">90%</p>
				</div>

				<h6>JAVASCRIPT</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%;"></div><p style="font-size: 2em; line-height: 20px;">70%</p>
				</div>

				<h6>JQUERY</h6>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%;"></div><p style="font-size: 2em; line-height: 20px;">75%</p>
				</div>
				<h6>PYTHON</h6>
				<div class="progress">
					<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:50%;"></div><p style="font-size: 2em; line-height: 20px;">50%</p>
				</div>
				<h6>PHP</h6>
				<div class="progress">
					<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width:80%;"></div><p style="font-size: 2em; line-height: 20px;">80%</p>
				</div>

				<h6>NODEJS</h6>
				<div class="progress">
					<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:50%;"></div><p style="font-size: 2em; line-height: 20px;">50%</p>
				</div>

				
			</div>
		</div>
		
	</div>

@stop