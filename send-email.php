<?php 
include './pages/header.php';

session_start();
$first=$_SESSION['firstname'];
$last= $_SESSION['lastname'];
$emailT=$_GET['emailType'];
?>

<section>
            <div class="title-section">
                 <?php
                    switch($emailT){
                        case'new_Acc':
                            echo '<h1> New account configuration here </h1></div>';
                            break;

                        case'lost_pwd':
                            echo'<h1> Lost password Instructions here </h1></div>';
                            break;
                    }
                ?>

            <article>
              
</article>

<?php 
    include './pages/footer.php';
?>
