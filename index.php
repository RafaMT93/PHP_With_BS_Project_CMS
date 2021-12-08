<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <title>Admin</title>

  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-defaultColor">
      <div class="container">
        <a class="navbar-brand" href="#">CMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" role="nav-link">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about" role="nav-link">Edit About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact" role="nav-link">Manage</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="about" role="nav-link">
                <i class="bi bi-box-arrow-right"></i>
                Exit
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2>
              <i class="bi bi-gear-fill"></i>
              Control Panel
            </h2>
          </div>
          <div class="col-md-3">
            <p>
            <i class="bi bi-clock"></i>
            Last login: 07/12/2021</p>
          </div>
        </div>
      </div>
    </header>

    <section class="bread">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" class="bg-light" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="principal">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">
                <i class="bi bi-house-fill"></i> Home
              </li>
              <li class="list-group-item"><i class="bi bi-pencil-fill"></i> About</li>
              <li class="list-group-item"><i class="bi bi-pencil-fill"></i> Contact</li>
            </ul>

          </div>
          <div class="col-md-9">

            <section class="card">
              <div class="card-header bg-defaultColor">About</div>
              <div class="card-body">

              <form>
                <div class="mb-3">
                  <label for="aboutTeam" class="form-label">HTML Code</label>
                  <textarea class="form-control" placeholder="Insert the content in HTML format" name="aboutTeam" id="aboutTeam"></textarea>
                </div>
                <button type="button" class="btn btn-md btn-defaultColor" type="submit">Submit</button>
              </form>


              </div>
            </section>

            <section class="card">
              <div class="card-header bg-defaultColor">Register Team</div>
              <div class="card-body">

                <form>
                  <div class="mb-3">
                    <label for="memberName" class="form-label">Member Name</label>
                    <input type="text" class="form-control"name="memberName" id="memberName" />

                    <label for="memberDesciption" class="form-label">Member Description</label>
                    <textarea class="form-control" name="memberDesciption" id="memberDesciption"></textarea>
                  </div>
                  <button type="button" class="btn btn-md btn-defaultColor" type="submit">Submit</button>
                </form>

              </div>
            </section>

            <section class="card">
              <div class="card-header bg-defaultColor">Team</div>
              <div class="card-body">

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID: </th>
                      <th>Member Name:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Doe</td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Moe</td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Dooley</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </section>

          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

  </body>

</html>