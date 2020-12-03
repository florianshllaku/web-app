
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css\add.css">
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
                <select class="custom-select" required>
                    <option value="">Choose Switcher Type</option>
                    <option value="Books">Book</option>
                    <option value="DVDs">DVD</option>
                    <option value="Furniture">Furniture</option>
                </select>
            </div>
        </div>
        <!-- DVD -->
        <div class="form-group row">
            <label for="inputSize" class="col-sm-2 col-form-label">Size</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="inputSize" placeholder="Product Size (Mb)" required>
            </div>
        </div>
        <!-- Furniture -->
        <div class="form-group row">
            <label for="inputHeight" class="col-sm-2 col-form-label">Height</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputHeight" placeholder="Product Height (cm)" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputWidth" class="col-sm-2 col-form-label">Width</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="inputWidth" placeholder="Product Width (cm)" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLength" class="col-sm-2 col-form-label">Length</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputLength" placeholder="Product Length (cm)" required>
            </div>
        </div>
        <!-- Book -->
        <div class="form-group row">
            <label for="inputWeight" class="col-sm-2 col-form-label">Weight</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputWeight" placeholder="Product Weight (kg)" required>
            </div>
        </div>
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
