<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow: scroll">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />

</head>
<body>

<!-- NAVIGATION BAR -->
@include('navbar')
<!-- BREAK -->
<div style="width: 1900px; margin:auto; height: 1px; top: 66px; left: 0px; right: 0px; background-color:rgba(34, 34, 34, 0.1); position: absolute; z-index: 3"></div>
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
<div style="width: 1900px; height: 1px; top: 4650px; left:0px; right:0px; margin: auto; background-color:rgba(34, 34, 34, 0.1); position: absolute;"></div>
<!-- TESTIMONIALS -->
@include('testimonials')
<!-- JOURNEY -->
@include('journey')
<!-- FOOTER -->
@include ('footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
