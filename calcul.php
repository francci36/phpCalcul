<?php
function calculNumb($n1,$n2)
{
    $numb = $
}
?>
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
    if(isset($_POST['submit']))
    {
        
    }
    
    if($op=="+")
    {
        echo $n1+$n2
    }
    else if($op=="-")
    {
        echo $n1-$n2
    }
    else if($op=="*")
    {
        echo $n1*$n2
    }
    if($op=="/")
    {
        echo $n1/$n2
    }
    
?>
<form method="post" action="">
        <label for="n1">n1</label>
        <input type="text" name="n1" value="<?php if(isset($_POST['n1'])) echo $_POST['n1'];?>"/>
        <br/>
        <label for="n2">n2</label>
        <input type="text" name="n2" value="<?php if(isset($_POST['n2'])) echo $_POST['n2'];?>"/>
        <br/>
        <button type="submit" name="submit">Calculer</button>
    </form>
</body>
</html>