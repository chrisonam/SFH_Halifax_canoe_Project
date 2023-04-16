<?php 


session_start();
$first=$_SESSION['firstname'];
$last= $_SESSION['lastname'];
$emailT=$_GET['emailType'];

include './pages/header.php';
?>

<section>
            <div class="title-section">
                 <?php
                    switch($emailT){
                        case'new_Acc':
                            echo '<h1> New account configuration here </h1></div>';
                            break;

                        case'lost_pwd':
                            echo'<h1> Lost password Instructions here </h1></div> <article>';
                              include ("instruction-pwd.php");
                            echo '</article>';
                            break;
                    }
                ?>

           

<?php 
    include './pages/footer.php';
?>
