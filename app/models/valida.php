<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 10:26
 */

class valida
{
    protected $email;
    protected $senha;

    /**
     * valida constructor.
     * @param $email
     * @param $senha
     */
    public function __construct($email, $senha){

        if ($_SESSION['tentativas'] > 3) {
            echo "<script type=\"text/javascript\">
                    document.getElementById(\"login-msg\").innerHTML='<p>Número de tentativas excedido!</p>';
                    document.getElementById(\"email\").disabled=true;
                    document.getElementById(\"pass\").disabled=true;
                </script>";
            //session_unset();
        } else {
            require_once(models . 'sql.php');
            $this->email = $email;
            $this->senha = $senha;
            $query = "SELECT * FROM usuarios WHERE email ='" . $this->email . "' AND auth_pass = '" . $this->senha . "' LIMIT 1";

            $sql = new sql;
            $result = $sql->select($query);


            if (mysqli_num_rows($result) == 0) {
                $_SESSION['tentativaHora'] = date("is");
                $_SESSION['tentativas'] = $_SESSION['tentativas'] + 1;
                echo $_SESSION['tentativas'];
                ?>
                <script type="text/javascript">
                    document.getElementById('login-msg').innerHTML = "<p>Email ou senha Inválidos!</p>";
                </script>
                <?php
            } else {

                $row = mysqli_fetch_assoc($result);

                $_SESSION['tentativas'] = 0;
                $_SESSION['id'] = $row['id'];
                echo "
                <script type='text/javascript'>
                window.location.replace(\"".base."\")
                </script>
                ";
            }
        }

    }
}