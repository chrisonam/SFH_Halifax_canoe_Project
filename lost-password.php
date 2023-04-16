<?php 
include './pages/header.php';
session_start();
$_SESSION['firstname']= $first;
$_SESSION['lastname']=$last;
$_SESSION['role']=$role;

?>

<div  class="mx-auto p-5 bg-secondary w-75 rounded" >
            <h2 class="text-white-50">Lost password </h2>

             <form class="row row-cols-lg-auto g-3 align-items-center" method="get" action="send-email.php">
                

                <div class="col-12">
                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="lastname" placeholder="Last name">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             </form>
        </div>


<?php 
    include './pages/footer.php';
?>
