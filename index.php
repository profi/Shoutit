<?php include 'database.php' ?>
<?php
$query="SELECT * FROM shouts";
$result=mysqli_query($con,$query);
$row;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shout it</title>
  <link rel="stylesheet" href=" css/style.css">
</head>
<body>

 <div id="container">
   <header>
     <h1>Shout it! Shoutbox</h1>
   </header>
   <div id="shouts">
    <ul>

      <?php  while($row = mysqli_fetch_assoc($result)) : ?>

      <li class="shout"><span><?php echo $row['time']?>:</span><strong><?php echo $row['user']?>:</strong><?php echo $row['message']?></li>

    <?php endwhile; ?>


    </ul>
   </div>
   <div id="input">
     <form method="post" action="process.php">
       <input type="text" name="user" placeholder="Enter your name" />
       <input type="text" name="message" placeholder="Enter your message..." />
       <br/>
       <input class="shout-btn" type="submit" name="submit" value="Shout it out" />

     </form>

</body>
</html>
