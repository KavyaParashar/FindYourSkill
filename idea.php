<?php
require "config.php";
    $query=mysqli_query($con,"SELECT * FROM `ideas` WHERE 1");
    if (mysqli_num_rows($query)>0) 
    {
        $results = array();$a=0;
        while($data=mysqli_fetch_object($query))
		{
                $results[$a][0]=$data->name; 
                $results[$a][1]=$data->number;
                $results[$a][2]=$data->pname; 
                $results[$a][3]=$data->email;
                $results[$a][4]=$data->pdescription; 
                $a++;
        }
    }
    else{
        echo "Sorry not found";
    }
?>
<html>
    <head>
        <title>!deas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
</html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Project Name</th>
      <th scope="col">Project Description</th>
    </tr>
  </thead>

  <tbody>
  <?php 
  for($i=0;$i<$a;$i++) { 
?>
    <tr>
      <td><?php echo $results[$i][0]; ?></td>
      <td><?php echo $results[$i][3]; ?></td>
      <td><?php echo $results[$i][1]; ?></td>
      <td><?php echo $results[$i][2]; ?></td>
      <td><?php echo $results[$i][4]; ?></td>
    </tr>
  <?php } ?>
</tbody>
</table>
  </body>
  </html>