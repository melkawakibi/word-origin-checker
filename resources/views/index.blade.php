<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table {
		    float: left;
		    clear: left;
		    width: 285px;
		    }

		tr, td, th {
		    margin:auto;
		    }

		td, th {
		    padding:5px;
		    vertical-align:top;
		    }

		th {
		    font-weight:bold;
		    background:#ddd;
		    }

		td {
		    border:1px solid #ddd;
		    }
	</style>
</head>
<body>

	<table>
		<tr>
			<th>Id</th>
			<th>English Word</th>
			<th>Origin</th>
		</tr>

		@foreach($words as $word)
		<tr>
			<td> {{ $word->id }} </td>
			<td> {{ $word->english }} </td>
			<td> {{ $word->origin }} </td>	
		</tr>
		@endforeach			
	</table>

</body>
</html>