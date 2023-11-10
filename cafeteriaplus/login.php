<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plus</title>
</head>
<body>
<form action="" method="POST">
      <?php
        include("conexion.php");
        include("controlador.php");
        ?>
    <div style="width: 100%; height: 100%; position: relative; background: #CF875E">
        <div style="width: 621px; height: 688px; left: 309px; top: 65px; position: absolute; background: black; border-radius: 30px"></div>
        
        <div>
        <input type="email" id="cemail" name="cemail" style="width: 458px; height: 73px; left: 411px; top: 436px; position: absolute; background: #D9D9D9; border-radius: 20px; font-size: 32px; font-family: Inter; font-weight: 400"/>
      </div>
        
            <div>
        <input type="password" name="pass" style="width: 458px; height: 73px; left: 411px; top: 555px; position: absolute; background: #D9D9D9; border-radius: 20px; text-align: center; color: rgba(0, 0, 0, 0.29); font-size: 32px; font-family: Inter; font-weight: 400"/>
      </div>
                
        <img style="width: 246px; height: 250px; left: 517px; top: 171px; position: absolute; border-radius: 430.50px" src="img/image 7.png" />
        <img style="width: 44px; height: 45px; left: 424px; top: 566px; position: absolute" src="img/image 20.png" />
        <img style="width: 41px; height: 41px; left: 427px; top: 449px; position: absolute; opacity: 0.50" src="img/image 21.png" />
        <div style="width: 252px; height: 75px; left: 640px; top: 644px; position: absolute">
        <div>        
        <input type="submit" value="-" name="btnenviar" style="width: 112.50px; height: 31.88px; left: 3.75px; top: 12px; color: white; font-size: 14px; font-family: Inter; position: absolute; font-weight: 700; background: #155C72; background:url('img/image 9.png') no-repeat; border-radius:50px; width: 200px;  height:50px; position: absolute" />
            

        </div>
            
    </div>
    </div>
    
    </form>    
</body>
</html>
