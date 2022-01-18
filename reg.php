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
    <title>LOGIN</title>
  </head>
  <body >
    <center><h1 style="color:red;font-size:80px">USED CAR</h1>
    </center>
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
      <button formaction="logi.php">LOGIN</button>
    </form>
    </div>
  </body>
</html>