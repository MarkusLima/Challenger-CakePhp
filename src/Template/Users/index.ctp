<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-list-users">
        <?php foreach ($user as $us) : ?>
            <div class="users">
                <span class="id">
                    <span class="span-titulo">ID</span>
                    <span class="span-"><?php echo $us->id; ?> </span>
                </span>
                <span class="name">
                    <span class="span-titulo">NAME</span>
                    <span class="span-"><?php echo $us->name; ?> </span>
                </span>
                <span class="cpf">
                    <span class="span-titulo">CPF</span>
                    <span class="span-"><?php echo $us->cpf; ?> </span>
                </span>
                <span class="nasc">
                    <span class="span-titulo">NASCIMENTO</span>
                    <span class="span-"><?php echo $us->dt_nascimento; ?></span>
                </span>
                <span class="email">
                    <span class="span-titulo">E-MAIL</span>
                    <span class="span-"><?php echo $us->email; ?> </span>
                </span>
                <span class="phone">
                    <span class="span-titulo">PHONE</span>
                    <span class="span-"><?php echo $us->phone; ?> </span>
                </span>
                <span class="address">
                    <span class="span-titulo">ADDRESS</span>
                    <span class="span-"><?php echo $us->address; ?> </span>
                </span>
                <span class="city">
                    <span class="span-titulo">CITY</span>
                    <span class="span-"><?php echo $us->city; ?> </span>
                </span>
                <span class="state">
                    <span class="span-titulo">STATE</span>
                    <span class="span-"><?php echo $us->state; ?> </span>
                </span>
                <span class="created">
                    <span class="span-titulo">CREATED</span>
                    <span class="span-"><?php echo $us->created; ?> </span>
                </span>
                <span class="modified">
                    <span class="span-titulo">MODIFIED</span>
                    <span class="span-"><?php echo $us->modified; ?> </span>
                </span>
            </div>
            <span class="actions">
                <a href="/">DETALHES</a>
                <a href="/">EDITAR</a>
                <a href="/">DELETAR</a>
            </span>
        <?php endforeach; ?>
    </div>

</body>

</html>
