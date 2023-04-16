
<?php 
  include './pages/header.php';
?>

    
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
                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="lastname" placeholder="Last name">
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

            <article>
                <h2>Halifax</h2>
            <div class="info">
                <p><span>Date:</span> 02/25/2023 </p>
                <p> <span> Duration:</span> 2 Days </p>
            </div>
            <div class="summary">
                <h3>Summary</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quis deleniti optio repellat eveniet sunt, impedit libero. Ullam vero consectetur, libero minima accusantium id quia repudiandae. Repellat temporibus voluptatibus fugiat?
                </p>
            </div>
            </article>

            <article>
                <h2>Sydney</h2>
            <div class="info">
                <p><span>Date:</span> 03/05/2023 </p>
                <p> <span> Duration:</span> 4 days </p>
            </div>
            <div class="summary">
                <h3>Summary</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quis deleniti optio repellat eveniet sunt, impedit libero. Ullam vero consectetur, libero minima accusantium id quia repudiandae. Repellat temporibus voluptatibus fugiat?
                </p>
            </div>
            </article>
            
        </section>
  
    <?php 
  include './pages/footer.php';
?>
  