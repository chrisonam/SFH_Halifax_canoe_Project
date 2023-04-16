<?php 
include './pages/header.php';
session_start();
$first=$_SESSION['firstname'];
$last= $_SESSION['lastname'];
$role= $_SESSION['role'];


?>
 <div  class="mx-auto p-5 bg-secondary w-75 rounded" >
            <h2 class="text-white-50">New Account </h2>

             <form class="row row-cols-lg-auto g-3 align-items-center" method="get" action="send-email.php">
                

                <div class="col-12">
                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="lastname" placeholder="Last name">
                </div>
                <div class="col-12">
                    <select class="form-select" name="emailType">
                        <option value="new_Acc">New Account</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             </form>
        </div>


<?php 
    include './pages/footer.php';
?>
