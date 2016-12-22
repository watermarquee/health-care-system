<form class="ui form" method="POST" action="/residents">
    {{ csrf_field() }}
  <div class="ui fluid field">
    <div class="ui field">
      <input placeholder="First name" type="text" name="first_name">
    </div>
    <div class="field">
      <input placeholder="Last Name" type="text" name="last_name">
    </div>
    <div class="field">
    <select class="ui dropdown" id="class" name="class">
      <option value=""disabled selected hidden>Class</option>
      <option value="infatt">Infant</option>
      <option value="teenager">Teenager</option>
      <option value="adult">Adult</option>
      <option value="elderly">Elderly</option>
    </select>
    </div>
    <div class="field">
      <input placeholder="Address" type="text" name="address">
    </div>
  </div>
  <div class="field">
    <input placeholder="Age" type="number" name="age">
  </div>
  <div class="field">
    <select class="ui dropdown" id="marital_status" name="marital_status">
      <option value=""disabled selected hidden>Marital Status</option>
      <option value="single">Single</option>
      <option value="married">Married</option>
    </select>
  </div>
  <div class="field">
    <input placeholder="Contact" type="number" name="contacts">
  </div>
  <button class="ui right floated small teal button" type="submit">
    Add
  </button>
</form>

<script>
  $('#class').on('change', function() {
    $('#class').val();
  });
  $('#marital_status').on('change', function() {
    $('#marital_status').val();
  });
</script>