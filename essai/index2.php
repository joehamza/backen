<?php
session_start();
if(isset($_POST["password"])){
$password=$_POST["password"];
if($password=="sessionucaski" ){
@$_SESSION["auto"]="oui";
header("location:http://oaicucaski.eb2a.com");
}
else{echo"<div style='color:red;font-size:40px;'>Mot de passe incorrect</div>";}
}
?>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
<html> 
  
<head> 
    <meta charset="UTF-8"> 
  <link rel="icon" href="ecran 3D.ico" >
    <style> 
        h3 { 
            text-align: center; 
        } 
		em{color:#333333;font-size:40px;}
  
        img { 
            display: block; 
            margin: auto; 
            height: 150px; 
            width: 150px; 
        } 
  
        .input { 
            margin: 6px; 
            padding: 10px; 
            display: block; 
            margin: auto; 
            color: palevioletred; 
            font-size: 30px; 
        } 
  
        input { 
            width: 50%; 
            display: block; 
            margin-left: 12px; 
            background: none; 
            background-color: lightyellow; 
			font-size:30px;
        } 
  
        
        #heading { 
            font-family: cursive; 
            text-align: center; 
            color: green; 
            padding-top: 20px;
			font-size:40px; 
  
        } 
  
        
  
        #form_body { 
            border-radius: 12px; 
            height: 340px; 
            width: 590px; 
            background-color: beige; 
            border: 1px solid pink; 
            margin: auto; 
            margin-top: 12px; 
        } 
  
        
        #head { 
            border-bottom: 2px solid red; 
            height: 100px; 
            background-color: aliceblue; 
        } 
  
        #submit { 
            background-color: white; 
            width: 80px; 
			font-size:20px;
        } 
    </style> 
</head> 
  
<body> 
    <form method="post" > 
  <br><br>
            <div id="form_body"> 
                <div id="head"> 
                    <h1 id="heading">OAIC</h1> 
                </div> 
                <br /> 
                <div id="input_name" class="input"> 
				<center><em>Veuillez saisir le mot de passe</em>
				<br><br>
                    <input id="name" type="password" Placeholder="Mot de passe" name="password" required autofocus></center>
                </div> 
                  
                <div class="id input"> 
                    <input id="submit" type="submit" name="submit" value="Valider" />
                   
                </div> 
            </div> 
    </form> 
</body> 
   
</html> 