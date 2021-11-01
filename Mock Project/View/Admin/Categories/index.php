<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
   -->
    <div class="container">
        <h1 class="text-center">List of categories

            <div class="row">
		<a href="?controller=categorycontroller&action=add"><button type="button" class="btn btn-default">Add New</button></a>

                <!-- <div class="col-md-2">
                    <a name="" id="" class="btn btn-primary" href="?controller=categorycontroller&action=add"
                        role="button">ADD</a>
                </div> -->
              
            </div>
        </h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>categoryname</th>
                    <th>moreinfo</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $key => $value): ?>
                <tr>
                    <td><?php echo $value['id'];?></td>
                    <td><?php echo $value['categoryname'];?></td>
                    <td><?php echo $value['moreinfo'];?></td>
                    <td><a href="?controller=categorycontroller&action=edit&id=<?php echo $value['id'] ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="?controller=categorycontroller&action=delete&id=<?php echo $value['id']?>" class="btn btn-primary">Delete</a></td>
                </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>