<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>doc_side</title>
  </head>
  <body>
      <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TUP Admission Application</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method = "post" action = "<?php echo site_url('CRUDcontroller/create')?>">
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lastname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Middle name</label>
              <input type="text" class="form-control" name="middlename" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">House number</label>
              <input type="text" class="form-control" name="houseno" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Street</label>
              <input type="text" class="form-control" name="street" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">barangay district</label>
              <input type="text" class="form-control" name="barangaydistrict"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Municipal/city</label>
              <input type="text" class="form-control" name="city" aria-describedby="emailHelp">
            </div>

            <br>
            <div class="row">
              <label class="label col-md-4 control label">First choice:</label>
              <div class="col-lg-8 mb-3">
                <select class="form-select form-select-md" aria-label=".form-select-md example" name = "firstchoice">
                  <option selected>none</option>
                  <option value="1">Bachelor of science in Civil Engineering</option>
                  <option value="2">Bachelor of science in electrical engineering</option>
                  <option value="3">Bachelor of science in electronic engineering</option>
                </select>
              </div>
            </div>
            <div class="row">
              <label class="label col-md-4 control label">Second choice:</label>
              <div class="col-lg-8 mb-3">
                <select class="form-select form-select-md" aria-label=".form-select-md example" name = "secondchoice">
                  <option selected>none</option>
                  <option value="1">Bachelor of science in Civil Engineering</option>
                  <option value="2">Bachelor of science in electrical engineering</option>
                  <option value="3">Bachelor of science in electronic engineering</option>
                </select>
              </div>
            </div>
            <button type="submit" class = "btn btn-primary" value = "save">submit</button>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
