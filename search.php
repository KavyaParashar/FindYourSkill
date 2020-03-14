<!-- SELECT * FROM portfolio WHERE skills LIKE "%'$var'%"; -->
<!DOCTYPE html>
<html>
    <head>
        <title>Search | Find Your Skill</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <style>
            #id01 {
                padding: 15px;
            }
            #id02 {
                border: 15px;
            }
        </style>
    </head>

    <body>
    <div>
      
        </div>  
        <form action="search.php" method="post">
        <div class="form-group" id="id01">
    <label>Search:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="search">
</div>
<center>
            <button name="submit" id="id02" class="btn btn-primary" type="submit">Submit</button>
            </center>
        </form>
    </body>
</html>

<?php
require "config.php";
if(isset($_POST["submit"]))
{
    $search= $_POST["search"];
    $query=mysqli_query($con,"SELECT * FROM portfolio WHERE skills LIKE '%$search%'");
    if (mysqli_num_rows($query)>0) 
    {
        $results = array();$a=0;
        while($data=mysqli_fetch_object($query))
		{
                $results[$a][0]=$data->name; 
                $results[$a][1]=$data->email;
                $results[$a][2]=$data->number; 
                $results[$a][3]=$data->skills;
                $results[$a][4]=$data->github;
                $results[$a][5]=$data->message;  
                $a++;
        }
    }
    else{
        echo "Sorry not found";
    }
}
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Skills</th>
      <th scope="col">Github</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

  <tbody>
  <?php 
  if(isset($_POST["submit"]))
  {
  for($i=0;$i<$a;$i++) { 
?>
    <tr>
      <td><?php echo $results[$i][0]; ?></td>
      <td><?php echo $results[$i][1]; ?></td>
      <td><?php echo $results[$i][2]; ?></td>
      <td><?php echo $results[$i][3]; ?></td>
      <td><?php echo $results[$i][4]; ?></td>
      <td><?php echo $results[$i][5]; ?></td>
    </tr>
  <?php }} ?>
</tbody>
</table>