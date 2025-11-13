<?php

    require_once 'db.php';  
    require_once 'consulta_pergunta.php';
    require_once 'funcoes.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style-avaliacao.css">
    <title>Avaliação</title>
</head>
<body>
    <form action="envia_dados.php" method="post">
        <?php if (!empty($perguntas)): ?>
            <?php foreach ($perguntas as $p): ?>
                <div class="perguntas">
                    <label><strong><?php echo htmlspecialchars($p['texto_pergunta']); ?></strong></label><br>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <?php $classe = definirCorNota($i)?>
                    <label class="btn-avaliacao <?= $classe; ?>">
                        <input class="nota" type="radio" name="nota[<?= $p['id']; ?>]" value="<?= $i; ?>" required>
                        <?php echo $i; ?>
                    </label>
                    <?php endfor; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhuma pergunta encontrada.</p>
        <?php endif; ?>
        <div>
            <label for="feedback" class="titulo_feedback">Comentário (opcional):</label><br>
            <textarea name="feedback" id="feedback" rows="3" cols="40"></textarea>
        </div>
        <button type="submit">Enviar Avaliação</button> 
    </form>

    <footer>
        Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.
    </footer>        
</body>
</html>