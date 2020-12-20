<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src="assets\js\script.js"></script>
    <link rel="stylesheet" href="assets\css\add.css">
</head>

<body>

<div class="container">
    <h1>Product Add</h1>
    <div class="form-group row buttons">
        <div class="col-xs-2">
            <button type="submit" class="btn btn-primary" name="add" form="add" >Save</button>
        </div>
        <div class="col-xs-4">
            <button class="btn btn-danger" type="cancel" onclick="window.location='index.php';return false;" >Cancel</button>
        </div>
    </div>
        <hr>
    <form method="POST" id="add" action="insert.php">
        <div class="form-group row">
            <label for="inputSKU" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputSKU" name="SKU" placeholder="SKU Code (6 digits)" minlength="6" maxlength="6" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputName" name="Name" placeholder="Product Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-3">
                <input type="number" step="0.01" class="form-control" id="inputPrice" name="Price" placeholder="Product Price ($)" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Type Switcher</label>
            <div class="col-sm-3">
                <select class="custom-select" id="type" name="Type" required>
                    <option value="">Choose Switcher Type</option>
                    <option value="book" id="book">Book</option>
                    <option value="dvd" id="dvd">DVD</option>
                    <option value="furniture" id="furniture">Furniture</option>
                </select>
            </div>
        </div>
        <div id="template"></div>
    </form>

</div>


</body>
</html>
