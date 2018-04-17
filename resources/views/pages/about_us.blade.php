@extends('layout')

@section('content')
<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="/">Home</a>
                    <span class="seperator">></span>
                    <span class="current-page">About us</span>
                </div>
            </div> <!-- .breadcrumbs -->
            
            <div class="row">
                <div class="col-sm-12">
                    <h2>About us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="tabs">
                        <ul>
                            <li><a href="#fragment-1">One</a></li>
                            <li><a href="#fragment-2">Two</a></li>
                            <li><a href="#fragment-3">Three</a></li>
                        </ul>
                        <div id="fragment-1">
                            1 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                        <div id="fragment-2">
                            2 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                        <div id="fragment-3">
                            3 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

       
        <div class="container">
        <div class="row medium-article">
                <div class="col-xs-12 col-sm-9">
                <h3>Contacts</h3>             
  <h1>Address:</h1>
  <p>Kurzemes iela 26-1, Tukums, LV-3101, Latvija</p> 
  <h1>Email:</h1>
  <p>info@info.lv</p>
  <h1>Phone:</h1>
  <p>+371 20006329</p>          
</div>
<div id="map"></div>
<div class="col-xs-12 col-sm-3">
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXRD4TNgZO-uE5kulhGxjwKMelKxkjyo&callback=initMap">
</script>




    </main>
</body>
</html>
@endsection