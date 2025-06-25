<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Eukaryotic Cell Organelles Functions </title>

  <link rel="stylesheet" href="style/stylesheet.css">
</head>
<body>

  <header>
    <div class="title">
      <h1>Eukaryotic Cell Organelles Functions</h1>
    </div>  

  </header>

  <br>

  <main>

  <div class="btn-container">
     <button onclick="location.href='index.html'" class="btn">Refresh</button>
   </div>

   <br>
   <br>




    
   
      <div class="card">

      


    <?php

     $organelles = $_GET["organelles"]; 

     $images = [ "Nucleus" => "images/Nucleus.png",
                 "Mitochondria" => "images/Mitochondria.png",
                 "Ribosome" => "images/Ribosome.png",
                 "Endoplasmic Reticulum (ER)" => "images/ER.png",
                 "Golgi Apparatus" => "images/Golgi.png",
                 "Lysosomes" => "images/Lysosomes.png",
                 "Chloroplast" => "images/Chloroplast.png",
                 "Vacuole" => "images/Vacuole.png",
                 "Cell Membrane" => "images/Membrane.png",
                 "Cytoplasm" => "images/Cytoplasm.png",
                 "Cytosol" => "images/Cytosol.png",
                 "Peroxisome" => "images/Peroxisome.png",
                 "Vesicles" => "images/Vesicles.png"
];


     if (!empty($organelles)) {

     echo "<div class='response'>";

     echo "<div class='organelles-title'>{$organelles}</div>";

     echo "<div class='organelles-content'>";

     echo "<img src='" . $images[$organelles] . "' alt='" . $organelles . "' class='organelles-image pulse-animation'>";

     echo "<div class='text-style'>";
    
     //echo "<p class='organelles-{$organelles} text-style'>  
           //<span class='organelles-{$organelles}'>{$organelles}</span></p>";
           
  	 //echo "<p> ------> </p>".$organelles."<br/>";  


     switch ($organelles) {  
  
     case "Nucleus":
       echo "<p> The presence of a nucleus is the principal feature that distinguishes eukaryotic from prokaryotic cells. By housing the cell's genome, the nucleus serves both as the repository of genetic information and as the cell's control center. </p>";
       break;
    
     case "Mitochondria":
       echo "<p> Mitochondria play a critical role in the generation of metabolic energy in eukaryotic cells. They are responsible for most of the useful energy derived from the breakdown of carbohydrates and fatty acids, which is converted to ATP by the process of oxidative phosphorylation. </p>";
       break;

     case "Ribosome":
       echo "<p> A ribosome is an intercellular structure made of both RNA and protein, and it is the site of protein synthesis in the cell. The ribosome reads the messenger RNA (mRNA) sequence and translates that genetic code into a specified string of amino acids, which grow into long chains that fold to form proteins. </p>";
       break;
    
     case "Endoplasmic Reticulum (ER)":
       echo "<p> The ER is the largest organelle in the cell and is a major site of protein synthesis and transport, protein folding, lipid and steroid synthesis, carbohydrate metabolism and calcium storage. </p>";
       break;

     case "Golgi Apparatus":
       echo "<p> The three primary functions of the Golgi apparatus are the transport, sorting and modification of both protein and lipid, and the protein composition of the organelle reflects these functions. </p>";
       break;

     case "Lysosomes":
        echo "<p> Lysosomes function as the digestive system of the cell, serving both to degrade material taken up from outside the cell and to digest obsolete components of the cell itself. </p>";
        break; 
      
     case "Chloroplast":
        echo "<p> Chloroplasts are plant cell organelles that convert light energy into relatively stable chemical energy via the photosynthetic process. By doing so, they sustain life on Earth. </p>";
        break;

     case "Vacuole":
       echo "<p> Vacuoles are membrane-bound organelles that can be found in both animals and plants. In a way, they're specialized lysosomes. That is to say that their function is really to handle waste products, and by handle, mean take in waste products and also get rid of waste products. </p>";
       break;

     case "Cell Membrane":
       echo "<p> Membranes of eukaryotic organisms separate the cell into individual subcellular compartments that carry out crucial, while often non-compatible, metabolic reactions. The organelles are also differentiated both quantitatively and qualitatively in terms of lipid content. </p>";
       break;

     case "Cytoplasm":
       echo "<p> The cytoplasm is an integral part of both prokaryotic and eukaryotic cells and functions to house and maintain an optimal environment for the cellular organelles. Organelles of cytoplasm carry out complex metabolic reactions which include protein synthesis and energy production. </p>";
       break;

     case "Cytosol":
        echo "<p> In eukaryotes, the cytosol is the soup within which all of the cell's organelles reside. It is also the home of the cytoskeleton. The cytosol contains dissolved nutrients, helps break down waste products, and moves material around the cell. The nucleus often flows with the cytoplasm changing its shape as it moves. </p>";
        break;

      case "Peroxisome":
         echo "<p> Peroxisomes are specialized for carrying out oxidative reactions using molecular oxygen. They generate hydrogen peroxide, which they use for oxidative purposes—destroying the excess by means of the catalase they contain. </p>";
         break;

      case "Vesicles":
         echo "<p> Vesicles can help transport materials that an organism needs to survive and recycle waste materials. They can also absorb and destroy toxic substances and pathogens to prevent cell damage and infection. </p>";
         break;

      default:
         echo "<p> Please select a valid organelle. </p>";

     }

     echo "</div>";
     echo "</div>";
     echo "</div>";
   }

 
    ?>

     
  
 </div>
 

  </main>


  <br>

  <footer>

    <p>&copy; 2024 _ PHP _ Khadija Tannahi _ Eukaryotic Cell Organelles Functions</p>
    <p>Source: https://www.ncbi.nlm.nih.gov/pmc</p>

  </footer>
  
</body>
</html>