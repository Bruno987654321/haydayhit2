<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
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
            border: 2px solid #32CD32; /* Borda verde limão */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #32CD32; /* Verde limão */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #228B22; /* Verde mais escuro para hover */
        }
    </style>
</head>
<body>
    <form action="processa_aluno.php" method="POST">
        <h1>Cadastro de Aluno</h1>
        <label for="CodAluno">Código do Aluno:</label>
        <input type="text" id="CodAluno" name="CodAluno" required>

        <label for="Aluno">Nome do Aluno:</label>
        <input type="text" id="Aluno" name="Aluno" required>

        <label for="RG">RG:</label>
        <input type="text" id="RG" name="RG" required>

        <label for="DtNascimento">Data de Nascimento:</label>
        <input type="date" id="DtNascimento" name="DtNascimento" required>

        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php include 'desenvolvedor.php'; ?>
</body>
</html>