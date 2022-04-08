<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="/bootsrap/bootstrap.min.css">
  
</head>

<body>
<?php 
    include "includes/header.html";
    ?>
    <div class="container">
        <h1 class="my-5">Contacts</h1>
        <h3>Contacts list:</h3>
        <div id="emptyList">No contacts available.</div>
        <div id="listContact">
            <table class="table table-striped">
                <thead>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Operation</th>


                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Alonzo E Barber</th>
                        <td>alonzo@email.com</td>
                        <td>0612623738</td>
                        <td>N123 Marrakech</td>
                        <td>
                            <a href="edit.php">Edit</a>
                            <a href="delete.php">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Alonzo E Barber</th>
                        <td>alonzo@email.com</td>
                        <td>0612623738</td>
                        <td>N123 Marrakech</td>
                        <td>
                            <a href="edit.php">Edit</a>
                            <a href="delete.php">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3>Add contact:</h3>
        <form action="" class="row my-5">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="email" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="mb-3 col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="email" class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div class="mb-3 col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="text" inputmode="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="col-6 mx-auto">
                <input type="button" value="Save" id="save " class="btn btn-dark mt-3 col-12 ">
            </div>

        </form>
    </div>
</body>

</html>