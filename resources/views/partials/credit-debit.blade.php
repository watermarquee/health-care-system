<div class="ui stackable secondary six item pointing menu">
  <a class="item active" data-tab="credits">
    Available Supplies
  </a>
  <a class="item" data-tab="debits">
    Remaining Supplies
  </a>
</div>

<!-- Start credits Tab -->
<div class="ui active tab segment" data-tab="credits">
  @include('pages.credit')
</div> <!-- End credits Tab -->

<!-- Start dedits Tab -->
<div class="ui tab segment" data-tab="debits">
  @include('pages.debit')
</div><!--End dedits Tab -->