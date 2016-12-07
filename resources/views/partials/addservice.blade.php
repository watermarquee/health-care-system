	<table class="ui selectable celled table">
	  <thead>ADD SERVICE
	    <tr>
	      <th>Consultation No.</th>
	      <th>Date</th>
	      <th>Description</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>1</td>
	      <td>November 30, 2016</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="#" id="modal_b">View</a>
	      </td>
	    </tr>
	    <tr>
	      <td>2</td>
	      <td>November 29, 2016</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="#">View</a>
	      </td>
	    </tr>
	    <tr>
	      <td>3</td>
	      <td>November 28, 2016</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="#">View</a>
	      </td>
	    </tr>
	    <tr class="">
	      <td>4</td>
	      <td>November 15, 2016</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="/">View</a>
	      </td>
	    </tr>
	    <tr>
	      <td>5</td>
	      <td>November 7, 2016</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="#">View</a>
	      </td>
	    </tr>
	    <tr>
	      <td>6</td>
	      <td>November 1, 2012</td>
	      <td>Has Cancer</td>
	      <td class="selectable">
	        <a href="#">View</a>
	      </td>
	    </tr>
	  </tbody>
	</table>
<!-- modal data -->
<a id="modaltwo"><button class="ui button" type="submit">
	Add Consultation
</button></a>
	<div class="ui modal" id="anothermodal">
	  <div class="header" align="center"><i class="teal heartbeat icon"></i></div>
	  <div class="content">
	    <div class="ui one column center aligned grid">
	      <div class="column ten wide form-holder">
	        <div class="ui form">
	       	   <div class=" required field">
	       	   		<input type="text" placeholder="Cardiovascular">
				</div>
				<div class=" required field">
	       	   		<input type="text" placeholder="Mental">
				</div>
				<div class=" required field">
	       	   		<input type="text" placeholder="Dental">
				</div>
				<div class=" required field">
	       	   		<input type="text" placeholder="Respiratory">
				</div>
				<div class=" required field">
	       	   		<input type="text" placeholder="Dermis">
				</div>
		          <div class="ui fluid required field input">
		          		<textarea placeholder="Descrption"></textarea>
		          </div>
				  <div class=" required date field">
				    <input type="date" placeholder="Date">
				  </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="actions">
	    <div class="ui approve button" style="border-radius: 0px;">Add</div>
	    <div class="ui cancel button" style="border-radius: 0px;">Cancel</div>
	  </div>

	<script>
	$(document).ready(function(){
	     $('#modaltwo').click(function(){
	        $('#anothermodal').modal('show');    
	     });
	});
	</script>

<!-- Start View Consultation Modal Data -->
<div class="ui fluid modal" id="modal_cb">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui one column center aligned grid">
    <div class="column ten wide form-holder" align="center" style="margin-bottom: 30px;">
    	@include('partials.attributes')
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
     $('#modal_b').click(function(){
        $('#modal_cb').modal('show');    
     });
});
</script>
<!-- End View Consultation Modal Data -->