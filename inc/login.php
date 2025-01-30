 <?php
 
    require('../admin/DB/connect.php');
    
    session_start();

    // <------- Valida sessão / login começo -------> //

    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario_autenticado = false;

    $sql = 'SELECT nomeUsuario, senhaUsuario FROM usuarioLogin';
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["idUsuario"]. " - Name: " . $row["nomeUsuario"]. " " . $row["senhaUsuario"]. "<br>";
            if($row["nomeUsuario"] == $usuario && $row['senhaUsuario'] == $senha)
            {
                $usuario_autenticado = true;
            }

            if($usuario_autenticado){ # Após autenticação do usuário estar correta, será redirecionado a página home administrativa #
                echo "Usuário Autenticado";
                $_SESSION['autenticado'] = 'SIM';
                header('Location: home.php');
                exit;
            }
            else
            {
                $_SESSION['autenticado'] = 'NÃO';
                header('Location: ../index.php?login=erro');
            }
        }
    } 
    $conn->close();

    // <------- Valida sessão / login fim -------> //

?>