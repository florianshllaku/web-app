
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src="assets\js\script.js"></script>
</head>

<body>

<div class="container">
  
    <form>
        <div class="form-group row">
            <label for="inputSKU" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputSKU" placeholder="SKU Code (6 digits)" minlength="6" maxlength="6" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputName" placeholder="Product Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Type Switcher</label>
            <div class="col-sm-3">
                <select class="custom-select" id="type" required>
                    <option value="">Choose Switcher Type</option>
                    <option value="Books" id="book">Book</option>
                    <option value="DVDs" id="dvd">DVD</option>
                    <option value="Furniture" id="furniture">Furniture</option>
                </select>
            </div>
        </div>
        <div id="template"></div>
        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>

</div>

</body>
</html>
