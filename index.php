<html>
<head>
  <title>Exemplo PHP</title>
</head>
<body>
      <!-- Página html com codigo php incorporado,
      que faz conexão com banco de dados -->
      <?php
      ini_set("display_errors", 1);
      header('Content-Type: text/html; charset=iso-8859-1');



      echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

      $servername = "54.234.153.24"; //ip do host
      $username = "root";
      $password = "Senha123";
      $database = "meubanco";

      // Criar conexão

      $link = new mysqli($servername, $username, $password, $database);

      /* check connection */
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }
      // Variáveis randomicas para serem inseridas no banco de dados.
      $valor_rand1 =  rand(1, 999);
      $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1)); //gerar aleatórios; tipo string
      $host_name = gethostname(); //Nome da máquina que esta salvando informação no momento



      $query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";
      // Pega as informações geradas aleatoriamente e da um insert no banco


      if ($link->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $link->error;
      }

      ?>
</body>
<!-- 
  Para rodar um código php, é necessário um servidor Web (Apache), assim como o Php instalado.
  Então deve se criar um container e colocar o arquivo index.php dentro do container.
 -->
</html>
