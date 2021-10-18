<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow: scroll">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />

</head>
<body>

<!-- NAVIGATION BAR -->
@include('navbar')
<!-- BREAK -->
<div style="width: 1900px; height: 1px; top: 66px; left: 0px; right: 0px; background-color:rgba(34, 34, 34, 0.1); position: absolute; z-index: 3"></div>
<!-- WELCOME BANNER -->
@include('banner')
<!-- AS FEATURED IN -->
@include('featured')
<!-- TRUSTPILOT -->
@include('trustpilot')
<!-- DESCRIPTION -->
@include('description')
<!-- BENEFITS -->
@include('benefits')
<!-- CONTENT -->
@include('contents')
<!-- EXTRA CONTENT -->
@include('extraContent')
<!-- BREAK -->
<div style="width: 1900px; height: 1px; top: 4650px; left: 0px; right: 0px; background-color:rgba(34, 34, 34, 0.1); position: absolute;"></div>
<!-- TESTIMONIALS -->
@include('testimonials')
<!-- JOURNEY -->
@include('journey')
<!-- FOOTER -->
@include ('footer')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
