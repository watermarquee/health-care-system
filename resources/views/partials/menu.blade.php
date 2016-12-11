	<style>
		.ui.table tr td { border-top: 0px !important; }
	</style>

	<table class="ui selectable celled table">
	  <thead>
	    <tr>
	      <th>Service Offered</th>
	      <th>Lates Event Date</th>
	      <th>Available Slots</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td class="selectable" data-tooltip="Show Service Logs" data-inverted="">
	      	<a href="#" id="modal_service_logs"> Free Vaccine Giveaway</a>
	      </td>
	      <td class="selectable" data-tooltip="Show All Event History" data-inverted="">
		  	<a href="#" id="modal_show_events">November 30, 2016</a>
	      </td>
	      <td>0</td>
	      <td class="selectable">
	        <a href="#" id="modal_add_event" data-tooltip="Add New Event Date" data-inverted=""><i class="add icon"></i></a>
	      </td>
	    </tr>
	    <tr>
	      <td>Free Birth Control Pills Giveaway</td>
	      <td>November 29, 2016</td>
	      <td>37</td>
	      <td class="selectable">
	        <a href="#" id="modal_add_event" data-tooltip="Add New Event Date" data-inverted=""><i class="add icon"></i>
	      </td>
	    </tr>
	  </tbody>
	</table>

</script>

<!-- Start Add New Event Date Modal Data -->
<div class="ui fluid modal" id="modal_add_event_date">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui center aligned grid">
    <div class="column ten wide form-holder" align="center" style="margin-bottom: 30px;">
    	@include('partials.addeventdate')
    </div>
  </div>
</div>
<!-- End Add New Event Date Modal Data -->

<!-- Start Service Logs Modal Data -->
<div class="ui fluid modal" id="modal_service_logs_list">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui centered aligned grid">
    <div class="ui one column center aligned grid" style="margin-top: 10px; margin-bottom: 20px;">
    	@include('partials.servicelogs')
    </div>
  </div>
</div>
<!-- End Service Logs Modal Data -->

<!-- Start Service Logs Modal Data -->
<div class="ui fluid modal" id="modal_show_events_list">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui centered aligned grid">
    <div class="ui one column center aligned grid" style="margin-bottom: 20px;">
    	@include('partials.eventlogs')
    </div>
  </div>
</div>
<!-- End Service Logs Modal Data -->