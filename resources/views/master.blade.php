<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HCS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/autoFill.semanticui.min.css">
    <script src="/jquery/jquery-3.1.1.js"></script>
    <script src="/semantic/semantic.min.js"></script>
    <!-- Styles -->
    <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 70px;
            }
        </style>
</head>
<body>
	 @yield('content')


<!-- Script -->
<script type="text/javascript"></script>
<script src="/jquery/jquery-3.1.1.js"></script>
<script src="/semantic/semantic.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.semanticui.min.js"></script>
<script src="/js/dataTables.autoFill.min.js"></script>
<script src="/js/autoFill.semanticui.min.js"></script>

	@yield('form')

<script>

    $( document ).ready(function() {
        $('.menus .items').tab();
    });

    $(document).ready(function() {
        $('#modal_add_event').click(function() {
            $('#modal_add_event_date').modal('show');    
         });
    });

    $(document).ready(function() {
        $('#modal_service_logs').click(function() {
            $('#modal_service_logs_list').modal('show');    
         });
    });

    $(document).ready(function() {
        $('#modal_show_events').click(function() {
            $('#modal_show_events_list').modal('show');  

         });
    });

    $(document).ready(function() {
        $('.menu .item').tab();
    });
    
    $('#modal_add_service').click(function(){
        $('#add_service_modal').modal('show');    
    });

    $(document).ready(function() {
        $('.menu .item').tab();
    });
    
    $('#modal_event_logs').click(function(){
        $('#modal_event_logs_list').modal('show');    
    });
</script>

</body>
</html>