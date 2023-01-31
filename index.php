
<?php
session_start();
if(isset($_POST['send'])){
  //Extraction des variables
  extract($_POST);
  //verifions que l'email est valide
  $mail_verified = filter_var($mail, FILTER_VALIDATE_EMAIL);
    
  if($mail_verified){
      //Verifions si les variables existent et si les champs ne sont pas vides
      if(isset($username) && $username != "" &&
         isset($mail) && $mail != "" &&
         isset($subject) && $subject != "" &&
         isset($message) && $message != ""){

        //Envoyer l'email
        //Le destinataire (votre adresse mail)
        $to = "amaiterai72@gmail.com";
        //Objet du mail
        $subject = $subject;
        //Message du formulaire avec le nom, l'email et le message de l'expéditeur
        $message = "
        <p>Vous avez reçu un mail de : <strong>" .$username. "</strong></p>
        <p>Mail : <strong>" .$mail. "</strong></p>
        <p>Message : <strong>" .$message. "</strong></p>"   
        ;
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <'.$mail.'>' . "\r\n";
        //Envoi du mail
        $send = mail($to,$subject,$message,$headers);
        //Verification de l'envoi
        if($send){
          $_SESSION['succes_message'] = "Votre message a été envoyé avec succès!";
          }else{
          $info = " Email non envoyé. ";
          }
      
      }else{
        //Si elles sont vides
        $info = "Veuillez remplir tous les champs !";
      }
  }else{
    $info = "Veuillez entrer un mail valide !";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="atfolio/reset.css">
    <link rel="stylesheet" href="atfolio/phone.css">
    <script src="https://kit.fontawesome.com/ed27a52d73.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Passion+One&family=Secular+One&family=Teko:wght@600&display=swap" rel="stylesheet"> 
  </head> 
<body>
<div id="full_body">
<a name="top"></a>
<!-----------------BODY--------------------->
  <div id="scroll_to_top">
    <a href="#top" id="on_top"><img src="atfolio/assets/new-arrow.jpg" alt="Remonter"></i></a>
  </div>
  
  <div id="pc_picture">  
    <?php include("atfolio/header.php") ?>
      
      <div class="content">
        <h4><span>Hello!!! </span><span>je </span><span>m'appelle </span> </h4> 
        <h1><span>Amaiterai </span><span class="firstname">TAPUTU </span></h1>
        <h3 class="title">Je suis developpeur web junior</h3>
        <div id="button_content">
          
          <a href="#contact" class="btn-primary">Contact</a>
          
        </div>
        <ul id="medias">
          <li class="bulle">
            <a href="https://www.linkedin.com/in/amaiterai-taputu-324a7117a/">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </li>
          <li class="bulle">
            <a href="https://www.instagram.com/amait.naiti/">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>
          <li class="bulle">
            <a href="https://www.facebook.com/amaiterai.taputu">
              <i class="fa-brands fa-facebook"></i>
            </a>
          </li>
        </ul>  
      </div>        
  </div>  
  <section class="about">
  <h5><a name="presentation">Présentation</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5>  
    <div id="main">
      <img src="atfolio/assets/photo.png" alt="">
      <div class="about_text">
          <h2 class="about_me">À propos de moi</h2> 
          <h3>Front-<span>end</span></h3>
          <p>
            J'ai 35 ans, je suis en reconversion professionnelle et je suis passionné par le design. 
            Mon intérêt pour le web ne cesse d'évoluer, je suis passé de simple utilisateur
            à desormais acteur de cette univers. J'ai suivi une formation de
            développeur web et web mobile junior pendant six mois. Je suis créatif et j'aime dessiner depuis tout petit.
            M'orienter vers le front-end a été pour moi une évidence. Suite à l'examen pour l'obtention du titre
            professionnel, j'ai pu valider le module consacré à la partie front-end.
          </p>
      </div>
    </div>
  </section>     
  <h5><a name="realisation">Réalisations</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5>  
  <section class="display">
    <div class="box">
      <ul id="list_button">
        <li>
          <button class="button_real select_all">Tous</button>
        </li>
        <li>
          <button class="button_real select_wordpress">Wordpress</button>
        </li>
        <li>
          <button class="button_real select_symfony">Symfony</button>
        </li>
        <li>
          <button class="button_real select_native">Natif</button>
        </li>
       </ul>
    </div>
    <div class="box">   
      <a href="" id="project_1">
        <div class="card" id="email">
          <div class="padding_card">
            <h3>Email<span>ing</span></h3>     
            <p>           
              Conception d'une application d'envoi d'emails avec diverses fonctionnalités (en cours)
            </p> 
          </div>        
        </div>
      </a>
      <a href="https://github.com/Amaite72/garage-attens" id="project_2">
        <div class="card" id="auto">
          <div class="padding_card">
            <h3>Automob<span>ile</span></h3>     
            <p>           
              Conception d'une application de gestion d'employés (en cours)
            </p> 
          </div>        
        </div>
      </a>
      <a href="https://www.atfolio.go.yj.fr/" id="project_3">
        <div class="card" id="folio">
          <div class="padding_card">
            <h3>Portfo<span>lio</span></h3>     
            <p>           
              Conception d'un site de présentation (en cours)
            </p> 
          </div>        
        </div>
      </a>
      <a href="" id="project_4">
        <div class="card" id="tatoo">
          <div class="padding_card">
            <h3>Tatou<span>age</span></h3>     
            <p>           
              Conception d'un site de Tatouage (en cours)
            </p> 
          </div>        
        </div>
      </a>
    </div>
  </section>  
    <section class="about">
      <h5><a name="comp">Compétences</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5>
      <div id="comp_img">
        <div id="section_skill">       
          <div class="progress skill_bar" id="progress_html">
            <div class="progress_bar" id="bar_html">
              <span class="skill" id="skill_html">              
                <i class="fa fa-html5 fa-2x"></i>
                HTML              
                <p class="val" id="val_html">75%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_css">
            <div class="progress_bar" id="bar_css">
              <span class="skill" id="skill_css">
                <i class="fa-brands fa-css3-alt"></i>
                CSS
                <p class="val" id="val_css">75%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_javascript">
            <div class="progress_bar" id="bar_javascript">
              <span class="skill" id="skill_javascript">
                <i class="fa-brands fa-js"></i>
                Javascript
                <p class="val" id="val_javascript">50%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_php">
            <div class="progress_bar" id="bar_php">
              <span class="skill" id="skill_php">
                <i class="fa-brands fa-php"></i>
                php
                <p class="val" id="val_php">65%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_mariadb">
            <div class="progress_bar" id="bar_maria">
              <span class="skill" id="skill_mariadb">
                <i class="fa-sharp fa-solid fa-m"></i>
                Mariadb
                <p class="val" id="val_mariadb">60%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_symfony">
            <div class="progress_bar" id="bar_symf">
              <span class="skill" id="skill_symfony">
                <i class="fa-brands fa-symfony"></i>
                Symfony
                <p class="val" id="val_symfony">60%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_wordpress">
            <div class="progress_bar" id="bar_word">
              <span class="skill" id="skill_wordpress">
                <i class="fa-brands fa-wordpress"></i>
                Wordpress
                <p class="val" id="val_wordpress">50%</p>
              </span>
            </div>
          </div> 
          <div class="progress skill_bar" id="progress_git">
            <div class="progress_bar" id="bar_git">
              <span class="skill" id="skill_git">
                <i class="fa-brands fa-gitlab"></i>
                Git
                <p class="val" id="val_git">45%</p>
              </span>
            </div>
          </div>  
        </div> 
        <img id="skills_img" src="atfolio/assets/skills.png" alt="">
      </div> 
    </section>
    
    <section class="about">
    <h5><a name="parcours">Parcours</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5> 
      <div class="section_display">
        <div class="about_text">
          <p id="about_parcours">
            J'ai passé mon bac professionnel "Micro-informatique Réseaux Installation et Maintenance" en 2006 et j'ai obtenu mon diplôme.
            Par la suite j'ai travaillé pendant plus de 10 ans en logistique mais j'avais pour projet de revenir dans l'informatique.
            Une première expérience en 2009 m'avait permis de découvrir le developpement grâce au Cnam mais c'est en 2021 que mon projet a pu se concrétiser.
            En effet, après des test et un entretien à <a href="#button" class="button_org" id="enssop">l'Enssop</a>, j'ai pu entamer
            ma reconversion dans les métiers du numérique. Cette organisme de formation dispose 
            d'une équipe pédagogique très à l'écoute et très axée sur l'humain, elle vous accompagne 
            durant toute la durée de la formation.
            J'aimerai également vous présenter deux entreprises dont sont issus nos formateurs, 
            <a href="#button" class="button_org" id="code_colliders">Code Colliders</a>
            et <a href="#button" class="button_org" id="pmb">PMB Services</a>.
             Ce sont des professionnels qui m'ont formé aux différents 
            langages du web ainsi que les méthodes à appliquer pour gérer un projet de A à Z. 
          </p>
        </div>
      </div>
      <a name="button"></a>
      <div class="lien_parcours">
        <div class="lien_societe">
          <a href="#" class="background_tel">
            <p>Voir le site</p>
          </a>
        </div>
      </div>     
    </section>
    <h5><a name="cv">CV</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5> 

    <div class="position_content">
      <div>
        <img id="cv_png" src="atfolio/assets/cv-amaiterai.png" alt="">
        
        <a href="atfolio/assets/cv-amaiterai.pdf" class="btn-primary" id="download_cv" download="cv-amaiterai.pdf">Télécharger</a>
      </div>
      <embed id="cv_pdf" src="atfolio/assets/cv-amaiterai.pdf" width="800" height="500" type="application/pdf"/>

    </div>
    <h5><a name="contact">Contact</a><img src="atfolio/assets/icone-trait-noir.png" alt=""></h5> 
    <?php 
      //Afficher le message d'erreur
      if(isset($info)){?>  

          <p class='request_message' style="color:red">
            <?=$info ?>
          </p>
        <?php
      }
    ?>
    <?php 
      //Afficher le message de succes
      if(isset($_SESSION['succes_message'])){
        ?>
        <p class='request_message' style="color:green"><?= $_SESSION['succes_message'] ?></p>
        <?php
      }
    ?>  
    
    <form action="" method="POST">
    <h2>Contactez-moi</h2>
    <p>Une remarque? une suggestion? N'hésitez-pas à m'écrire.</p>
      <label>Nom *</label>
      <input type="text" name="username">
      <label>Mail *</label>
      <input type="email" name="mail">
      <label>Sujet *</label>
      <input type="text" name="subject">
      <label>Message *</label>
      <textarea name="message" cols="30" rows="10"></textarea>
      <button name="send">Envoyer</button>     
    </form>
    
     


  <?php include("atfolio/footer.php") ?>
</div><!--div fullbody-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src =" https://unpkg.com/typewriter-effect@latest/dist/core.js " ></script>
    <script src="atfolio/script.js"></script>

</body>
</html>

