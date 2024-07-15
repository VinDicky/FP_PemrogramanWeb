<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SewaIn</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet' type='text/css'>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/sewain.style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tambahan.css') }}">
</head>
<body>
  {{-- <div id="fakeloader">
    <div class="spinner5">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div> --}}
{{-- include "layout/header.html"; --}}
@include('layouts.header')
@yield('content')
  
{{-- // include "layout/footer.html"; --}}
@include('layouts.footer')

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
<script src="javascript.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/scripts.js" ></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&libraries=visualization&callback=initMapListing">
</script>
<script src="js/mapdetails.js" type="text/javascript"></script>

</body>
</html>