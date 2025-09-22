<?php
    ob_start()
?>

<h1>Bem-vindo ao Link Manager</h1>
<p>Aqui você vai gerenciar seus links favoritos.</p>


<?php
    $content = ob_get_clean();
    require_once '/templates/layout.php';
?>

