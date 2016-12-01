<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>ID. No.</th>
      <th>Surname</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Morningstart</td>
      <td>Lucifer</td>
      <td>Unknown</td>
      <td>Hell</td>
      <td class="selectable">
        <a href="#" id="modal_a">View Profile</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Parker</td>
      <td>Peter</td>
      <td>Male</td>
      <td>Brooklyn, NYC</td>
      <td class="selectable">
        <a href="#">View Profile</a>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Wayne</td>
      <td>Damian</td>
      <td>Male</td>
      <td>Gotham City</td>
      <td class="selectable">
        <a href="#">View Profile</a>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Prince</td>
      <td>Diana</td>
      <td>Female</td>
      <td>Themiscyra</td>
      <td>
        <a href="/">View Profile</a>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Romanoff</td>
      <td>Natasha</td>
      <td>Female</td>
      <td>Russia</td>
      <td class="selectable positive">
        <a href="#">View Profile</a>
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Alpha</td>
      <td>Alpha</td>
      <td>Unknown</td>
      <td>New Genesis</td>
      <td>
        <a href="#">View Profile</a>
      </td>
    </tr>
  </tbody>
</table>
<!-- Start Add Profile Modal Data -->
  <a id="modalone"><button class="ui button" type="submit">
    Add Profile
  </button></a>

<div class="ui modal" id="mymodal">
  <div class="header" align="center"><i class="user icon"></i></div>
  <div class="content">
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
  </div>
  <div class="actions">
    <div class="ui approve button">Add</div>
    <div class="ui cancel button">Cancel</div>
  </div>
</div>

<script>
  $(document).ready(function(){
     $('#modalone').click(function(){
        $('#mymodal').modal('show');    
     });
});
</script>
<!-- End Add Profile Modal Data -->

<!-- Start View Profile Modal Data -->
<div class="ui fluid modal" id="modal_down">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui one column center aligned grid">
    <div class="column ten wide form-holder">
      @include('partials.residents')
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
     $('#modal_a').click(function(){
        $('#modal_down').modal('show');    
     });
});
</script>
<!-- End View Profile Modal Data -->