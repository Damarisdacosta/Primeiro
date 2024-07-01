<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Adicionando Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header-title {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        main {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="header-title">Cadastrar subcategorias</header>
    <main>
        <form class="container">
            <div class="form-group">
                <label for="nomecat">Subcategoria</label>
                <input type="text" class="form-control" id="nomecat" name="nomecategoria" placeholder="Nome da categoria">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </main>
    <!-- Adicionando Bootstrap JS (opcional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
