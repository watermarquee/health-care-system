<div class="ui fluid secondary pointing menu">
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
    <div class="ui small image">
      <img src="/img/mark.png" style="margin-bottom: 20px; margin-top: 7px;">
    </div>
    <div class="description" align="center">
      <div class="ui header">Information</div>
      <table class="ui very basic collapsing celled table">
	  <thead></thead>
	  <tbody>
	    <tr>
	      <td>
	          <div class="content">
	            <strong>Surname:</strong>
	        </div>
	      </td>
	      <td>
	        Morningstar
	      </td>
	    </tr>
	    <tr>
	      <td>
	          <div class="content">
	            <strong>Name:</strong>
	        </div>
	      </td>
	      <td>
	        Lucifer
	      </td>
	    </tr>
	    <tr>
	      <td>
	          <div class="content">
	            <strong>Gender:</strong>
	        </div>
	      </td>
	      <td>
	        Unknown
	      </td>
	    </tr>
	    <tr>
	      <td>
	          <div class="content">
	            <strong>Address:</strong>
	        </div>
	      </td>
	      <td>
	        Hell
	      </td>
	    </tr>
	  </tbody>
	</table>
    </div>
  </div>
  <div class="actions" style="margin-top: 20px;">
    <div class="ui buttons">
	  <button class="ui button">Edit</button>
	  <div class="or"></div>
	  <button class="ui red button">Omit</button>
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
<div class="ui tab segment" data-tab="consultation_history">
	@include('partials.consultation-history')
</div>
<!-- End Consultation History -->

<script>
	$( document ).ready(function() {
		$('.menu .item').tab();
	});
</script>