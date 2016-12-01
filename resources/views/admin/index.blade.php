@extends('master')
@section('content')

<style type="text/css">

  .form-holder {
    background: rgba(255,255,255,0.2);
    margin-top: 2%;
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
		<div class="column ten wide form-holder">
			<h2 class="center aligned header form-head">HCS</h2>
				<div class="ui compact attached tabular menu">
					  <a class="item active" data-tab="home">
					    Home
					  </a>
					  <a class="item" data-tab="supplies">
					    Supplies
					  </a>
					  <a class="item" data-tab="appointments">
					    Appointments
					  </a>
				</div>
				<div class="ui attached tab segment" data-tab="supplies">
				  SUPPLIES - There are many variations of passages of Lorem Ipsum available, but the majority 
				  have suffered alteration in some form, by injected humour, or randomised words which don't 
				  look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need 
				  to be sure there isn't anything embarrassing hidden in the middle of text. 
				  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, 
				  making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, 
				  combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
				  The generated Lorem Ipsum is therefore always free from repetition, injected humour, or 
				  non-characteristic words etc.
				</div>
				<div class="ui attached tab segment" data-tab="appointments">
				  APPOINTMENTS - There are many variations of passages of Lorem Ipsum available, but the majority 
				  have suffered alteration in some form, by injected humour, or randomised words which don't 
				  look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need 
				  to be sure there isn't anything embarrassing hidden in the middle of text. 
				  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, 
				  making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, 
				  combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
				  The generated Lorem Ipsum is therefore always free from repetition, injected humour, or 
				  non-characteristic words etc.
				</div>
				<div class="ui active attached tab segment" data-tab="home">
				  @include('partials.home')
				</div>
			</div>
		</div>

@stop