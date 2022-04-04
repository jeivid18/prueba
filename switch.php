<?php
        switch($cat){
                case "home":                       
                       require("home.php");                        
                break;
                   
		case "nosotros":
                     require("nosotros.php");
                break;
		case "contactenos":
                        require("contactenos.php");
                break;
		case "preguntas-frecuentes":
                        require("preguntas.php");
                break;		
		case "blog":
                        require("blog.php");
                break;
              
                case "documentales":
                        require("documentales.php");
                break;
                case "videos":
                        require("videos.php");
                break;
                case "noticias":
                        require("noticias.php");
                break;
             
            default:
                require("error.php");
                break;
        }

     
          
?>