<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zebra Styling</title>
<style>
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: red; 
}
tr:nth-of-type(even) { 
  background: blue; 
}

th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 10px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
</style>
</head>

<body>
<table>
	<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Job Title</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Arnab</td>
		<td>Sen</td>
		<td>Chief Executive Officer</td>
	</tr>
	<tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
    <tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
    <tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
    <tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
    <tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
    <tr>
		<td>Sonali</td>
		<td>Sharma</td>
		<td>Software professional</td>
	</tr>
	</tbody>
</table>
</body>
</html>
