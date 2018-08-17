<?php
if (isset($_FILES['photo'])) {
 // $imageName = $_POST['photo'];
  $imageDirectory = 'uploads/' . basename($_FILES['photo']['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Attention in class</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome Icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Your custom styles -->
      <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="blue">
        <div class="nav-wrapper">
          <div class="container">
            <a href="#" class="brand-logo">
              Attension
              <?php echo ($imageDirectory); ?>
            </a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Teachers</a></li>
              <li><a href="#">Students</a></li>
              <li><a href="#">Login</a></li>
            </ul>
            <ul class="sidenav" id="mobile-menu">
              <li>
                <div class="user-view">
                  <div class="background">
                    <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="Background Sidenav">
                  </div>
                  <a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt="User Image Sidenav"></a>
                  <a href="#!name"><span class="white-text name">John Doe</span></a>
                  <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
              </li>
              <li><a href="#">Teachers</a></li>
              <li><a href="#">Students</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      <main class="container">
        <!-- Parallax Example -->
        <section>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
        </section>
        <section>
          <div class="parallax-container">
            <div class="parallax">
              <img src="img\Balloon.jpg" alt="" class="responsive-img">
            </div>
          </div>
        </section>
        <section>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
        </section>
        <section>
          <div class="parallax-container">
            <div class="parallax">
              <img src="img\Como.jpg" alt="" class="responsive-img">
            </div>
          </div>
        </section>  
        <!-- Tabbed Content Example -->        
        <section>
          <div class="row">
            <div class="col s12 l4">
              <h1>Some tabs</h1>
            </div>
            <div class="col s12 l6">
                <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#Locations">Locations</a>
                    </li>
                    <li class="tab col s4">
                      <a href="#Hours">
                          Hours
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#Staff">Staff</a>
                    </li>
                </ul>
                <div id="Locations">
                  <h2>Locations</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
                </div>
                <div id="Hours">
                  <h2>Hours</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
                </div>
                <div id="Staff">
                  <h2>Staff</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
                </div>
              </div>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis fugiat doloremque deleniti mollitia debitis minus voluptatibus dolorum quia repellat laudantium tempore repudiandae incidunt necessitatibus molestiae, eos accusamus qui, nisi alias.</p>
        </section>
        <!-- Cards & Images-->
        <section class="container scrollspy" id="photos">          
          <div class="row">
            <div class="col s12 pull-s2">
                <h2 class="blue-text darken-2">
                  Photo shows
                </h2>
            </div>
            <div class="col s6 m4 l3 valign-wrapper">
              <img src="img/Morrocco1.jpg" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s6 m4 l3 valign-wrapper">
              <img src="img/Morrocco2.jpg" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s6 m4 l3 valign-wrapper">
              <img src="img/Morrocco3.jpg" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s6 m4 l3 valign-wrapper">
              <img src="img/Morrocco4.jpg" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s6 m4 l3 valign-wrapper">
              <img src="img/Morrocco5.jpg" alt="" class="responsive-img materialboxed">
            </div>
          </div>
        </section>
        <!-- Form Example-->
        <section class="container">
          <div class="row">
            <div class="col s12 l5 pull-l1">
              <p>
                <h4 class="indigo-text">Here is a sample form</h4>
                Has some very nice built in ui features
              </p>
            </div>
            
            </div>
        </section>
      <!-- A floating action button - these are cool! -->
      <div class="fixed-action-btn">
          <a class="waves-effect waves-light btn modal-trigger btn-floating btn-large indigo darken-2 tooltipped" data-position="top" data-tooltip="Contribute an article" href="#modalContribute">
            <i class="large material-icons">edit</i>
          </a>
        </div>
    </main>
    <footer id="footer" class="page-footer blue">
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l6">
            <h5 class="white-text">First Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col s12 m4 l6">
            <h5 class="white-text">Second Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2018 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    <div class="modal" id="modalContribute">
      <div class="modal-content">
        <form action="index.php" method="post" id="contribution" enctype="multipart/form-data">
          <div class="input-field">
              <i class="material-icons prefix indigo-text">perm_identity</i>    
              <input type="text" id="fullname"/>
            <label for="fullname">My name is</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix indigo-text">my_location</i>    
            <input type="text" id="source"/>
          <label for="source">This article is from</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix indigo-text">title</i>    
          <input type="text" id="summary"/>
        <label for="summary">Summary</label>
      </div>
        <div class="input-field">
              <i class="material-icons prefix indigo-text">home</i>    
              <textarea class="materialize-textarea" cols="30" rows="5" id="body"></textarea>
            <label for="body">Article content ...</label>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>Photo</span>
            <input type="file" name="photo">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>

          <div class="input-field">
              <p>
                  <label>
                      <input type="checkbox" value="yes"id="agree"/>
                      <span>I agree to the conditions</span>
                  </label>    
              </p>
            </div>  
            <div class="modal-footer">
              <input type="submit" value="Go"/>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
            </div>
        </form>
      </div>
    </div>
<!-- jQuery CDN -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

    <script>
      $("document").ready(function(){
        $('.tooltipped').tooltip();
        $(".sidenav").sidenav();
        $(".parallax").parallax();
        $(".tabs").tabs();
        $('.materialboxed').materialbox();
        $('.modal').modal();
        $('.datepicker').datepicker({
          disableWeekends: true
          });
        $('.fixed-action-btn').floatingActionButton();
        $('.scrollspy').scrollSpy();

        //Manage an AJAX form submission  
        $('#contribution').submit(function(e){
          e.preventDefault();
          $.post('contribute.php', $(this).serialize(),
          function(data){
            alert(data);
            $('.modal').modal('close');
          })
        })
      });
    </script>
  </body>
</html>