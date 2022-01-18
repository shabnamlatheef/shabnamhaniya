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
    
      <div id="d1">SEND MESSAGE
      <form>
      <table>
        <tr>
          <td><label style="color:orange">NAME</label></td>
          <td><input type="text" size=20></td>
        </tr>
        <tr>
          <td><label style='color:orange'>MOBILE</label></td>
          <td><input type="text" size=20></td>
        </tr>
        <tr>
          <td><label style='color:orange'>MESSAGE</label></td>
          <td><textarea></textarea></td>
        </tr>
        <tr>
          <td><button>SEND</button></td>
        </tr>
      </table>
    </form>
    </div>
    </body>
  </html>