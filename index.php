<!DOCTYPE html>
<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "style/registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Email Collection</h2>    
        <form name = "form1" action="form.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">       
                <div class = "form_group">    
                    <span>Email:</span>    
                    <input type = "email" name = "email" value = "" required />    
                </div>       
                <div class = "submit_group">      
                    <input type = "submit" name = "save" value = "Submit"/>    
                </div>       
            </div>    
        </form>    
    </body>    
</html>    