<div class="ui stackable secondary pointing menu">
  <a class="item active" data-tab="personal_information">
    Personal Information
  </a>
  <a class="item" data-tab="medical_history">
    Medical History
  </a>
  <a class="item" data-tab="consultation_history">
    Consulatation History
  </a>
  <a class="item" data-tab="medication">
    Medication
  </a>
</div>
<div class="ui active tab segment" data-tab="personal_information">
  <p>
  <div class="header">
    Profile
  </div>
  <div class="image content">
    <!-- <div class="ui small image">
      <img src="/img/mark.png" style="margin-bottom: 20px; margin-top: 7px;">
    </div> -->
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
<!-- Start Medical History -->
<div class="ui tab segment" data-tab="medical_history">
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
<div class="ui tab segment" data-tab="medication">
	@include('partials.medication')
</div>
<!-- End Medication Tab -->
<!-- Start Consultation History -->
<div class="ui tab segment" data-tab="consultation_history" style="margin-bottom:14px">
	@include('partials.consultation-history')
</div>
<!-- End Consultation History -->

<script>
	$( document ).ready(function() {
		$('.menu .item').tab();
	});
</script>