
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<?php
    session_start();
    if(isset($_POST['button_calc']))
    {
       echo "Bonjour Calculette!!" ;
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];
        if($op =="+")
            {
                $r = $n1+$n2;
            }
            else if($op =="-")
            {
                $r = $n1-$n2;
            }
            else if($op == "*")
            {
                $r =  $n1*$n2;
            }
            else if($op =="/")
            {
                $r = $n1/$n2;
            }
            echo '$r';
            $_SESSION['resultat'] = $r;
    }
    

    
    
    
?>
<form method="post" action="">
        <label for="n1">n1</label>
        <input type="text" name="n1" value="<?php if(isset($_POST['n1'])) echo $_POST['n1'];?>"/>
        <br/>
        <label for="n2">n2</label>
        <input type="text" name="n2" value="<?php if(isset($_POST['n2'])) echo $_POST['n2'];?>"/>
        <label for="op">op</label>
        <input type="text" name="op" value="<?php if(isset($_POST['op'])) echo $_POST['op'];?>"/>
        <br/>
        <button type="submit" name="button_calc">Calculer</button>
    </form>
</body>
</html>