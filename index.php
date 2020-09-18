<!DOCTYPE html>    <!-- guess.php -->
<?php
    session_start();

    if (!isset($_POST["num"])) {
         $_SESSION["count"] = 0; //Initialize count
         $message = " ";
         $messageW=" ";
         $_POST["randNum"] = rand(0,10);

    } else if ($_POST["num"] > $_POST["randNum"]) { //greater than
        $win = 1;
        $message =$_POST["num"]." isnt it! Try a smaller number</p>";
         $messageW=" ";
        $_SESSION["count"]++; //Declare the variable $count to increment by 1.

    } else if ($_POST["num"] < $_POST["randNum"]) { //less than
        $win = 1;
        $message = $_POST["num"]." isnt it! Try a bigger number.";
         $messageW=" ";
        $_SESSION["count"]++; //Declare the variable $count to increment by 1.

    } else { // must be equivalent
        $win = 2;
        $_SESSION["count"]++;
         $message = " ";
        $messageW = "You Got Me! You read my mind in ".$_SESSION["count"]." attempts";
        unset($_SESSION["count"]);
            //Include the $count variable to the $message to show the user how many tries to took him.
    }


?>
<html>
    <head>
          <meta charset="utf-8">
          <meta name = "description" content = "My guessing Game">
          <meta name = "author" content = "Zain Cruz">

          <!-- boostrap CSS-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link rel= "stylesheet" href="CSS/styles.css">

          <!-- shortcout icon Image-->
          <link rel= "shortcout icon" href= "images/Hello.png" type = "image/png">


        <title>Read My Mind</title>
    </head>
    <body style ="font-family: sans-serif; background: url(https://pm1.narvii.com/5722/5d535df4c85f4ed8efc599e4fc7bc0231818d792_hq.jpg); background-size: 100%;">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: blue">
                <a class="navbar-brand" href="index.php">Choose your Difficulty --> </a>
                <div class="collapse navbar-collapse" id="navbarColor02">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">(EZ Mode)<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="MediumDif.php">(A little more Effort)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="HardDif.php">(I dont want to play anymore)</a>
                    </li>
                  </ul>

                </div>
             </nav>

        </header>
        <main role ="main" >

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Are You Sure?!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure you'd like to reset?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='reset.php' ">  I'm Sure</button>
                  </div>
                </div>
              </div>
            </div>

    <div class="left">
      <div align="left">
        <!-- Game development -->
           <h1> Read My Mind</h1>
           <h2>Current mode: EZ Mode</h2><br>

           <h3>Assignment:</h3>
            <p>I am thinking of a number between 1 and 10</p>
            <p>Enter your guess below to see if you can read my mind!</p>
            <form action="" method="POST">
               <label for="guess" >Enter your guess:</label>
                    <input type="number"  id= "guess" name="num" min="1" max="10" required="required" autofocus>
                    <input type="hidden" name="randNum"
                           value="<?php echo $_POST["randNum"]; ?>" >

                <p><input type="submit" value="Submit your guess" style="display:inline-block;"></p>
            </form>


               <!-- Button trigger modal -->
            <button type="button"  data-toggle="modal" data-target="#staticBackdrop" >
              Reset
            </button>


            <h3 style ="color: #2c3be3" > <?php echo $message ; ?></h3>
            <h3 style ="color: #2ce3dd" > <?php echo $messageW ; ?></h3>
        </div>
      </div>
        </main>







        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
