<!doctype html>
<html>
  <head>
    <title>Dulworth &amp; Company: Insurance &amp; Estate Planning</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel='shortcut icon' type='image/x-icon' href='dulworth/imgs/favicon.png' />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="dulworth/style.css" />
  </head>
  <body>

    <nav>
      <?php include 'dulworth/includes/nav.php';?>
    </nav>

    <?php include 'dulworth/includes/brand.php';?>

    <!-- <?php include 'dulworth/includes/contactInfoRight.php';?> -->

    <section class="PageBody">
    <div class="container">

      <br/>
      <br/>
      <div class="SectionTitle" style="text-align:center;">Contact</div>
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <?php
              if($_GET['r'] == "ss") { // if the result is ss (success)
                print('<span style="color:green; font-size: 1.5vmax;">Email Sent</span><br><br><span style="color:#d8d8d8">Thank you for contacting us!</span>');
              }
              else { // otherwise display the form
                print('
                <form method="POST" action="email.php">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea name="body" class="form-control whitespace" rows="3" placeholder="Message..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                ');
                if ($_GET['r'] == "err") { // if there is an error with the form
                  if($_GET['err'] == 'n') { // if the error is n (name)
                    print('<br><br><span style="color:red; font-size: 1.5vmax;">Please enter a name and try again.</span>');
                  }
                  else if($_GET['err'] == 'e') { // if the error is e (email)
                    print('<br><br><span style="color:red; font-size: 1.5vmax;">Please enter an email and try again.</span>');
                  }
                  else if($_GET['err'] == 'b') { // if the error is b (body)
                    print('<br><br><span style="color:red; font-size: 1.5vmax;">Please enter a message and try again.</span>');
                  }
                }
              }
            ?>

          </form>
        </div>
      </div>



      <!-- <div style="border-bottom: solid black 1px"></div> -->
      <br/>
      <br/>
      <br/>

      <?php include 'dulworth/includes/contactInfoCenter.php';?>

    </div> <!-- container -->
    </section>

    <!-- <footer class="footer" style="background-color: rgb(1,27,52); padding-top:10px; font-size: 0.75em;"> -->
      <!-- <?php include 'dulworth/includes/legalFooter.php';?> -->
    <!-- </footer> -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>               <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>        <!-- jquery-ui -->
    <script type="text/javascript" src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>   <!-- jquery-color -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> <!-- d3 -->
  </body>
</html>