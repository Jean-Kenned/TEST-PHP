<!DOCTYPE html>
<html>

<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
</head>

<body>
  <div class=" navbar-light bg-light navbar-center">
    <h1 class="headerTitle">Cadastro</h1>
  </div>

  <div class="container">
    <h5>Dados do Usuário cadastrado</h5>
    <div class="row">
      <div class="col-12">
        <table class="table table-hover tableUser" >
          <thead>
            <tr>
              <?php
              foreach ($usuarioCadastrado as $key => $value) {
              ?>
                <th scope="col"><?php echo $key ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              foreach ($usuario as $key => $value) {
              ?>
                <td><?php echo $value ?> </td>
              <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <a  style="display:inline-block;" href="/">Voltar a página de login</a>
  </div>
 

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>