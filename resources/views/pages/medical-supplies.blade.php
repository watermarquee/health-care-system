<div class="ui stackable secondary pointing menu">
  <a class="item active" data-tab="medicine">
    Medicine
  </a>
  <a class="item" data-tab="equipments">
    Equipments
  </a>
  <a class="item" data-tab="add_supply">
    Add Supply
  </a>
</div>


<!-- Start menu tab -->
<div class="ui active tab segment" data-tab="medicine">
    	 <style>
        .ui.table tr td { border-top: 0px !important; }
      </style>

      <table class="ui selectable single line table">
        <thead>
          <tr>
            <th></th>
            <th>Item No.</th>
            <th>Item Name</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr class="clickable-row" id="medicine_modal" data-tooltip="Show Details" data-inverted="">
            <td>
              No. 1
            </td>
            <td>
              Paracetamol
            </td>
            <td>
              500
            </td>
          </tr>
        </tbody>
      </table>
</div>
<!-- End menu tab -->

<!-- Start equipments tab -->
<div class="ui tab segment" data-tab="equipments">
       <style>
        .ui.table tr td { border-top: 0px !important; }
      </style>

      <table class="ui selectable single line table">
        <thead>
          <tr>
            <th></th>
            <th>Item No.</th>
            <th>Item Name</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr class="clickable-row" id="equipments_modal" data-tooltip="Show Details" data-inverted="">
            <td>
              No. 1
            </td>
            <td>
              Syringe
            </td>
            <td>
              25
            </td>
          </tr>
        </tbody>
      </table>
</div>
<!-- End equipments tab -->

<!-- Start equipments tab -->
<div class="ui tab segment" data-tab="add_supply">
  <div class="ui form">
    <div class="ui fluid field">
      <div class="ui field">
       <input placeholder="Item Name" name="item_name" type="text">
      </div>
    </div>
  <div class="field">
    <select class="ui dropdown">
      <option value=""disabled selected hidden>Type</option>
      <option value="medicine_supple">Medicine</option>
      <option value="equipment_supply">Equipment</option>
    </select>
  </div>
    <div class="field">
      <input placeholder="Supplier" type="text">
    </div>
  </div>
    <button class="ui teal icon button" style="margin-top: 15px; border-radius: 0px;">
      <i class="add icon"></i>
    </button>
</div>
<!-- End equipments tab -->

<!-- Start menu Modal Data -->
<div class="ui fluid modal" id="credit_modal">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui center aligned grid">
    <div class="ui form" style="margin-bottom: 30px; margin-top: 30px; margin-left: 30px; margin-right: 30px;">
      @include('partials.credit-debit')
    </div>
  </div>
</div>
<!-- End menu Modal Data -->

<!-- Start menu Modal Data -->
<div class="ui fluid modal" id="debit_modal">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui center aligned grid">
    <div class="ui form" style="margin-bottom: 30px; margin-top: 30px; margin-left: 30px; margin-right: 30px;">
      @include('pages.equipments')
    </div>
  </div>
</div>
<!-- End menu Modal Data -->

<script> 
jQuery(document).ready(function($) {
    $("#medicine_modal").click(function() {
       $('#credit_modal').modal('show');
    });

    $("#equipments_modal").click(function() {
       $('#debit_modal').modal('show');
    });
});
</script>