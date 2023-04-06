<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class= "row">
        <form action="./primenumber.php" method="POPST">
        <div class="mb-3 col-lg-2">
            <label for="primenumber" class="form-label">Prime Number check</label>
            <input name="input_number" type="number" class="form-control" id="primenumber">
        </div>
        <button type="submit" class="btn btn-success">Submit </button>
        </form>

    </div>
</div>



    
</body>
</html>


