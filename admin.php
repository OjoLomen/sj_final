<?php
include_once('partials/header.php');
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?> 
    <main>
                <?php
                    //print_r($_SESSION);
                    if($_SESSION['is_admin'] == 1){
                        include('partials/admin-kontakt.php');
                    }
                    else{
                        header('Location: index.php');
                        die();
                    }
                    ?>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 