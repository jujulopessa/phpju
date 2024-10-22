<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="eow d-flex justify-content-center align-items-center h-100">
                <div class="jumbotron">
                    <!-- Cabeçalho da página -->
                    <div class="row">
                        <h2>AULA DE PBE - CRUD <span class="badge text-bg-secondary"> v 1.0.0 - SENAI - Aula PBE</span></h2>
                    </div>
                </div>

                <!-- Aqui o conteúdo do banco -->
                <div class="row">
                    <p>
                        <a class="btn btn-success" href="create.php">Add</a>
                    </p>
                    <!-- Dados da tabela -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>ID</th>
                                <th scope="col"></th>NOME</th>
                                <th scope="col"></th>ENDEREÇO</th>
                                <th scope="col"></th>TELEFONE</th>
                                <th scope="col"></th>E-MAIL</th>
                                <th scope="col"></th>IDADE</th>
                                <th scope="col"></th>AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'banco.php';
                            $pdo = Banco::conectar();
                            $sql = 'SELECT * FROM tb_alunos ORDER BY codigo DESC';
                            
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<th scope="row">' . $row['codigo'] . '</th';
                                echo '<td>' . $row['nome'] . '</td>';
                                echo '<td>' . $row['endereco'] . '</td>';
                                echo '<td>' . $row['fone'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . $row['idade'] . '</td>';
                                echo 'td width=250>';
                                echo '<a class="btn btn-primary" href="read.php?id=' . $row['codigo'] . '">Info</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" href="update.php?id=' . $row['codigo'] . '">Atualizar</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['codigo'] . '">Excluir</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Banco::desconectar();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <div class="text-white mb-md-0">
            Copyrigth c 2024. All rigths reserved.
        </div>
    </div>
</body>
</html>>