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
    <style>
    form {
        max-width: 500px;
        margin: auto 50px;
    }
    </style>
</head>

<body>

    <div class="container">

        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Edit category</legend>

            <div class="form-group">
                <input name="id" type="text" value="<?php echo $id?>" class="form-control" id=""
                    placeholder="Input field" readonly>

                <label for="">categoryName</label>
                <input name="categoryname" type="text" value="<?php echo $categories['categoryname']?> "
                    class="form-control" id="" placeholder="Input field">

                <label for="">MoreInfo</label>
                <input name="moreinfo" type="text" value="<?php echo $categories['moreinfo']?> " class="form-control"
                    id="" placeholder="Input field">
            </div>

            <button type="submit" name="action" value="save" class="btn btn-primary">SAVE</button>
        </form>

    </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>