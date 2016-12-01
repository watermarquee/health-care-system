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
<form action="" method="POST"> {{ csrf_field() }}

		<div class="ui one column center aligned grid">
			<div class="column six wide form-holder">
				<h2 class="center aligned header form-head">REGISTER</h2>
				<div class="ui form">
					<div class="ui fluid field left icon input"><i class="user icon"></i>
						<input type="text" placeholder="username">
					</div>
					<div class="ui fluid field left icon input"><i class="lock icon"></i>
						<input type="password" name="password" placeholder="password">
					</div>
					<div class="ui fluid field left icon input"><i class="lock icon"></i>
						<input type="password" name="confirm_password" placeholder="confirm password">
					</div>
					<div class="ui large buttons fluid teal">
						<div class="ui vertical animated button" tabindex="0">
						  <div class="hidden content"><i class="circle notched icon"></i></div>
						  <div class="visible content">
						    Register
						  </div>
						</div>
						<div class="ui vertical animated button" tabindex="0">
						  <a href="/"><div class="hidden content"><i class="cancel icon"></i></div></a>
						  <div class="visible content">
						    Cancel
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
</form>
@stop