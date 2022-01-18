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
    <td><a href="logi.php" style="color:yellow">LOGOUT</a></td>
    </table><form>
    <br><center>
    <div style="color:pink">JUST FILL YOUR INFORMATION AND GET STARTED</div>
    <table>
      <tr>
   <td> <label style="color:blue">CITY<sup style="color:red">*</sup></label></td>
     <td> <input type="text" size=20 required></td>
     </tr>
     <tr>
      <td><label style="color:blue">PINCODE<sup style="color:red">*</sup></label></td>
      <td><input type="text" size=20 required></td>
      </tr>
    </table>
    <label style="color:red">CAR INFORMATION</label>
    <table>
      <tr>
   <td> <label style="color:blue">MFG YEAR<sup style="color:red">*</sup></label></td>
     <td> <input type="text" size=20 required></td>
     </tr>
     <tr>
       <td><label style="color:blue">MAKE</label></td>
       <td><select>
         <option>TATA</option>
       </select></td>
     </tr>
     <tr>
      <td><label style="color:blue">MODEL<sup style="color:red">*</sup></label></td>
      <td><input type="text" size=20 required></td>
      </tr>
       <tr>
      <td><label style="color:blue">KMs DRIVEN</label></td>
      <td><input type="text" size=20 required></td>
      </tr>
       <tr>
      <td><label style="color:blue">NO.OF OWNERS</label></td>
      <td><input type="text" size=20 required></td>
      </tr>
       <tr>
      <td><label style="color:blue">EXPECTED PRIZE</label></td>
      <td><input type="text" size=20 required></td>
      </tr>
    </table>
    <label style="color:red">CONTACT INFORMATION</label>
    <table>
      <tr>
   <td> <label style="color:blue">NAME<sup style="color:red">*</sup></label></td>
     <td> <input type="text" size=20 required></td>
     </tr>
     <tr>
      <td><label style="color:blue">MOBILE NUMBER<sup style="color:red">*</sup></label></td>
      <td><input type="text" size=20 required></td>
      </tr>
       <tr>
      <td><label style="color:blue">EMAIL ID</label></td>
      <td><input type="text" size=20 required></td>
      </tr>
      <tr>
        <td><input type="checkbox"><label style="color:red">I AGREE ALL TERMS AND CONDITIONS</label>
        </td>
      </tr>
      <tr>
        <td><button formaction="addi.php">POST LISTING</button></td>
      </tr>
    </table>
    </center>
    </form>
  </body>
</html>