<?php 
  $pdo = new PDO('mysql:host=localhost;dbname=bs_php_project', 'root', '');
  $about = $pdo->prepare('SELECT * FROM `db_about`');
  $about->execute();
  $about = $about->fetch()['ABOUT_TXT'];
?>
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
          <ul id="principal-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" role="nav-link" ref_sys="about_team">Edit About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" role="nav-link" ref_sys="team_regist">Team Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" role="nav-link" ref_sys="team_list">Team List</a>
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

            <ul id="second-menu" class="list-group">
              <li class="list-group-item active" aria-current="true">
                <a href="#" ref_sys="about_team"><i class="bi bi-pencil-fill"></i> About</a>
              </li>
              <li class="list-group-item">
                <a href="#" ref_sys="team_regist"><i class="bi bi-pencil-fill"></i> Register Team</a>
              </li>
              <li class="list-group-item">
                <a href="#" ref_sys="team_list"><i class="bi bi-list-columns"></i> Team List</a>
              </li>
            </ul>

          </div>



          <div class="col-md-9">
            <?php 
              if(isset($_POST['edit_about'])):
                $about = $_POST['aboutTeam'];
                $pdo->exec('DELETE FROM `db_about`');
                $sql = $pdo->prepare('INSERT INTO `db_about` VALUES (null, ?)');
                $sql->execute(array($about));
                printf('<div class="alert alert-success">The HTML code edited <b>successfully</b>!</div>');
                $about = $pdo->prepare('SELECT * FROM `db_about`');
                $about->execute();
                $about = $about->fetch()['ABOUT_TXT'];
                printf('<div class="alert alert-danger">Error</div>');
              elseif($_POST['register_member']):
                $name = $_POST['memberName'];
                $image = $_FILES['memberImage'];
                $description = $_POST['memberDesciption'];
                if($image != NULL):
                  $final_name = time().'.jpg';
                  if(move_uploaded_file($image['tmp_name'], $final_name)):
                    $img_size = filesize($final_name);
                    $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                    $sql = $pdo->prepare("INSERT INTO `db_team` VALUES (null, ?, ?, ?)");
                    $sql->execute($name, $mysqlImg, $description);
                    printf('<div class="alert alert-success"><b>Successfully</b> registered member!</div>');
                    unlink($final_name);
                  endif;
                endif;
              endif;
            ?>
            <section id="about_team_section" class="card">

              <div class="card-header bg-defaultColor">About</div>
              
              <div class="card-body">

                <form method="post">
                  <div class="mb-3">
                    <label for="aboutTeam" class="form-label">HTML Code</label>
                    <textarea class="form-control" placeholder="Insert the content in HTML format" name="aboutTeam" id="aboutTeam"><?php printf($about) ?></textarea>
                  </div>
                  <input type="hidden" name="edit_about" value="">
                  <button class="btn btn-md btn-defaultColor" type="submit" name="activity" id="activity">Submit</button>
                </form>

              </div>

            </section>

            <section id="team_regist_section" class="card">
              <div class="card-header bg-defaultColor">Register Team</div>
              <div class="card-body">

                <form method="post">
                  <div class="mb-3">

                    <label for="memberName" class="form-label">Member Name: </label>
                    <input type="text" class="form-control"name="memberName" id="memberName" />

                    <div class="memberImg">
                      <label for="memberImage" class="form-label">Member Image: </label>
                      <input type="file" name="memberImage" id="memberImage" class="form-control"/>
                      <input type="submit" value="Upload Image" name="submit" class="btn btn-defaultColor btn-sm">
                    </div>
                    
                    <label for="memberDesciption" class="form-label">Member Description: </label>
                    <textarea class="form-control" name="memberDesciption" id="memberDesciption"></textarea>

                  </div>
                  <input type="hidden" name="register_member">
                  <button class="btn btn-defaultColor btn-md" type="submit">Submit</button>
                </form>

              </div>
            </section>

            <section id="team_list_section" class="card">
              <div class="card-header bg-defaultColor">Team</div>
              <div class="card-body">

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID: </th>
                      <th>Member Name:</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Doe</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="bi bi-trash"></i>
                          Excluir
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Moe</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="bi bi-trash"></i>
                          Excluir
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Dooley</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="bi bi-trash"></i>
                          Excluir
                        </button>
                      </td>
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
    <script type="text/javascript">
      $(function(){
        $('#principal-menu a, .list-group-item a').click(function(){
          $('#principal-menu a, .list-group-item').removeClass('active');
          $('.list-group-item a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
          $('#principal-menu a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');
          return false;
        });
        $('#principal-menu a, .list-group-item a').click(function(){
          let ref = "#"+$(this).attr('ref_sys')+"_section";
          let offset = $(ref).offset().top;
          $('html, body').animate({scrollTop: offset - 50});
          if($(window)[0].innerWidth <= 768 && $('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
          }

        });

      });
    </script>

  </body>

</html>