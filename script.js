let full_body = document.getElementById("full_body");
let scroll_top= document.getElementById("scroll_to_top");
let on_top = document.getElementById("on_top");
let request_message = document.querySelector(".request_message");

/************SCROLL ARROW*********** */
window.addEventListener("scroll", function(){
  scroll_position = window.scrollY;
  
  if(scroll_position == 0){ /* (<=260) */
      scroll_top.style.display = "none";
  }else{
      scroll_top.style.display = "block";
  } 
}); 
/************MENU BURGER************ */
let burgerDown = document.getElementById("burger_down");
let burgerUp = document.getElementById("burger_up");
let nav = document.getElementById("navigation");
let lienNav = document.getElementById("lien_nav");
let scrollMenu = document.getElementById("scroll_menu");
let logo = document.getElementById("logo");

burgerDown.addEventListener("click", function(){
  
    scrollMenu.style.display = "flex"; 
    scrollMenu.style.position = "absolute";
    scrollMenu.style.width = "100%";   
    scrollMenu.style.left = "0";
    scrollMenu.style.zIndex = "1";
    scrollMenu.style.top = "130px";
  
    
    burgerDown.style.display = "none";
    burgerUp.style.display = "block";
    burgerUp.style.color = "#fb0043";
    burgerUp.style.border = "solid 4px #fb0043";
    lienNav.style.width = "100%";
    lienNav.style.display = "flex";
    lienNav.style.flexDirection = "column";
    lienNav.style.backgroundColor = "#00000095";/* 
    nav.style.backgroundColor = "#00000090";
    logo.style.opacity = "0.3"; */

    burgerUp.addEventListener("click", function(){
        
        scrollMenu.style.display = "none";
        burgerDown.style.display = "block";
        burgerUp.style.display = "none";
        nav.style.backgroundColor = "transparent";
        logo.style.opacity = "1";
    })

})

/************SKILLS*********** */

const section_skill = document.getElementById("section_skill");
const skill = document.querySelector(".skill");
const progress_bar = document.querySelector(".progress_bar");
const val = document.querySelector(".val");

const bar_html = document.getElementById("bar_html");
const skill_html = document.getElementById("skill_html");
const val_html = document.getElementById("val_html");
const progress_html = document.getElementById("progress_html");

const bar_css = document.getElementById("bar_css");
const skill_css = document.getElementById("skill_css");
const val_css = document.getElementById("val_css");
const progress_css = document.getElementById("progress_css");

const bar_javascript = document.getElementById("bar_javascript");
const skill_javascript = document.getElementById("skill_javascript");
const val_javascript = document.getElementById("val_javascript");
const progress_javascript = document.getElementById("progress_javascript");

const bar_php = document.getElementById("bar_php");
const skill_php = document.getElementById("skill_php");
const val_php = document.getElementById("val_php");
const progress_php = document.getElementById("progress_php");

const bar_symfony = document.getElementById("bar_symf");
const skill_symfony = document.getElementById("skill_symfony");
const val_symfony = document.getElementById("val_symfony");
const progress_symfony = document.getElementById("progress_symfony");

const bar_mariadb = document.getElementById("bar_maria");
const skill_mariadb = document.getElementById("skill_mariadb");
const val_mariadb = document.getElementById("val_mariadb");
const progress_mariadb = document.getElementById("progress_mariadb");

const bar_wordpress = document.getElementById("bar_word");
const skill_wordpress = document.getElementById("skill_wordpress");
const val_wordpress = document.getElementById("val_wordpress");
const progress_wordpress = document.getElementById("progress_wordpress");

const bar_git = document.getElementById("bar_git");
const skill_git = document.getElementById("skill_git");
const val_git = document.getElementById("val_git");
const progress_git = document.getElementById("progress_git");

bar_html.style.width = "0";
bar_css.style.width = "0";
bar_javascript.style.width = "0";
bar_php.style.width = "0";
bar_mariadb.style.width = "0";
bar_symfony.style.width = "0";
bar_wordpress.style.width = "0";
bar_git.style.width = "0";
/************SKILLS EVENT*********** */
//https://www.youtube.com/watch?v=SkheRkXbQuQ


