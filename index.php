<h1>PHP - Initiation</h1>

<h2>Variable : </h2>
<?php
// Je souhaite afficher ceci dans une variable : 
// ---------------------------------------------
// Société
// Adresse / adresse_complement
// CP Ville

$societe = "Ma société";
$adresse = "12 av. albert einstein";
$adresse_complement = "App. 5";
$cp = 17000;
$ville = "La Rochelle";

// METHODE 1 :
echo $societe."<br>"; // Ma société<br>
echo $adresse." / ".$adresse_complement."<br>";
echo $cp." ".$ville;
echo "<hr>";

// METHODE 2 :
echo "
$societe<br>
$adresse / $adresse_complement<br>
$cp $ville<br>
";
?>




<h2>Tableau : </h2>
<?php
// Afficher un prénom, d'un tableau :
// Prénom : Marie

// Initialiser
$bwd3 = []; // $bwd3 = array();

// Remplir
$bwd3[] = "Elliott"; // 0 = 1er valeur de mon tableau
$bwd3[] = "Margaux"; // 1
$bwd3[] = "Marie";   // 2 
$bwd3[] = "Tom";     // 3

// Afficher
echo "Prénom : ".$bwd3[2]; // Affichera Marie
echo "<hr>";




// Afficher ceci sous forme d'un tableau : 
// Nom de l'école
// Adresse, cp ville
// Tel

// Initialiser
$company = [];

// Remplir
$company[] = "Ma société";       // 0
$company[] = "2 Lorem ipsum";    // 1
$company[] = 17000;              // 2
$company[] = "LA ROCHELLE";      // 3
$company[] = "+331 22 33 44 55"; // 4

echo $company[0] . "<br>" . "Adresse : " . $company[1] . " " . $company[2] . " " . $company[3] . "<br>Téléphone : " . $company[4];
echo "<hr>";




$rs = [];

$rs['twitter'] = "url_twitter";
$rs['facebook'] = "url_facebook";
$rs['instagram'] = "url_insta";

echo $rs['instagram'];
?>
