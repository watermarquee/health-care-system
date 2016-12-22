
    <script type="text/javascript" class="init">

    $(document).ready(function() {
        $('#example').DataTable({
            autoFill: true
        });

        $('#add_residents_event').click(function() {
            $('#add_residents_modal').modal('show');  

        });
    });

    </script>

<table id="example" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="8">
                    <button class="mini teal left labeled icon right floated ui button"
                            id="add_residents_event">
                      <i class="icon add"></i>
                      Add Entry
                    </button>
                </th>
            </tr>
            <tr>
                <th colspan="2">Service Name: Free Condoms Giveaways</th>
                <th>Service Date: 12/12/16</th>
                <th>Available Slots: 60</th>
                <th colspan="2">Taken Slots: 57</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Classification</th>
                <th>Address</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Classification</th>
                <th>Address</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Contact</th>
            </tr>
        </tfoot>
        <tbody>
        <!-- Start For Loop -->
            <tr>
                <td>Tiger Nixon</td>
                <td>Elderly</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>Single</td>
                <td>0978665412</td>
            </tr>
         <!-- End For Loop -->
        </tbody>
    </table>

<!-- Start Add Service Modal Data -->
<div class="ui fluid modal" id="add_residents_modal">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui centered aligned grid">
    <div class="ui one column center aligned grid" style="margin-bottom: 20px;">
        @include('partials.addresidents')
    </div>
  </div>
</div>
<!-- End Add Service Modal Data -->