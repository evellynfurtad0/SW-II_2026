<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    <?php 
    //   $nome= $_POST['nome'];
      $nome =htmlspecialchars($_POST['nome']);
      $email= $_POST['email'];
      $idade= $_POST['idade'];

      $ano_atual= date('Y');
      $nasc=$ano_atual-$idade;
      
    ?>

    <p>O nome é: <?php echo $nome;?><p> 
    <p>O email é: <?php echo $email;?><p> 
    <p>A sua idade é: <?php echo $idade;?><p> 
    <p>Ahh então você nasceu no ano de <?php echo $nasc; ?><p>
    <?php
        if ($idade>=18) {
            echo"<p style='color:green'>Maior de idade</p>";
        }else{
            echo"<p style='color:red'>Menor de idade</p>";
        }
    ?>
</body>
</html>