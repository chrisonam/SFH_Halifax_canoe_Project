<?php 
include './pages/header.php';
$first= $_GET['firstname'];
$last= $_GET['lastname'];
$role= $_GET['role'];

session_start();
$_SESSION['firstname']= $first;
$_SESSION['lastname']=$last;
$_SESSION['role']=$role;


?>
  
    <section>
        <div class="title-section">
                <?php 
                    switch($role){

                      case '1':
                        echo '<h1> Hello '.$first.'- Admin </h1> </div>';
                        echo '<article> <h2>Here are your options :</h2> <a href="new-account.php">New Account</a> </br> <a href="isnt-working.php">Is not working</a> ';
                        break;

                        case '2':
                          echo '<h1> Hello '.$first.'- Manager  </h1> </div>';
                        echo '<article> <h2>Here are your options :</h2> <a href="lost-password.php">Lost password</a> </br> <a href="isnt-working.php">Is not working</a> ';
                        break;

                        case '3':
                          echo '<h1> Hello '.$first.'- CEO  </h1> </div>';
                        echo '<article> <h2>Here are your options :</h2> <a href="need-help.php">Need help</a> </br> <a href="isnt-working.php">Is not working</a> ';
                        break;



                    }
                ?>
      
      </article>
  </main>
  <?php 
include './pages/footer.php';
?>