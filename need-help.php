<?php 

session_start();
$first=$_SESSION['firstname'];
$last= $_SESSION['lastname'];
$role= $_SESSION['role'];

include './pages/header.php';

?>

<section>
            <div class="title-section">
                <h1>Call the number below :</h1>
            </div>

            <article>
                <h2>506-458-6730</h2>
</article>

<?php 
    include './pages/footer.php';
?>

