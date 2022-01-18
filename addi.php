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
    .d1
    {
      color:blue;
      font-size:30px;
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
    <td><a href="log.php" style="color:yellow">LOGOUT</a></td>
    </table>
    <br><center>
    <div style="color:pink">UPLOAD IMAGE<button>CHOOSE FILE</button></div><br><br>
    <label style="color:red">LISTING  DETAILS</label>
    <form>
    <table>
      <tr>
   <td> <label style="color:blue">FUEL TYPE<sup style="color:red">*</sup></label></td>
     <td><select>
         <option>PETROL</option>
         <option>DIESEL</option>
       </select></td>
     </tr>
     <tr>
      <td><label style="color:blue">COLOR<sup style="color:red">*</sup></label></td>
      <td><select>
         <option>RED</option>
         <option>GREEN</option>
         <option>BLUE</option>
       </select></td>
      </tr>
      <tr>
   <td> <label style="color:blue">REGISTRATION NO<sup style="color:red">*</sup></label></td>
     <td> <input type="text" size=20 required></td>
     </tr>
     <tr>
       <td><label style="color:blue">INSURANCE VALID TILL</label></td>
       <td><input type="text" size=20></td>
     </tr>
     <tr>
      <td><label style="color:blue">TELL THE BUYER WHY SHOULD YOU SELL CAR</label></td>
      <td><textarea></textarea></td>
      </tr>
      <tr>
        <td><button formaction="thir.php">POST LISTING</button></td>
      </tr>
    </table>
    </form>
    </center>
  </body>
</html>