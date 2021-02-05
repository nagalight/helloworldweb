<html>
<head>
  <title> PHP Test</title>
</head>
<body>
  <?php 
  echo '<p>Hello World</p>';
  echo '<p></p>';
  echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>';
  $host_heroku = "ec2-54-157-149-88.compute-1.amazonaws.com";
  $db_heroku = "d1vgcd4es56qat";
	$user_heroku = "qanxxdddkskppr";
	$pw_heroku = "893444577927e87ce38eb3dfe6a54196f9886db297c028fe49bdf34227fd611c";
	$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
	$pg_heroku = pg_connect($conn_string);
  
  if (!$pg_heroku)
  {
    die('Error: Could not connect: ' . pg_last_error());
  }
  # Get data by query
  $query = 'select * from test_lab6';
  $result = pg_query($pg_heroku, $query);
  # Display data column by column
  $i = 0;
  echo '<html><body><table><tr>';
  while ($i < pg_num_fields($result))
  {
    $fieldName = pg_field_name($result, $i);
    echo '<td>' . $fieldName . '</td>';
    $i = $i + 1;
  }
  echo '</tr>';
  # Display data row by row
  $i = 0;
  while ($row = pg_fetch_row($result)) 
  {
    echo '<tr>';
    $count = count($row);
    $y = 0;
    while ($y < $count)
    {
      $c_row = current($row);
      echo '<td>' . $c_row . '</td>';
      next($row);
      $y = $y + 1;
    }
    echo '</tr>';
    $i = $i + 1;
  }
  pg_free_result($result);

  echo '</table></body></html>';
  ?>
  
<body>
</html>
