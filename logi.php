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
    <h2 style="color:white">MEMBER LOGIN</h2>
    <form>
      <label style="color:blue">EMAIL</label>
      <input type="email" size=20>
      <label style="color:blue">PASSWORD</label>
      <input type="password" size=20>
      <button formaction="thir.php">LOGIN</button>
       <button formaction="reg.php">REGISTER NOW</button>
       <br><br><br>
       <div id="div1">
       <label style="color:white">SEARCH?</label><br><br>
       <label style="color:white">MODEL</label>
       <select>
         <option>MARUTHI</option>
       </select>
       <br>
       <label style="color:white">YEAR</label>
       <input type="text" size=20><br>
       <button>GO</button><br>
       <label style="color:white">CITY</label>
       <input type="text" size=20><br>
       <button>SEARCH</button></div>
    </form>
    
  </body>
</html>