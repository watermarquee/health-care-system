<div class="ui stackable secondary pointing menu">
  <a class="item active" data-tab="all">
    All
  </a>
  <a class="item" data-tab="infant">
    Infant
  </a>
  <a class="item" data-tab="teenager">
    Teenager
  </a>
  <a class="item" data-tab="adult">
    Adult
  </a>
  <a class="item" data-tab="legendary">
    Legendary
  </a>
  <div class="ui one column left labeled icon right floated mini button" style="
    margin-bottom: 10px;
    margin-top: 0px;
    border-radius: 0px;">
    <i class="add icon"></i>
        <a id="modal_add_service">Add Service</a>
   </div>
</div>

<div class="ui tab segment" data-tab="infant">
  <p>
  <div class="header">
    Profile
  </div>
  <div class="image content">
    <div class="description" align="center">
      <div class="ui header">Available Data</div>
      <table class="ui very basic collapsing celled table">
	  <thead></thead>
	  <tbody>
	  <div class="ui one column center aligned grid">
	  <div class="column six wide form-holder">
		  <div class="ui form">
	          <div class="ui fluid required field input"> 
	            <input type="text" name="surname" placeholder="Surname">
	          </div>
	          <div class="ui fluid required field input"> 
	            <input type="text" name="name" placeholder="Name">
	          </div>
	          <div class="ui fluid required field input"> 
	            <select class="ui search dropdown">
	              <option value="" disabled selected>Gender</option>
	              <option value="AF">Male</option>
	              <option value="AX">Female</option>
	              <option value="AX">Brain Damaged</option>
	            </select>
	            </div>
	          <div class="ui fluid required field input"> 
	            <input type="text" name="address" placeholder="Address">
	          </div>
	        </div>
        </div>
        </div>
	  </tbody>
	</table>
    </div>
  </div>
  <div class="actions" style="margin-top: 20px;">
    <div class="ui buttons">
	  <button class="ui button">Update</button>
	  <div class="or"></div>
	  <button class="ui red button">Delete</button>
	</div>
  </div>
</div>

<!-- data-tabs -->

<!-- Start ALL Tab -->
<div class="ui active tab segment" data-tab="all">
	@include('partials.all')
</div>
<!-- End ALL Tab -->

<!-- Start Medical History -->
<div class="ui tab segment" data-tab="teenager">
	<table class="ui fixed table">
	  <thead>
	    <th>Last Check Date</th>
	    <th>Description</th>
	  </tr></thead>
	  <tbody>
	    <tr>
	      <td>Today</td>
	      <td>John is an interesting boy but sometimes you don't really have enough room to describe everything you'd like;
	      	  He Has Cancer.
	      </td>
	    </tr>
	    <tr>
	      <td>Yesterday</td>
	      <td>Jamie is a kind girl but sometimes you don't really have enough room to describe everything you'd like;
			  She Has Cancer.
	      </td>
	    </tr>
	    <tr>
	      <td>Three Days Ago</td>
	      <td>Jill is an alright girl but sometimes you don't really have enough room to describe everything you'd like;
			  She Has Cancer.
	      </td>
	    </tr>
	  </tbody>
	</table>
</div>
<!-- End Medical History -->

<!-- Start Medication Tab -->
<div class="ui tab segment" data-tab="adult">
	@include('partials.medication')
</div>
<!-- End Medication Tab -->

<!-- Start Consultation History -->
<div class="ui tab segment" data-tab="legendary" style="margin-bottom:14px">
	@include('partials.consultation-history')
</div>
<!-- End Consultation History -->

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