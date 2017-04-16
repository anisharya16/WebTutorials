<html>
<head>
<title>class 4 ex2</title>
</head>
<body>
<?php
  $users = array(
    'John' => 'Doe',
    'Jane' => 'Doe',
    'Joe' => 'Bloggs',
	//index name => value
  );
  //associative array
?>

<table>
<tr>
  <th>First name</th>
  <th>Last name</th>
</tr>
<?php foreach($users as $first_name => $last_name): ?>
  <tr>
     <td><?php echo $first_name ?></td>
     <td><?php echo $last_name ?></td>
  </tr>
<?php endforeach; ?>
</table>
</body>
</html>
