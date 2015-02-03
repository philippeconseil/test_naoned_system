<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Association pour sauver le monde">
    <meta name="author" content="Philippe CONSEIL">
    <link rel="icon" href="img/icone.png">

    <title>Association pour sauver le monde</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="body">
    <!-- Fond -->
    <div id="bg"></div> 
    
    <div id="wrapper" class="toggled">
        
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li>
                <!-- contenu du menu -->  
              </li>
          </ul>
      </div>
      <!-- fin Sidebar -->

      <!-- Menu -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">            
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="#menu-toggle" title="Menu" class="btn btn-default btn-lg showArchieved btn-menu" id="menu-toggle" style="background-color:#222222;border-color:#222222;">
                    <i class="fa fa-bars"></i>
                  </a>
                </li>
                <li class="margin-titre">
                  <a class="navbar-brand" href="?" style="color:#fff;font-size:14px;" title="Association pour sauver le monde">
                    <p class="titre">Association pour sauver le monde </p>
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="margin-btn-info">
                  <button type="button" class="btn btn-default btn-lg btn-info">  
                    <img src="img/info.png" title="Info">
                  </button>                  
                </li>
              </ul>
            </div>           
          </div>
        </nav>
      </div>
      <!-- fin Menu -->

      <!-- container -->  
      <div class="container">   
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <div class="well haut">
              <div class="row">
                <div class="col-sm-12">
                  <h4>Compl&eacute;ter ce formulaire de contact</h4>
                  <p class="text-justify text-padding-10">
                  Ce formulaire est utile &agrave; notre base contact. Une fois enregistr&eacute;, vous recevrez notre catalogue produit ainsi que nos newsletters. 
                  Gr&acirc;ce &agrave; votre engagement au sein de notre association vous participez &agrave; rendre ce monde plus juste. Merci ! 
                  </p>
                  <p class="btn-accept-decline text-padding-btn">
                    <button type="button" class="btn btn-lg btn-link" data-toggle="modal" data-target=".bs-example-modal-sm">d&eacute;cliner</button>
                    <button type="button" id="btn-accepter" class="btn btn-lg btn-link">accepter</button>
                  </p>
                </div> 
              </div>
            </div>
            <div class="well" id="target">
              <div class="row">      
                <div class="col-sm-12">
                  <div>
                    <a class="close" title="Fermer" id="btn-fermer-form">&times;</a>  
                  </div>
                  <div class="espace-haut-form">
                    <form class="form-horizontal" role="form" action="process.php" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="nom">Nom</label>
                        <div class="col-sm-9" id="nom-group">
                          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="prenom">Pr&eacute;nom</label>
                        <div class="col-sm-9" id="prenom-group">          
                          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Pr&eacute;nom">
                        </div>
                      </div>                                             
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="profession">Profession</label>
                        <div class="col-sm-9" id="profession-group">          
                          <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="langue">Langue</label>
                        <div class="col-sm-9" id="langue-group">          
                          <input type="text" class="form-control" id="langue" name="langue" placeholder="Langue">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="situation_familiale">Situation familiale</label>
                        <div class="col-sm-9" id="situationfamiliale-group">          
                          <input type="text" class="form-control" id="situation_familiale" name="situation_familiale" placeholder="Situation familiale">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Adresse email</label>
                        <div class="col-sm-9" id="email-group">          
                          <input type="text" class="form-control" id="email" name="email" placeholder="Adresse email">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-xs-3" for="telephone">T&eacute;l&eacute;phone</label>
                        <div class="col-xs-6" id="telephone-group">        
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span></span>
                            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Num&eacute;ro de T&eacute;l&eacute;phone" aria-describedby="basic-addon1">                
                          </div>                 
                        </div>
                        <div class="col-xs-3" id="type-telephone-group">
                          <select class="form-control" name="type_telephone" id="type_telephone">
                              <option value="-1" selected></option>
                              <option value="portable">Portable</option>
                              <option value="fixe">Fixe</option>
                          </select>              
                       </div> 
                      </div>
                      <div class="form-group btn-valid">        
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>        
            </div>
          </div>          
          <div class="col-sm-3 col-sm-pull-9 logo fixed-width-200">
            <div class="well haut">
              <div class="text-center">
                 <p class="bloc-logo"><img class="img-responsive" src="img/logo.png" alt="Logo"></p>
              </div>
            </div>
          </div>
        </div>
    
        <footer>
          <!-- footer -->
        </footer>   
      </div>
      <!-- fin container --> 
    </div>

    <!-- fenetre modal -->
    <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Message</h4>
          </div>
          <div class="modal-body">
            <p>
            &Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;cliner le formulaire de contact ?
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-lg btn-link" data-dismiss="modal">Annuler</button>
            <button type="button" id="btn-decline-yes" class="btn btn-lg btn-link" data-dismiss="modal">Oui</button>
          </div>
        </div>
      </div>
    </div>
    <!-- fin fenetre modal -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>  
    <script src="js/blur.js" type="text/javascript"></script>
    <script src="js/jquery.textPlaceholder.js"type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    
    
  	<script type="text/javascript">
  	$(function(){
  		$("#nom").textPlaceholder();
      $("#prenom").textPlaceholder();
      $("#profession").textPlaceholder();
      $("#langue").textPlaceholder();
      $("#situation_familiale").textPlaceholder();
      $("#email").textPlaceholder();
      $("#telephone").textPlaceholder();
  	});
  	</script>    
  </body>
</html>