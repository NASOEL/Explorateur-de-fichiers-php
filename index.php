<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <!-- DEBUT DE PAGE  -->
           <div class="dive "style="height:100px;background-color:red;">
                <nav class="navbar navbar-inverse;">
                    <div class="container-fluid">
                      <form class="navbar-form navbar-left" action="/traitement.php">
                           <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Search" name="search">
                          </div>
                              <button type="submit" class="btn btn-default">rechercher</button>
                      </form>
                    </div>
                </nav>
          </div>
      <div class="container">
        <div class="row" style="heigt:499px;margin-right:18px;">
          <div class="col-sm-3 CLOSE" style="background-color:pink;height:750px;">
                          <?php
                       $bar_url="../" ;//chemin
                     
                       if(isset($_GE['doc1'])){

                           $bar_url=$bar_url.$doc1;
                       }
                                $dirs=scandir($bar_url);  //affichage racine
                                foreach($dirs as $dir){
                                    if (is_dir($bar_url.$dir)){
                                    echo("
                                    <a href='#'> 
                                    <img src='image/doc1.jpg' alt=''width='60'></a>
                                    ");
                                    echo $dir;     
                                     } 
                                     else {
                                        echo("
                                        <a href='#'> 
                                        <img src='image/fichier.png' alt=''width='60'></a>
                                        ");
                                        echo $dir;  
                                     }
                                }
                              
                          ?>
                      </div>
                <div class="col-sm-9" style="background-color:lavenderblush;height:750px;">
                                      <input type="submit" value="ouvrire" >
                                      <input type="submit" value="supprimer" >
              </div>
            </div>
       </div>
       </div>     
</body>
</html>
