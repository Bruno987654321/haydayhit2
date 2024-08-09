<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Escola</title>
    <style>
        body {
            background-color: #8A2BE2; /* Fundo roxo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            border: 3px solid #32CD32; /* Borda verde limão */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #32CD32; /* Verde limão */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #228B22; /* Verde mais escuro para hover */
        }
    </style>
</head>
<body>
    <form action="processa_escola.php" method="POST">
        <h1>Cadastro de Escola</h1>
        <label for="CodEscola">Código da Escola:</label>
        <input type="text" id="CodEscola" name="CodEscola" required>

        <label for="NomeEscola">Nome da Escola:</label>
        <input type="text" id="NomeEscola" name="NomeEscola" required>

        <label for="CNPJ">CNPJ:</label>
        <input type="text" id="CNPJ" name="CNPJ" required>

        <label for="Cidade">Cidade:</label>
        <input type="text" id="Cidade" name="Cidade" required>

        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php include 'desenvolvedor.php'; ?>
</body>
</html>