<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <form action="/converter/fetch" method="GET">

        <div class="row justify-content-center align-items-center text-center">
            <div class="col-md-3">
                <input type="number" step="any" name="val1"
                       class="form-control text-center fs-2 border-0"
                       placeholder="0" required>
            </div>

            <div class="col-md-1">
                <h2>=</h2>
            </div>

            <div class="col-md-3">
                <input type="text"
                       class="form-control text-center fs-2 border-0"
                       value="{{ $result ?? '' }}"
                       readonly>
            </div>
        </div>


        <div class="row justify-content-center mt-3">

            <div class="col-md-3">
                <select class="form-select" name="choiceVal1" required>
                    <option value="kelvin">Kelvin</option>
                    <option value="celsius">Degree Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-select" name="choiceVal2" required>
                    <option value="celsius">Degree Celsius</option>
                    <option value="kelvin">Kelvin</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
            </div>

        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-3 d-grid">
                <button type="submit" class="btn btn-dark">
                    Convert
                </button>
            </div>
        </div>

    </form>

</div>

</body>
</html>