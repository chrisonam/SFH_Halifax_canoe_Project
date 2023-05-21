<?php 


include('./pages/db_connect.php');

if(isset($_POST['submit'])){

    $heading=$_POST['heading'];
    $tripDate = $_POST['tripDate'];
    $duration = $_POST['duration'];
    $summary=htmlspecialchars($_POST['summary']);
  


    $query = "INSERT INTO adventures( heading , tripDate, duration, summary )VALUES( '$heading','$tripDate','$duration','$summary')";

    $result= mysqli_query($connex, $query);

    if($result){
     header("Location:admin-confirm.php?msg=Ajout avec succes");
    }

    else{
        echo "Failed: ".mysqli_error($connex);
    }
 }

     include('./pages/header.php');
?>


<section>
<div class="title-section">
  <h1 class="display-5 fw-bold"> Admin - Add Adventures</h1>
</section>
    <div class="container p-3 --bs-primary-bg-subtle border border-primary-subtle rounded-3">
    <h1 class="display-6 fw-medium">Input details about the trip</h1>
        <form action="" method="post">
                <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                         <input type="text" name="heading" class="form-control" id="heading" placeholder="Nom de la ville" required>
                    </div>
                <div class="mb-3">
                <label for="tripDate" class="form-label">Trip Date</label>
                <input type="date" name="tripDate" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="number" name="duration" class="form-control" id="duarationNb" placeholder="Duration" required>
                </div>
                
                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <textarea name="summary" class="form-control"  rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        </form>

    </div>
</main>


<?php   
        include('./pages/footer.php');
?>