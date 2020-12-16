:<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Registro</h1>
        <ul>
            <?php foreach($menu as $item): ?>

                <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php echo validation_errors(); ?>

        <?php 
            echo form_open('registro/create', array('method' => 'POST'));
    
            echo form_label("nombre de usuario");
            echo form_input("username");
            echo "<br>";

            echo form_label("correo electronico");
            echo form_input(array("type" => "email", "name" => "email"));
            echo "<br>";
            echo form_label("contraceña");
            echo form_password("password");

            echo "<br>";
            echo form_label("confirmacion contraceña");
            echo form_password("password_confirm");
            echo "<br>";
            echo form_submit("submit", "enviar datos");
            echo form_close();
        ?>

        <?= isset($msg) ? $msg : ""?>
    </body>
</html>