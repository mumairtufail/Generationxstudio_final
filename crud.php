<html>

<head>
    <title>Product</title>
</head>
<link rel="stylesheet" href=".productBox{">

   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>

<body style="background-color:#3194F0">
    <br>
    <br>
    <!-- we add .php file in action because files in same directory -->
    <form method="post" action="product_api_call.php">
        <div class="container ProductBox">
            <h1>Add Product</h1>
            <div class="input-group">
                <input class="form-control" type="text" name="p_name" placeholder="product name">
            </div><br>
            <div class="input-group">
                <input class="form-control" type="number" name="p_price" placeholder="product price">
            </div><br>
            <div class="input-group">
                <input class="form-control" type="number" name="p_quantity" placeholder="product quantity">
            </div><br>
                <button class="btn btn-primary" align="right" type="submit">submit</button>
        </div>
    </form>
</body>

</html>