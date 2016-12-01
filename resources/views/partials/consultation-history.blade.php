	<table class="ui celled table">
	  <thead>
	    <tr>
	      <th>Consultation No.</th>
	      <th>Date</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>1</td>
	      <td>November 30, 2016</td>
	      <td class="selectable">
	        <a href="#">View Profile</a>
	      </td>
	    </tr>
	    <tr>
	      <td>2</td>
	      <td>November 29, 2016</td>
	      <td class="selectable">
	        <a href="#">View Profile</a>
	      </td>
	    </tr>
	    <tr>
	      <td>3</td>
	      <td>November 28, 2016</td>
	      <td class="selectable">
	        <a href="#">View Profile</a>
	      </td>
	    </tr>
	    <tr class="warning">
	      <td>4</td>
	      <td>November 15, 2016</td>
	      <td class="selectable warning">
	        <a href="/">View Profile</a>
	      </td>
	    </tr>
	    <tr>
	      <td>5</td>
	      <td>November 7, 2016</td>
	      <td class="selectable positive">
	        <a href="#">View Profile</a>
	      </td>
	    </tr>
	    <tr>
	      <td>6</td>
	      <td>November 1, 2012</td>
	      <td class="selectable negative">
	        <a href="#">View Profile</a>
	      </td>
	    </tr>
	  </tbody>
	</table>
<!-- modal data -->
<a id="modaltwo"><button class="ui button" type="submit">
	Add Consultation
</button></a>
	<div class="ui modal" id="anothermodal">
	  <div class="header" align="center"><i class="user icon"></i></div>
	  <div class="content">
	    <div class="ui one column center aligned grid">
	      <div class="column ten wide form-holder">
	        <div class="ui form">
	          <div class="ui fluid field input">
	          		<textarea placeholder="consultation"></textarea>
	          </div>
				  <div class="date field">
				    <input type="date" placeholder="Date">
				  </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="actions">
	    <div class="ui approve button">Add</div>
	    <div class="ui cancel button">Cancel</div>
	  </div>

	<script>
	$(document).ready(function(){
	     $('#modaltwo').click(function(){
	        $('#anothermodal').modal('show');    
	     });
	});
	</script>