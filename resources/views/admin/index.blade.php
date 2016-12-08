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
				<div class="ui stackable fluid top attached tabular menu">
					  <a class="item active" data-tab="service_appointments">
					    Service Appointments
					  </a>
					  <a class="item" data-tab="supplies">
					    Medical Supplies
					  </a>
				</div>

         <!-- START ACTIVE TAB -->
        <div class="ui active bottom attached tab segment" data-tab="service_appointments">
           <div class="ui stackable secondary pointing menu">
              <a class="item active" data-tab="menu">
                Menu
              </a>
              <div class="ui one column left labeled icon right floated mini button" style="
                margin-bottom: 10px;
                margin-top: 0px;
                border-radius: 0px;">
                <i class="add icon"></i>
                    <a id="modal_add_service">Add Service</a>
               </div>
            </div>
            <!-- Start menu Tab -->
            <div class="ui active tab segment" data-tab="menu">
              @include('partials.menu')
            </div>
            <!-- End menu Tab -->
            </div><!-- END ACTIVE TAB -->

            <!-- START NON-ACTIVE TAB -->
            <div class="ui bottom attached tab segment" data-tab="supplies">
              @include('pages.medical-supplies')
            </div>
          </div><!-- END NON-ACTIVE TAB -->

<!--------------------------------------------------------SCRIPTS------------------------------------------------------>

<!-- START ADD SERVICE MODAL -->
  <div class="ui modal" id="add_service_modal">
    <div class="header" align="center"><i class="teal heartbeat icon"></i></div>
    <div class="content">
      <div class="ui one column center aligned grid">
        <div class="column ten wide form-holder">
          <div class="ui form">
             <div class=" required field">
                <input type="text" placeholder="Service Name">
        </div>
        <div class=" required field">
            <input type="number" placeholder="Available Slots">
          </div>
          <div class=" required date field">
            <input type="date" placeholder="Date">
          </div>
          <div class="ui fluid required field input">
                  <textarea placeholder="Descrption"></textarea>
              </div>
          </div>
          <div class="mini ui right floated actions buttons" style="margin-top: 10px;">
            <div class="ui approve button" style="border-radius: 0px;">Add</div>
          <div class="ui cancel button" style="border-radius: 0px;"">Cancel</div>
      </div>
        </div>
      </div>
    </div>
<!-- END ADD SERVICE MODAL -->
@stop