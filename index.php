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
        <div class="col-lg-2">
            <form action="./primenumber.php" method="POPST">
                <div class="mb-3 mt-3">
                    <label for="primenumber" class="form-label">Prime Number check</label>
                    <input name="input_number" type="number" class="form-control" id="primenumber">
                </div>
                <button type="submit" class="btn btn-success">Submit </button>
            </form>
        </div>

        <div class="col-lg-2">
            <form action="./celsiusToFahrenheit.php" method="POPST">
                <div class="mb-3 mt-3">
                    <label for="tempconvertc" class="form-label">Enter Celsius</label>
                    <input name="temp_c" type="number" class="form-control" id="tempconvertc">
                </div>
                
                <button type="submit" class="btn btn-dark">Convert To Fahrenheit</button>
            </form>
        </div>

        <div class="col-lg-2">
            <form action="./fahrenheitToCelsius.php" method="POPST">
                <div class="mb-3 mt-3">
                    <label for="tempconvertf" class="form-label">Enter Fahrenheit</label>
                    <input name="temp_f" type="number" class="form-control" id="tempconvertf">
                </div>
                
                <button type="submit" class="btn btn-danger">Convert To Celsius</button>
            </form>
        </div>


    </div>
</div>
    
</body>
</html>
