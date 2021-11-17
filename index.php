<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>

    <title>CRUDJqAjaxPHP</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
      <h1 class="alert-info text-center mb-5 p-3">
        Jquery Ajax PHP CRUD 
      </h1>
      </div>
      <div class="row">
        <form action="" class="col-sm-5" id="myform">
          <h3 class="alert-warning text-center p-2">Registration</h3>
          <div>
            <input type="hidden" name="" id="stuid">
            <label for="nameid" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameid">
          </div>
          <div>
            <label for="emailid" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailid">
          </div>
          <div>
            <label for="passwordid" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordid">
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary px-4" id="btnsave">Save</button>
          </div>
          <div id="msg"></div>
        </form>
        <div class="col-sm-7 text-center">
        <h3 class="alert-warning text-center p-2">Show Data</h3>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="tbody"></tbody>
        </table>
        </div>
      </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/jqajax.js"></script>
  </body>
</html>