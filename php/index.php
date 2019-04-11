
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Sing Up</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-xs-6 col-xs-offset-3">
            <h2>Sign Up</h2> 
            <?php if(isset($_GET['error'])){
                echo '
                    <div class="alert alert-danger">
                    <strong>Error</strong> '.$_GET['error'].'
                    </div ';           
            }elseif (isset($_GET['success'])){
                   echo ' <div class="alert alert-success">
                    <strong>Success</strong>  '.$_GET['success'].'
                    </div>' ;  
            }?>
               
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input name="user" type="text" class="form-control" id="user">
                </div>
                <div class="form-group col-xs-4">
                    <label for="age">Edad:</label>
                    <input name="age" type="number" class="form-control" id="age">
                </div>
                <div class="form-group col-xs-4">
                    <label for="sel1">Selecciona tu ciudad:</label>
                    <select name="city" class="form-control" id="citys">
        
                    </select>
                </div>
                <div class="form-group col-xs-4">
                    <label for="sel1">Estado:</label>
                    <select name="state" class="form-control" id="states">
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>  
                <div class="form-group">
                    <label for="confirmPassword">Repite tus password:</label>
                    <input name="confirmPassword" type="password" class="form-control" id="confirmPassword">
                </div>  
        
                <button type="submit" name="button-submit" class="btn btn-primary">Ingresar</button>    
            </form>
        </div>
    </div>
    
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="citys.js"></script>
</html>