<!doctype html>
<html lang="en">

<head>
    <title>Add Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>ADD POST</h1>
        <form action="" method="POST" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="">Publisher</label>
                <input class="form-control" type="text" name="publisher" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="">Author</label>
                <input class="form-control" type="text" name="author" placeholder="Enter your name" required>
            </div>

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

            <div class="form-group">
                <label for="">Maxdate</label>
                <input class="form-control" type="number" name="maxdate" id="maxdate" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="">Num</label>
                <input class="form-control" type="number" name="num" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="">Summary</label>
                <input class="form-control" type="text" name="summary" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="">Picture</label>
                <input class="form-control" type="file" name="picture" placeholder="Enter your name" required>
            </div>

            <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="picture" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div> -->

            <button type="submit" class="btn btn-primary" value="store" name="action">Save</button>
        </form>
    </div>
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