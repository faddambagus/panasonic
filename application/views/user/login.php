<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: light;  
}  
button {   
       background-color: lightseagreen;   
       width: 100%;  
        color: light;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid lightseagreen;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    } 	
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: light;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> IT Login Form </h1> </center>   
    <form>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Masukkan Username Anda" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Masukkan Password Anda" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>     
</body>     
</html>  