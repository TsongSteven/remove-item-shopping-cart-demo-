<?php
include 'database_connection.php';
if (isset($_POST['submit_main'])) {
	$img = addslashes($_FILES['img']['tmp_name']);
	$img_path = 'uploaded_item/' . basename($_FILES['img']['name']);
	$img_name = $_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], $img_path);
	$imgdesc = $_POST['imgdesc'];

	$sql = mysqli_query($con, "INSERT INTO cartdemo(id,image,imgdesc) VALUES('','$img_name','$imgdesc')");

	header('Location: displayitem.php');
}
?>

<html>
<head>
    <title>Demo Cart</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="row">
        <div class="col-lg-12 thumbnail">
            <section>
                <ol class="breadcrumb">
                    <li>Shopping Cart Demo</li>
                </ol>
                <div class="col-lg-12">
                    <form class="form-horizontal" method="post" action="index.php"  enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label col-lg-3" for="form_image">IMAGE</label>
                                <div class="col-lg-9">
                                    <input type="file" name="img">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label col-lg-3" for="form_image">ITEM NAME</label>
                                <div class="col-lg-9">
                                    <input type="text" name="imgdesc">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-danger"  name="submit_main" id="submit_main">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
        </div>


    </div>
</body>
</html>