window.addEventListener("scroll", function(){
    const {scrollTop, clientHeight} = document.documentElement;
    const topElementToTopViewport = section_skill.getBoundingClientRect().top;   

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.60){       

      function level_bar(valeur, bar, largeur_min, largeur_max, couleur, changement, hauteur_tel, hauteur_pc){
        
        let min = largeur_min + 44;
        let max = parseInt(largeur_max);
        let larg_max = parseInt(largeur_max);
        
        if(max == larg_max){
          bar.style.width = largeur_max;
          valeur.style.display = "block";
          
        } 

        bar.style.backgroundColor = couleur;
        bar.style.transition = changement; 
       
        if (window.matchMedia("(min-width: 1280px)").matches) {
          /* La largeur minimum de l'affichage est 1280 px inclus */
          bar.style.height = hauteur_pc;
        } else {
          /* L'affichage est inférieur à 1280px de large */
          bar.style.height = hauteur_tel;
        }
      }
      
      function level_skill(skill, alignement){
        skill.style.textAlign = alignement;
      }
      function level_val(val, changement, opacite){
        val.style.transition = changement;
        val.style.opacity = opacite;
      }
      function level_progress(progress, couleur){
        progress.style.backgroundColor = couleur;
      }     
        
        level_bar(val_html, bar_html, 0, "75%", "#de4e25", "width 2s ease", "100px", "40px");
        level_skill(skill_html, "end");
        level_val(val_html, "opacity 2s ease", "1");    
        level_progress(progress_html, "#fad9a5");

        level_bar(val_css, bar_css, 0, "75%", "#0c6fb2", "width 2s ease", "100px", "40px");
        level_skill(skill_css, "end");
        level_val(val_css, "opacity 2s ease", "1");    
        level_progress(progress_css, "#cefeff");
        
        level_bar(val_javascript, bar_javascript, 0, "50%", "#de9d27", "width 2s ease", "100px", "40px");
        level_skill(skill_javascript, "end");
        level_val(val_javascript, "opacity 2s ease", "1");    
        level_progress(progress_javascript, "#f8f7b5");

        level_bar(val_php, bar_php, 0, "65%", "#697ab1", "width 2s ease", "100px", "40px");
        level_skill(skill_php, "end");
        level_val(val_php, "opacity 2s ease", "1");    
        level_progress(progress_php, "#d2dbff");
        
        level_bar(val_mariadb, bar_mariadb, 0, "60%", "#bd9368", "width 2s ease", "100px", "40px");
        level_skill(skill_mariadb, "end");
        level_val(val_mariadb, "opacity 2s ease", "1");    
        level_progress(progress_mariadb, "#f8bb7c"); 

        level_bar(val_symfony, bar_symfony, 0, "60%", "#000000", "width 2s ease", "100px", "40px");
        level_skill(skill_symfony, "end");
        level_val(val_symfony, "opacity 2s ease", "1");    
        level_progress(progress_symfony, "#c6c6c6"); 

        level_bar(val_wordpress, bar_wordpress, 0, "50%", "#52a4c7", "width 2s ease", "100px", "40px");
        level_skill(skill_wordpress, "end");
        level_val(val_wordpress, "opacity 2s ease", "1");    
        level_progress(progress_wordpress, "#cefeff"); 

        level_bar(val_git, bar_git, 0, "45%",  "#db4128", "width 2s ease", "100px", "40px");
        level_skill(skill_git, "end");
        level_val(val_git, "opacity 2s ease", "1");    
        level_progress(progress_git, "#F49E2560"); 

        

    }
});

/****************************Animation parcours telephone******************************/ 

let background_tel = document.querySelector(".background_tel");
const enssop = document.getElementById("enssop");
const code = document.getElementById("code_colliders");
const pmb = document.getElementById("pmb");

background_tel.style.backgroundImage = "url('atfolio/assets/code.png')";
  background_tel.innerHTML = "<a href='https://codecolliders.com/' class='background_tel'><p style='opacity:1'>Voir le site</p></a>";  


background_tel.style.backgroundImage = "url('atfolio/assets/code.png')";
code.addEventListener("click", function(){
  background_tel.style.backgroundImage = "url('atfolio/assets/code.png')";
  background_tel.innerHTML = "<a href='https://codecolliders.com/' class='background_tel'><p style='opacity:1'>Voir le site</p></a>";  
});

pmb.addEventListener("click", function(){
  background_tel.style.backgroundImage = "url('atfolio/assets/pmb.png')";
  background_tel.innerHTML = "<a href='https://www.sigb.net/' class='background_tel'><p style='opacity:1'>Voir le site</p></a>";
})


 /************choice real*********** */

 let all = document.querySelector(".all");
 let select_all = document.querySelector(".select_all");
 let select_symfony = document.querySelector(".select_symfony");
 let select_wordpress = document.querySelector(".select_wordpress");
 let select_native = document.querySelector(".select_native");
 let id_project1 = document.getElementById("project_1");
 let id_project2 = document.getElementById("project_2");
 let id_project3 = document.getElementById("project_3");
 let id_project4 = document.getElementById("project_4");


 select_all.style.backgroundColor = "#e01a4f";
 select_all.style.color = "#ffffff";
 select_all.style.display = "block";

 function choice(select, b, c) {
  b = "#e01a4f";
  c = "#ffffff";
  select.style.backgroundColor = b;
  select.style.color = c;

 }
 function empty_choice(select, b, c) {
  b = "#ffffff";
  c = "#39383b";
  select.style.backgroundColor = b;
  select.style.color = c;

 }


  
    select_all.addEventListener("click", function(){
  
      choice(select_all);
      empty_choice(select_symfony);
      empty_choice(select_wordpress);
      empty_choice(select_native);
      id_project1.style.display = "block";
      id_project2.style.display = "block";
      id_project3.style.display = "block";
      id_project4.style.display = "block";
      
    });
  
    
  
    select_symfony.addEventListener("click", function(){
  
      choice(select_symfony);
      empty_choice(select_all);
      empty_choice(select_wordpress);
      empty_choice(select_native);
      id_project1.style.display = "block";
      id_project2.style.display = "none";
      id_project3.style.display = "none";
      id_project4.style.display = "none";
      
    });

    select_wordpress.addEventListener("click", function(){
  
      choice(select_wordpress);
      empty_choice(select_all);
      empty_choice(select_symfony);
      empty_choice(select_native);
      id_project1.style.display = "none";
      id_project2.style.display = "none";
      id_project3.style.display = "none";
      id_project4.style.display = "block";

    });

    select_native.addEventListener("click", function(){
  
      choice(select_native);
      empty_choice(select_all);
      empty_choice(select_symfony);
      empty_choice(select_wordpress);
      id_project1.style.display = "none";
      id_project2.style.display = "block";
      id_project3.style.display = "block";
      id_project4.style.display = "none";
    });
 
 