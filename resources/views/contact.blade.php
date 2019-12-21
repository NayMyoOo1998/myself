@extends('layout.master')

@section('title','Contact')

@section('content')
	<div class="contact container-fluid">
		
		<div class="contact_title">
			<h1>Say Hello</h1>
			<h2>I'm ready for you</h2>
		</div>

		<div class="contact_form">
			<form id="contact_form">
				<input type="text" name="name" class="name" placeholder="Your name"><br>
				<input type="email" name="email" class="email" placeholder="Your email"><br>
				<textarea name="message" class="message" placeholder="Message" rows="4" required></textarea><br>
				<input type="submit" class="submit" value="SEND MESSAGE">
			</form>
		</div>

		<div class="contact_social">
			<h1>Here, you can contact me some</h1>
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d817.0965481772986!2d96.0772152344087!3d21.94892006564185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d99026a97a3%3A0xeb9f82bae895c3f1!2z4YCY4YCs4YCB4YCx4YCZ4YCs4YCc4YCx4YCs4YCA4YCZ4YC94YCU4YC64YCA4YC74YCx4YCs4YCE4YC64YC4!5e1!3m2!1smy!2smm!4v1575908255893!5m2!1smy!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
		</div>
		<div class="address row">
			<div class="adress_1 col-sm-2">
				<h4>Phone Number</h4>
				<a href="tel:09792558086" target="_blank"><p><i class="fa fa-phone"></i><i>09792558086</i></p></a>
			</div>
			<div class="phone col-sm-3">
				<h4>Email</h4>
				<a href="mailto::naymyoooit888@gmail.com" target="_blank"><p><i class="fa fa-envelope"></i><i>naymyoooit888@gmail.com</i></p></a>
			</div>
			<div class="email col-sm-2">
				<h4>Facebook</h4>
				<a href="https//:www.facebook.com/profile.php?id=100038420191390" target="_blank"><p><i class="fa fa-facebook"></i></i><i>Nay Myo Oo</i></p></a>
			</div>
			<div class="email col-sm-2">
				<h4>Twitter</h4>
				<a href="https://twitter.com/NayMyoO21471085" target="_blank"><p><i class="fa fa-twitter"></i><i>Nay Myo Oo</i></p></a>
			</div>
			<div class="email col-sm-3" style="border-bottom: none;">
				<h4>Address</h4>
				<a href="https://goo.gl/maps/Br8nFKUji7Uy1V2s6"><p><i class="fa fa-map-marker"></i><i>Naung Hkio, Myanmar</i></p></a>
			</div>
			
		</div>
		

	</div>	

@endsection