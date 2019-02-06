<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style rel="stylesheet">
	table, th, td {
    	border: 1px solid black;
	}
	.geo-table tr{
		width: 100%;
	}
	tr, td{
		width: 10%;
	}
	</style>
</head>
<body>
	<div class="container">
		{{json_encode($geoLocationslist)}}

		<!-- <table>
			<tr>
				<th>Id</th>
				<th>City name</th>
				<th>Zip Code</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Geo Code</th>
			</tr>
		    @foreach ($geoLocationslist as $geoLocation)
		    	<tr>
			        <td>{{$geoLocation -> id}}</td>
			        <td>{{$geoLocation -> city_name}}</td>
			        <td>{{$geoLocation -> zip_code}}</td>
			        <td>{{$geoLocation -> geo_lat}}</td>
			        <td>{{$geoLocation -> geo_lon}}</td>
			        <td>{{$geoLocation -> geo_code }}</td>
		        </tr>
		    @endforeach
		</table> -->
	</div>
</body>
</html>