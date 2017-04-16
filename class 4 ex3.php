<html>
<head>
<title>class 4 ex3</title>
</head>
<body>
<?php
$movies = array(
    array('Office Space' , 'Comedy' , 'Mike Judge' ),
    array('Matrix' , 'Action' , 'Andy / Larry Wachowski' ),
    array('Lost In Translation' , 'Comedy / Drama' , 'Sofia Coppola' ),
    array('A Beautiful Mind' , 'Drama' , 'Ron Howard' ),
    array('Napoleon Dynamite' , 'Comedy' , 'Jared Hess' )
);

echo '<table border="5">';
echo '<tr><th>Movies</th><th>Genre</th><th>Director</th></tr>';
foreach( $movies as $movie )
{
    echo '<tr>';
    foreach( $movie as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>
