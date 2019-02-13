@extends('layouts.design')

@section('title', 'Home Page')
<!--  @stack('styles')-->
<link href="{{asset('css/styles.css') }}" rel="stylesheet"/>
@section('content')

<h2>This is the Home page</h2>
<<<<<<< HEAD
<a href="http://localhost:8888/MilestoneCLC/createProfile">Create Profile</a>
</body>
=======
<!-- this if else determines if a user is logged in
    if they are, their username is displayed, if not
    they will be asked to log in -->
<?php $isLogin = isset($user);?><!-- check to see if $user is defined(logged in) -->
@if($isLogin)
	<?= $user->getUsername() . " logged in" ?>
@else
Please Log In
@endif
<!-- this checks if the user is an admin and displays the admin button -->
<!-- we must not leave this as only security for admin access -->
	@if(($isLogin) && ($user->getAdmin() == 1))
		<form action="admin">
    		<input type="submit" value="Admin Page" />
		</form>
	
	@else
	standard
	@endif




>>>>>>> 3c72e24fd27044fd094a7e7512938c18856687b0
@endsection
