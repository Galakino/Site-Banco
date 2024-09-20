<?php 
include_once("conexao-form-bd.php");

if (isset($_POST['update'])) {
    if (!empty($_POST['edit'])) {
        $id = $_POST['edit'];
        $nome = $_POST['nomeCliente'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];
        $cartao = $_POST['cartao'];

        // Verificar se o cartão foi fornecido
        if ($cartao !== null) {
            // Verificar se o cartão já está cadastrado (caso não esteja vazio)
            if (!empty($cartao)) {
                $stmt = $conexao->prepare("SELECT * FROM `sitebanco`.`clientes` WHERE `cartao` = ? AND `id` != ?");
                $stmt->bind_param("si", $cartao, $id);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if ($resultado->num_rows == 0) {
                    // Cartão não cadastrado, podemos atualizar
                    $sqlUpdate = "UPDATE `sitebanco`.`clientes` SET `nomeCliente`=?, `cep`=?, `email`=?, `cartao`=? WHERE `id`=?";
                    $stmtUpdate = $conexao->prepare($sqlUpdate);
                    $stmtUpdate->bind_param("ssssi", $nome, $cep, $email, $cartao, $id);
                    $stmtUpdate->execute();

                    header('Location: home.php');
                    exit();
                } else {
                    echo "Esse cartão já está cadastrado.";
                }
            } else {
                // Atualizar com o campo de cartão vazio
                $sqlUpdate = "UPDATE `sitebanco`.`clientes` SET `nomeCliente`=?, `cep`=?, `email`=?, `cartao`=NULL WHERE `id`=?";
                $stmtUpdate = $conexao->prepare($sqlUpdate);
                $stmtUpdate->bind_param("sssi", $nome, $cep, $email, $id);
                $stmtUpdate->execute();

                header('Location: home.php');
                exit();
            }
        } else {
            // Atualizar sem o campo de cartão
            $sqlUpdate = "UPDATE `sitebanco`.`clientes` SET `nomeCliente`=?, `cep`=?, `email`=? WHERE `id`=?";
            $stmtUpdate = $conexao->prepare($sqlUpdate);
            $stmtUpdate->bind_param("sssi", $nome, $cep, $email, $id);
            $stmtUpdate->execute();

            header('Location: home.php');
            exit();
        }
    }
}
?>
