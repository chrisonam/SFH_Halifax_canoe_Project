
<?php 
  include('./pages/db_connect.php');


  include './pages/header.php';
?>

         <div class="mx-auto p-5 w-75 logout"  >
          
          </div>

        <div  class="mx-auto p-5 bg-secondary w-75 rounded" >
            <h2 class="text-white-50">Welcome To Your IT Support System </h2>

             <form class="row row-cols-lg-auto g-3 align-items-center" method="get" action="problem.php">
                 <div class="col-12">
                     <select class="form-select" aria-label="Default select example">
                        <option value="1">Mr</option>
                        <option value="2">Mrs</option>
                        <option value="3">Ms</option>
                    </select>
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="firstname" placeholder="First name" required>
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
                </div>

                <div class="col-12">
                    <select class="form-select" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">CEO</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             </form>
        </div>

        <section>
            <div class="title-section">
                <h1>Upcoming Adventures</h1>
            </div>

            <?php
    // select query 
       $query="SELECT *  FROM adventures  ORDER BY tripDate DESC LIMIT 3";
       $result= mysqli_query($connex,$query);
       while($row = mysqli_fetch_assoc($result)){
        ?>
            <article>
                    <h2><?php echo $row['heading'] ?></h2>
                    <div class="info">
                    <p><span>Date:</span><?php echo $row['tripDate'] ?></p>
                    <p> <span> Duration:</span> <?php echo $row['duration']?> Days </p>
                    </div>
                    <div class="summary">
                     <h3>Summary</h3>
                     <p>
                      <?php echo $row['summary']?>
                    </p>
                    </div>
            </article>
        
       

        <?php
       }
         ?>

        </section>


<?php   
        include('./pages/footer.php');
?>

 

  
  