
    <script type="text/javascript" class="init">

    $(document).ready(function() {
        $('#example-event').DataTable({
            autoFill: true
        });

    });
    </script>

<table id="example-event" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="8">
                    <button class="mini teal left labeled icon right floated ui button">
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
                <th>Nationality</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Classification</th>
                <th>Address</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Nationality</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger</td>
                <td>Elderly</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>Single</td>
                <td>Hispanic</td>
            </tr>
        </tbody>
    </table>