@extends('master')
@section('content')

<style type="text/css">

  .form-holder {
    background: rgba(255,255,255,0.2);
    margin-top: 10%;
    border-radius: 3px;
  }

  .form-head {
  	font-weight: 100;
    font-size: 70px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #636b6f;
    Font-family: 'Raleway', sans-serif;
    margin: 15px auto 30px auto;
  }

  .remember-me {
    text-align: left;
  }

  .ui.checkbox label {
    color: #ddd;
  }

  a {
  	color: inherit;
  	text-decoration: none;
  }

  a:hover {
     color:inherit; 
     text-decoration:none;  
  }

</style>

		<div class="ui one column center aligned grid">
			<div class="column six wide form-holder">
				<h2 class="center aligned header form-head">HCS</h2>
				<div class="ui form">
					<div class="field">
						<input type="text" placeholder="username">
					</div>
					<div class="field">
						<input type="password" placeholder="password">
					</div>

					<div class="ui large buttons fluid teal">
						<div class="ui vertical animated button" tabindex="0">
						  <a href="/register"><div class="hidden content"><i class="circle notched icon"></i></div></a>
						  <div class="visible content">
						    Register
						  </div>
						</div>
						<div class="ui vertical animated button" tabindex="0">
						  <a href="/home"><div class="hidden content"><i class="right arrow icon"></i></div></a>
						  <div class="visible content">
						    Sign-In
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop