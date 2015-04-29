@extends('layout')

@section('container')

<div id="container">
<div id="container-content">
<div id="container-center">
	<img id="headshot" src="/assets/images/Profile_Icon.png" width="130" height="130" />
	<h3 id="name-and-title"><span>Michael Sutyak</span></h3>
		<br>	
		<div class="small_caps">
		<a href="mailto:msutyak@gmail.com" id="email" target="_blank"><i class="fa fa-envelope fa-lg"></i></a>
		&nbsp;&nbsp;
		<a href="https://www.linkedin.com/in/michaelsutyak" id="linkedin" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a>
		&nbsp;&nbsp;
		<a href="https://twitter.com/msutyak" id="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
		&nbsp;&nbsp;
		<a href="https://www.facebook.com/michael.sutyak" id="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
		&nbsp;&nbsp;
		<a href="https://instagram.com/msutyak" id="instagram" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
		&nbsp;&nbsp;
		<a href="https://medium.com/@msutyak" id="medium" target="_blank"><i class="fa fa-medium fa-lg"></i></a>
		</div>

		<p>
		Michael is currently a Senior User Acquisition Manager at <a href="https://www.kixeye.com" target="_blank" class="index_link">KIXEYE</a> in <a href="http://goo.gl/maps/II5G3" target="_blank" class="index_link">San Francisco, California,</a><br>
		where he controls ad spend for multiple mobile and browser-based titles.</br>
		He also enjoys building and growing consumer facing web and mobile products,</br> 
		and exploring new technologies.
		</p>


		<hr id="hr-index-middle" class="bottom">
</div>
</div>
</div>

<script type="text/javascript">
$("#email").click(function(event){
        mixpanel.track("email click");
    });

$("#linkedin").click(function(event){
        mixpanel.track("linkedin click");
    });

$("#twitter").click(function(event){
        mixpanel.track("twitter click");
    });

$("#facebook").click(function(event){
        mixpanel.track("facebook click");
    });

$("#instagram").click(function(event){
        mixpanel.track("instagram click");
    });

$("#medium").click(function(event){
        mixpanel.track("medium click");
    });

mixpanel.track('page viewed', {
    'page name' : document.title,
    'url' : window.location.pathname
});
</script>

@stop