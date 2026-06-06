<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container p-4">
      <div class="row g-4">

        <div class="col-lg-4">
          <div class="border border-dark p-4">
            <div class="mb-3">
              <label class="form-label">Email:</label>
              <input type="email" class="form-control border-dark">
            </div>

            <div class="mb-3">
              <label class="form-label">Password:</label>
              <input type="password" class="form-control border-dark">
            </div>

            <div class="d-flex align-items-center gap-3">
              <button class="btn btn-outline-dark">Login</button>
              <a href="#" class="small">Forgot password?</a>
            </div>
          </div>
        </div>

      <div class="col-lg-8 text-center">
        <h1 class="fw-bold">Pricing</h1>

        <p class="mx-auto" style="max-width: 550px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
        </p>

        <div class="row g-3 mt-3">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/1.jpg') }}" class="img-fluid border border-dark">
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/2.jpg') }}" class="img-fluid border border-dark">
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/3.jpg') }}" class="img-fluid border border-dark">
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/4.jpg') }}" class="img-fluid border border-dark">
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/5.jpg') }}" class="img-fluid border border-dark">
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('images/6.jpg') }}" class="img-fluid border border-dark">
          </div>

        </div>

        <h6 class="fw-bold mt-5">Compare Plans</h6>

        <div class="table-responsive mt-3">
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th></th>
                <th>Free</th>
                <th>Pro</th>
                <th>Enterprise</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start">Public</td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="text-start">Private</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="text-start">Permissions</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </div>

</body>

</html>