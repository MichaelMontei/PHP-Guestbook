<?php

declare(strict_types=1);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Guestbook PHP</title>
</head>
<body>
<!--Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Guestbook PHP</a>
    </div>
</nav>
<br/>
<div class="container">
    <div class="row">
        <!--left side -->
        <div class="col-4">
            <!--form-->
            <div class="container border border-dark rounded bg-light">
                <form> <!-- class="needs-validation" novalidate -->
                    <div class="form-group">
                        <label class="font-weight-bold">Title *</label>
                        <input type="text" class="form-control" id="title" placeholder="title"  required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Author</label>
                        <input type="text" class="form-control" id="author" placeholder="first and lastname">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Message *</label>
                        <textarea class="form-control" id="message" rows="3" minlength="2" maxlength="500" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-sm">Save message</button><br/><br/>
                </form>
            </div>
            <!--end form-->
        </div>

</body>
</html>


