<?php 
include './pages/header.php';
session_start();
$_SESSION['firstname']= $first;
$_SESSION['lastname']=$last;
$_SESSION['role']=$role;

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

