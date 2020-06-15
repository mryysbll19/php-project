<?php

    if (isset ($_POST['submit'])){

        //check title
        if(empty($_POST['title'])){
            echo 'title is required';
        } else {
            echo htmlspecialchars ($_POST['title']);
        }
        
        //check ingredients
        if(empty($_POST['title'])){
            echo 'Atleast one ingredients is required';
         } else {
        
            echo htmlspecialchars ($_POST['ingredients']);
        }

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required';
        } else {
            $email = $_POST ['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email must be a valid email address';
            }
        }
}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza </h4>
    <form class="white" action="add.php"method="POST">
        <label>Your Email:</label>
        <input type="text" name="email"> <br> <br>
        <label>Pizza Title:</label>
        <input type="text" name="title"> <br> <br>
        <label>Ingredients (command separated):</label>
        <input type="text" name="ingredients"> <br><br>
        <div class="center">
    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>    
    </form>
    </section>
<?php include('templates/footer.php'); ?>


</html>
