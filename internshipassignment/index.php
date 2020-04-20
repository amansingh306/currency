
<html>
    <head>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currency Converter</title>
    </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                          
                    </button>
                    <a href="http://localhost/internshipassignment/index.php" class="navbar-brand">Currency Converter</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://localhost/internshipassignment/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        
                        <li><a href="http://localhost/internshipassignment/signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
                    </ul>
                      
                   
                </div>
                
            </div>
            
        </nav>
        <h1>USD-INR Price rate</h1>
       <form method="post" action="currency-form">
Enter Currency:<input type="text" name="input"/>
Select country:
<select name="dropdown">
    <option value="usd">Us Dollar</option>
    <option value="inr">INR</option>
</select>
<input type="submit" name="sbmt" value="Convert"/>
</form>
        
    </body>
</html>
<?php
if
    (isset(filter_input(INPUT_POST, 'var_name')['convert']))
{
    $cc_input=filter_input(INPUT_POST, 'var_name')['input'];
    if($cc_dropdown=='usd')
    {
     {$output= $cc_input* 0.0130643 ;
     echo"<h1>"."Dollar"."</h1>";
     }
    if($cc_dropdown=='INR')
        {
        $output=$cc_input*76.5447;
        echo"<h1>"."Indian Rupee"."</h1>";
    }
        
    }
}
?>