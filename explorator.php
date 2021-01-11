<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>L'explorateur de fichiers</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="pageExplorator">
    <?php
      include'code.php';
    ?>

    <section>
      <div class="container titleExplorator">
        <h2>EXPLORATEUR DE FICHIERS </h2>
      </div>
    </section>

    <div class="row">
      <div class="container pt-2 ">
        <section>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <?php
                echo "<form method='post' id='ch_cwd'> </form>";
                foreach($contentDirectory as $content){
                  $path .= $content . DIRECTORY_SEPARATOR;
                  if(strstr($path,$start)){
                      echo "<button type='submit' name='cwd' form='ch_cwd' value='" . substr($path, 0, -1) . "' class='breadcrumb-item text-white'> " . $content . "</button>";
                  }
                }
               ?>

            </ol>
          </nav>
        </section>
      </div>
    </div>

      <!-- Material unchecked -->
      <section class="container hiddenFiles">

          <form action="explorator.php" method="GET">
            <label for="toggle">Afficher les fichiers cachés</label>
            <input  id="toggle" type="checkbox" checked data-toggle="toggle" name="show-files">
            <br>
            <button type="submit" class="btn btn-sm btn-primary mt-2">Afficher</button>
          </form>

      </section>



    <div class="container-fluid">
    <?php
      echo "<br>";
      $dir = scandir($directory);
      //print_r($dir);
      foreach( $dir as $item){
        if($item !== "." && $item !== ".."){
          if($item[0] === "."){
            echo "";
          }
          elseif(is_dir($directory . DIRECTORY_SEPARATOR . $item)){
            echo "<button type='submit' name='cwd' form='ch_cwd' value='" . $directory . DIRECTORY_SEPARATOR . $item . "' class='text-white'> " . '<img class="folders" src="img/explorator/folder1.png" alt="folder">'.'<div class="row">'.'<img class="delete" src="img/explorator/delete.png" alt="delete">'. '<img class="upload" src="img/explorator/upload.png" alt="upload">'. '</div>' .$item . "</button>";
          }
          else{
            echo "<button type='submit' name='cwd' form='ch_cwd' value='" . $directory . DIRECTORY_SEPARATOR . $item . "' class='text-white'> " . '<img class="files" src="img/explorator/file.png" alt="files">'.'<div class="row">' .'<img class="deleteFile" src="img/explorator/delete.png" alt="delete">'. '<img class="uploadFile" src="img/explorator/upload.png" alt="upload">'. '</div>' .$item . "</button>";
          }

        }

      }
      ?>

      </div>
      <div class="container-fluid pt-5">
        <hr>
        <?php
        //echo getcwd();
        $dir = scandir($directory);
        //print_r($dir);
        $hiddenFiles = isset($_GET['hidden-files']);
        $showFiles = isset($_GET['show-files']);

        foreach( $dir as $item){
          if($item !== "." && $item !== "..")
          {
            if($hiddenFiles)
            {
              echo " ";
            }
            elseif($showFiles && $item[0] === ".")
            {
              echo "<button type='submit' name='cwd' form='ch_cwd' value='" . $directory . DIRECTORY_SEPARATOR . $item . "' class=' text-white'> " . '<img class="hideFile" src="img/explorator/file.png" alt="folder">'.'<div class="row">' .'<img class="deleteFile" src="img/explorator/delete.png" alt="delete">'. '<img class="uploadFile" src="img/explorator/upload.png" alt="upload">'. '</div>'.  $item . "</button>";
            }
          }
        }
        ?>




    <!-- add new folder, trash and scroll to top -->
    <div class="container optionItems">
      <div class="row option">
      <img class="addFolder" src="img/explorator/new.png" alt="new folder">
      <img class="bin " src="img/explorator/bin.png" alt="trash">
      <a class= "img-fluid" href="#">
        <img class= "imgBtm" src="img/explorator/fleche.png" alt="scroll to top">
      </a>
      </div>
    </div>


     <!-- Fontawesome script -->
    <script src="https://kit.fontawesome.com/01b3f43a55.js" crossorigin="anonymous"></script>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



  </body>

  <!-- FOOTER -->
  <footer class="container-fluid pt-3 pb-5">
    <section class="footer">
    <p class="text-center pt-4">&copy; 2020 - The Explorator &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

  </footer>
</html>
