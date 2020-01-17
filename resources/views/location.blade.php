<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <style type="text/css">
.container {
    margin-top: 100px
}

body {
    background-color: #E0E0E0
}

 </style>
</head>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--To use the full functionality visit https://www.algolia.com-->
            <h6 class="text-center">Type your location(New york, London, Delhi, Tokyo)</h6> <input type="search" id="address" class="form-control" placeholder="Where are we going?" />
        </div>
    </div>
</div>


<script>

	$(document).ready(function(){

(function() {
var placesAutocomplete = places({
appId: 'plEHFE8OXN3L',
apiKey: 'a6eb12d44e181f3c3c3d02bd7cf7b2fd',
container: document.querySelector('#address')
});

var $address = document.querySelector('#address-value')
placesAutocomplete.on('change', function(e) {
$address.textContent = e.suggestion.value
});

placesAutocomplete.on('clear', function() {
$address.textContent = 'none';
});

})();


});
	
</script>

