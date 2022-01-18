<html>
  <head>
    <title>
      SELL
    </title>
    <style>
    body
    {
          background-image: url("car.png");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size:100%100%;

    }
    #d1
    {
      position:relative;
      left:500px;
      font-size:30px;
      color:purple;
      top:30px;
    }
    </style>
     <?php
      $hostname="localhost";
      $username="root";
      $password="";
      $database="car";
      $conn=mysqli_connect($hostname,$username,$password,$database);
      if(!$conn)
      {
        die("connection failed".mysqli_connect_error());
      }
      else{
        echo "connection successfully";
      }
      $sql="select * from message";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
          while($row=mysqli_fetch_assoc($result))
          {
             echo" <table>";
             echo "<tr>";
             echo "<td>".$row['name'];
             echo "<td>".$row['number'];
             echo "<td>".$row['message'];
          }
      }
    ?>
  </head>
  <body>
     <center><h1 style="color:red;font-size:80px">USED CAR</h1>
    </center>
    <table>
      <tr>
   <td> <a href="thir.php" style="color:yellow">HOME</a></td>
   <td>    </td>
    <td><a href="view.php" style="color:yellow">MY USED CAR LISTING</a></td>
    <td>  </td>
    <td><a href="sell.php" style="color:yellow">SELL YOUR CAR</a></td>
    <td>  </td>
    <td><a href="enq.php" style="color:yellow">ENQUIRIES</a></td>
    <td>   </td>
    <td><a href="editprofile.php" style="color:yellow">EDIT PROFILE</a></td>
    <td>  </td>
    <td><a href="viewlis.php" style="color:yellow">VIEW FULL LISTING</a></td>
    <td>  </td>
    <td><a href="logi.php" style="color:yellow">LOGOUT</a></td>
    </table>
    
      <div id="d1"> MESSAGE
   
    </div>
    </body>
  </html>