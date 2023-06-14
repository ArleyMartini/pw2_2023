<?php
require_once "controllers/UsuarioController.php";
include_once("restrict.php");

if (isset($_SESSION['mensagem'])) {
    echo "<script>alert('" . $_SESSION['mensagem'] . "')</script>";
    unset($_SESSION['mensagem']); // Limpar a variável de sessão após exibir o alerta
}

$usuarioController = new UsuarioController();
$usuarios = $usuarioController->findAll();




// if (isset($_GET["id"])) {
// 	$usuarioController = new UsuarioController();
// 	$usuario = $usuarioController->findById($_GET["id"]);
// }

// if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
// 	$usuarioController = new UsuarioController();

// 	// Construindo o objeto Usuário
// 	$usuario = new Usuario(null, $_POST["nome"], $_POST["usuario"], $_POST["senha"]);

// 	// Salvando ou atualizando o Usuário
// 	if (isset($_GET["id"])) {
// 		$usuario->setId($_GET["id"]);
// 		$usuarioController->update($usuario);
// 	} else {
// 		$usuarioController->save($usuario);
// 	}

// 	// Redirecionando para a página anterior
// 	header("Location: ?pg=usuarios");
// 	exit();
// }
?>

<div class="container mt-2">
    <h1 class="text-center mb-0">Editor de Cadastro</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($usuario) ? $usuario->getNome() : ''; ?>">
        </div>
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo isset($usuario) ? $usuario->getLogin() : ''; ?>">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" name="senha">
        </div>
        <input type="submit" class="btn btn-primary" id="salvar" name="salvar" value="Salvar">
        <button class="btn btn-warning" onclick="">Alterar</button>
        <a type="submit" class="btn btn-success" onclick="limpaCampo()">Novo</a>
    </form>
</div>

<div class="container mt-4">
    <h2>Usuários cadastrados</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->getId(); ?></td>
                    <td><?php echo $usuario->getNome(); ?></td>
                    <td><?php echo $usuario->getLogin(); ?></td>
                    <td>
                        <button class="btn btn-info" onclick="selecionarUsuario(<?php echo $usuario->getId(); ?>)">Selecionar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    function selecionarUsuario(id, nome, usuario, senha) {
        // Preencher os campos do formulário com os dados do usuário selecionado
        document.getElementById("nome").value = nome;
        document.getElementById("usuario").value = usuario;
        document.getElementById("senha").value = senha;
    }
</script>

<!-- Área para os Scripts Java Scripts -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/gridUsuario.js"></script>