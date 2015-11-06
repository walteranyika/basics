<html>
   <head>
     <title>Register</title>
     <style>
        form{
        	 width: 30%;
             margin: 0 auto; 
             padding: 3px;            
            }
         input{
              margin-bottom: 5px;              
            }

     </style>
   </head>   
   <body>
     <form action="receive.php" method="POST">
	    <input type="text" name="names" required placeholder="Names" class="a"/>
		<input type="email" name="email" required placeholder="Email" class="a"/>
		<input type="password" name="pass" required placeholder="Password" class="a"/><br>		
		<input type="radio" name="gender" checked value="Male"/>Male<br>		
		<input type="radio" name="gender" value="Female"/>Female<br>
		<input type="submit" value="Register" class="a"/>
	 </form>   
   </body>
</html>



