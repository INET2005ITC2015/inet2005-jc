<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>App Blade</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>

</head>
<body style="padding-top:60px;">

    @include('partials.nav');

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
        //$('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>

    @yield('footer')

</body>
</html>
