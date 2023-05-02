<?php
include_once '/Desafio/controller/RefreshPage.php';
include_once 'head.php';
include_once '/Desafio/model/conexao.class.php';
include_once '/Desafio/model/Manager.class.php';

$manager = new Manager();
?>
<!-- Folha de Estilo(CSS) - Direta -->
<link rel="stylesheet" href="../assets/style/style.css">
<link rel="shortcut icon" href="/Desafio/assets/img/favicon.ico" type="image/x-icon">

<title>Home</title>

<body>
<div class="container">

    <div class="container-fluid">

        <div class="titulo col-md-4">
            <!--                DIV VAZIA-->
        </div>

        <div class="titulo col-md-4">
            <div class="display-flex">
                <img class=logo src="/Desafio/assets/img/logo.png" alt="Logo">
                <h2 class="titulo client-list-register m-0">Lista de clientes<i class="cor-list pl-2 fa fa-list"></i>
                </h2>
            </div>
        </div>

        <div class="col-md-4">
        </div>

    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="col-md-6">
                <h5 class="text-star texto-centro">
                    <a href="http://localhost/Desafio/home/logout" class="btn btn-danger btn-xs"><i class=" fa fa-x"></i>Sair</a>
                </h5>
            </div>

            <div class="col-md-6">
                <h5 class="text-end texto-centro">
                    <a href="http://localhost/Desafio/register" class="btn btn-primary btn-xs"><i class="pr-2 fa fa-user-plus"></i>Registrar</a>
                </h5>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="tabela-principal" class="table table-hover border-radius">
            <thead class="thead text-center">
            <tr class>
                <th class="border-left-radius">ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de nascimento</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th class="border-right-radius" colspan="3">Acões</th>
            </tr>
            </thead>

            <tbody>


            <?php foreach ($manager->listClient("registros") as $client) : ?>
                <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $client['name']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['cpf']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($client['birth'])); ?></td>
                    <td><?php echo $client['address']; ?></td>
                    <td><?php echo $client['phone']; ?></td>
                    <td class="text-center td-edit">

                        <form method="post" action="http://localhost/Desafio/update">

                            <input type="hidden" name="id" value="<?= $client['id'] ?>">

                            <button class="btn btn-warning btn-xs">
                                <i class="fa fa-user-edit"></i>
                            </button>
                        </form>

                    </td>
                    <td class="text-center td-edit">
                        <form method="post" action="/Desafio/controller/delete_client.php"
                              onclick="return confirm('Tem certeza que deseja excluir?');">

                            <input type="hidden" name="id" value="<?= $client['id'] ?>">

                            <button class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>

        </table>
    </div>

</div>

</body>

</html>