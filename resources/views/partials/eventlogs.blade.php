
    <script type="text/javascript" class="init">

    $(document).ready(function() {
        $('#examplify').DataTable( {
            autoFill: true
        } );
    } );

    </script>

<!-- Start Service Logs Modal Data -->
<div class="ui fluid modal" id="modal_event_logs_list">
  <div class="actions">
    <a class="cancel"><i class="close icon"></i></a>
  </div>
  <div class="ui centered aligned grid">
    <div class="ui one column center aligned grid"">
        @include('partials.registered-residents')
    </div>
  </div>
</div>
<!-- End Service Logs Modal Data -->

<table id="examplify" class="ui selectable celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Date</th>
                <th>Slots</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Slots</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td class="selectable" data-tooltip="Show Registered Residents" data-inverted="">
                <a href="#" id="modal_event_logs">November 19, 2016</a>
                </td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 18, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 17, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 16, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 15, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 14, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 13, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 12, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 11, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 10, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 9, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 8, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 7, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 6, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 5, 2016</td>
                <td>50</td>
            </tr>
            <tr>
                <td>November 4, 2016</td>
                <td>50</td>
            </tr>
        </tbody>
    </table>