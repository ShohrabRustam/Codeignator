<!doctype html>
<html lang="en">
<?php
//   print_r($data);
//   var_dump($userdata);
//   $array = json_decode(json_encode($userdata), true);
    // echo '<pre>'; print_r($userdata); die;

    

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>


<div class="container">
    <a href="http://localhost/codeig/index.php/MyController/insert">     <button type="submit"> Add New Data</button> </a>
    <div class="text-center"><h3> All records </h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Gmail</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($userdata as $i => $it) {
                 ?>

                <tr>
                    <td><?php echo $it->id; ?></td>
                    <td><?php echo $it->fullName; ?></td>
                    <td><?php echo $it->gmailAddress; ?></td>
                    <td><?php echo $it->phoneNumber; ?></td>
                    <td><?php echo $it->address; ?></td>
                    <form style="display: inline-block;" method="post">
                    <td><a href="http://localhost/codeig/index.php/MyController/update/<?php echo $it->id ?>" type="submit" name="update" value="<?php echo $it->id; ?>" class="btn btn-primary">Edit</a> 
                    </form>

                        <form style="display: inline-block;" method="post">
                            <input type="hidden" name="id" value="<?php echo $it->id; ?>">
                            <a href="http://localhost/codeig/index.php/MyController/delete/<?php echo $it->id ?>" type="submit" name="delete" value="<?php echo $it->id; ?>" class="btn btn-danger">Delete</a>
                        </form>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<html>