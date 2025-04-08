<!DOCTYPE html>
<html>
<head>
    <title>Jogo</title>
</head>s
<body>
     <?php
     $jogador1 = $_POST["a"]   
    
    <?php
    $contador = 0;
    $numerosTexto = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //só entrará neste if quando o usuário digitar a partir do 1º valor
        if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
            $numero = (float)$_POST['numero'];

            if ($numero != 0) {
                $contador = isset($_POST['contador']) ? (int)$_POST['contador'] : 0; //se o contador existir, será convertido pra float, senão será 0
                $numerosTexto = isset($_POST['numerosTexto']) ? $_POST['numerosTexto'] : ''; //se numerosTexto existir, armazenará o valor em $numerosTexto
                $contador++;
                
                // Atualiza a string com os números, separados por vírgula
                if ($numerosTexto === '') {
                    $numerosTexto = $numero; // Se a string estiver vazia, recebe o número atual
                } else {
                    $numerosTexto = $numerosTexto . ', ' . $numero; // Caso contrário, adiciona o número com uma vírgula
                }
                
            }
        }
    }
    ?>
    
    <form method="post">
        <label for="numero">Tente adivinhar o numero:</label>
        <input type="number" step="any" name="numero" id="numero" required>
        <input type="hidden" name="contador" value="<?php echo $contador; ?>">
        <input type="hidden" name="numerosTexto" value="<?php echo htmlspecialchars($numerosTexto); ?>">



        <button type="submit">Adicionar</button>
    </form>
    
    <?php if ($contador > 0): ?>
        <h2>Resultado:</h2>
        <p>Números digitados: <?php echo htmlspecialchars($numerosTexto); ?></p>
        <p>Total de números: <?php echo $contador; ?></p>
      
    <?php endif; ?>
    <?php if($numero >)

</body>
</html>
