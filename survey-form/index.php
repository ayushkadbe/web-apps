
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80;
        background-color: lightblue;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    
    <div class="container">
        
    <?php
    //sudo /opt/lampp/lampp start
        $str = "this is a string";
        echo "this is joint text ".$str;
    ?>
    </div>
    
</body>
</html>