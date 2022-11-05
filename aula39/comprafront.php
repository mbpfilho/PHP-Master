<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da compra</title>
</head>
<body>
    <h3>Cálculo da compra</h3>
    <form action="compraend.php">
        <p><input type="number" name="valor" id="" placeholder="Valor da compra"></p>
        <p>
            <select name="formapagamento" id="">
                <option value="avista" selected>À vista</option>
                <option value="cartao">Cartäo de crédito</option>
                <option value="aprazo">A prazo</option>
            </select>
        </p>
        <p><input type="text" name="nome" id="" placeholder="Nome do cliente"></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>