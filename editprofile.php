<html>
  <head>
    <style>
    body
    {
          background-image: url("car.png");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size:100%100%;

    }
    #div1
    {
      position:relative;
      left:500px;
      font-size:20px;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("input[type='radio']").change(function()
        {
          if ($(this).val() == "PASS")
          {
            $('#t1').show();
          }
           else
           {
            $('#t1').hide();
            }
        });
        $("input[type='radio']").change(function()
        {
          if ($(this).val() == "EMAIL")
          {
            $('#t2').show();
          }
           else
           {
            $('#t2').hide();
            }
        });
        
      });
    </script>
    <title>LOGIN</title>
  </head>
  <body >
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
   
     <div id="div1">
    <h2 style="color:white">REGISTER NOW</h2>
    <form>
     <table>
     <tr>
   <td> <label style="color:blue">NAME<sup style="color:red">*</sup></label></td>
     <td> <input type="text" size=20 required></td>
     </tr>
     <tr>
      <td><label style="color:blue">EMAIL<sup style="color:red">*</sup></label></td>
      <td><input type="email" size=20 required></td>
      </tr>
      <tr>
     <td> <label style="color:blue">CONFIRM EMAIL<sup style="color:red">*</sup></label></td>
      <td><input type="email" size=20 required></td>
      </tr>
      <tr>
     <td> <label style="color:blue">PASSWORD<sup style="color:red">*</sup></label></td>
     <td>  <input type="password" size=20></td>
     </tr>
     <tr>
      <td> <label style="color:blue">MOBILE<sup style="color:red">*</sup></label></td>
      <td><input type="text" size=20 required></td>
      </tr>
      <tr>
        <td> <label style="color:blue">PHONE NUMBER<sup style="color:red">*</sup></label></td>
      <td><input type="text" size=20 required></td>
      </tr>
      <tr>
        <td><label style="color:blue">STATE</label></td>
        <td><select>
          <option>SELECT STATE</option>
          <option>KERALA</option>
          <option>TAMIL NADU</option>
          <option>KARNATAKA</option>
        </select></td>
      </tr>
       <tr>
        <td><label style="color:blue">CITY</label></td>
        <td><select>
          <option>KOTTAYAM</option>
        </select></td>
      </tr>
      <tr>
        <td><label style="color:blue">STREET ADDRESS</label></td>
        <td><textarea rows=5 cols=25></textarea></td>
      </tr>
      <tr>
         <td><label style="color:blue">POSTAL CODE</label></td>
         <td><input type="text" size=20 required></td>
      </tr>
      </table>
      <label style="color:blue">YOUR LOGIN INFORMATION</label><br>
      <input type="radio"  name="qq" value="PASS"><label style="color:blue">PASSWORD</label><br>
      <input type="text" size="20" id="t1" hidden="true"><br>
       <input type="radio" name="qq" value="EMAIL"><label style="color:blue">EMAIL</label><br>
         <input type="text" size="20" id="t2" hidden="true"><br>
      <button formaction="thir.php">SUBMIT</button>
    </form>
    </div>
  </body>
</html>