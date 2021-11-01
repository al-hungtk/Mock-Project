<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    * {
        margin: 0 auto;
    }

    form {
        width: 30%;
    }
    </style>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Add Post New</h1>
        <div class="form-group">
            <label for="">ID</label>
            <input class="form-control" type="text" name="id" value="<?php echo $post['id'] ?>" readonly>
        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $post['name'] ?>">
        </div>

        <div class="form-group">
            <label for="">Publisher</label>
            <input class="form-control" type="text" name="publisher" value="<?php echo $post['publisher'] ?>">
        </div>

        <div class="form-group">
            <label for="">Author</label>
            <input class="form-control" type="text" name="author" value="<?php echo $post['author'] ?>">
        </div>

        <div class="form-group">
            <label for="">Category_id</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Slected</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="category_id">
                    <?php foreach ($categories as $key => $value): ?>
                    <option value="<?php echo $value['categoryname'] ?>"><?php echo $value['categoryname'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

        <div class="form-group">
            <label for="">Maxdate</label>
            <input class="form-control" type="text" name="maxdate" value="<?php echo $post['maxdate'] ?>">
        </div>

        <div class="form-group">
            <label for="">Num</label>
            <input class="form-control" type="text" name="num" value="<?php echo $post['num'] ?>">
        </div>

        <div class="form-group">
            <label for="">Summary</label>
            <input class="form-control" type="text" name="summary" value="<?php echo $post['summary'] ?>">
        </div>

        <div class="form-group">
            <label for="">Picture</label>
            <img src="public/images/<?php echo $post['picture'] ?>" width="100px" alt="Image Post">
            <input class="form-file" type="file" name="picture" class="form-control">

        </div>

        <!-- <div class="form-group">
        </div> -->

        <button type="submit" class="btn btn-warning" name="action" value="update">Save</button>

    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>