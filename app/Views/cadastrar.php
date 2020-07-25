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
  <div class="formBody">
    <form name="formContact" method="POST" action="/create">
      <div class="form-group">
        <label for="nome" class="labels">Nome</label>
        <input class="form-control nomeInputStyle" id="nome" maxlength="80" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email" class="labels">Email</label>
        <input class="form-control nomeInputStyle" type="email" id="email" maxlength="80" name="email" required>
      </div>
      <div class="form-group">
        <label for="senha" class="labels">Senha</label>
        <input class="form-control senhaInputStyle" minlength="4" type="password" id="senha" maxlength="20" name="senha" required>
      </div>
      <div class="form-group">
        <label for="cpf" class="labels">CPF</label>
        <input class="form-control cpfInputStyle" id="cpf" maxlength="15" name="cpf" required></textarea>
      </div>

      <div class="form-group">
        <label for="sexo" class="labels">Sexo</label>
        <select class="form-control selectStyle" id="sexo" name="sexo">
          <option value="M">Masculino</option>
          <option value="F">Feminino</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>