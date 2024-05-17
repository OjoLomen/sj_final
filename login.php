<?php
ob_start(); // Start output buffering

include_once('partials/header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header('Location: admin.php');
    exit; // Ensure script execution stops after redirection
}
?> 

<body>
    <main>
        <section class="container form-container">
            <div style="justify-content: center; display: grid">
                <h1 style="margin-bottom: 20px">Prihlásenie</h1>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td><input type="email" name="email" placeholder="Váš email" style="margin-bottom: 20px; border-radius: 10px"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" placeholder="Vaše heslo" style="margin-bottom: 20px; border-radius: 10px"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Odoslať" name="user_login" style="margin-bottom: 20px; border-radius: 10px; background-color: orange"></td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php

        if(isset($_POST['user_login'])){
            $email = $_POST['email'];
            $password = $_POST['password']; 

            $user_object = new User();

            $login_success = $user_object->login($email,$password);
            //ak metóda vráti TRUE
            if($login_success == true){
                header('Location: admin.php');
                exit; // Ensure script execution stops after redirection
            }else{
                echo 'Nesprávne meno alebo heslo';
            }
        }

        ?>
        </section>
    </main>
</body>
    
<?php
include_once('partials/footer.php');
ob_end_flush(); // Flush the output buffer
?>