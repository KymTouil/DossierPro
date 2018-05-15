<?
require("config.php");

$file = "habitants.XLS";  // nom du fichier � cr�er sur serveur

 //on ouvre le fichier
if(!$myfile = fopen($file, "w")){ echo "erreur ouverture fichier"; exit; }


// ok pour liste
$req = MYSQL_QUERY("SELECT * FROM habitants ORDER BY nom ASC");
$res = MYSQL_NUM_ROWS($req);


// 1ere ligne
fputs($myfile,"civilite\t nom\t Prenom\t numero\t rue\t ville\t email\t frequence\t habitation\n");


// chaque inscription faire
for ($i=0;$i<$res;$i++) {

    $civilite      = mysql_result($req,$i,"civilite");
    $nom           = mysql_result($req,$i,"nom");
    $prenom        = mysql_result($req,$i,"prenom");
	$numero        = mysql_result($req,$i,"numero");
	$rue           = mysql_result($req,$i,"rue");
	$ville         = mysql_result($req,$i,"ville");
    $email         = mysql_result($req,$i,"email");
    $frequence     = mysql_result($req,$i,"frequence");
    $habitation    = mysql_result($req,$i,"habitation");
 
//ecriture ligne //on ins�re une tabulation \t pour changer de colonne et un retour chariot \n pour changer de ligne

fputs($myfile,"$civilite\t $nom\t $prenom\t $numero\t $rue\t $ville\t $email\t $frequence\t $habitation\n");
}

fclose($myfile);   //on ferme le fichier

$today = date ("d-m-Y");

header("Content-disposition: attachment; filename=habitants-$today.xls");
// le client "voit" habitants-01-12-2006.xls et pas GEN.XLS sur serveur
header("Content-Type: application/force-download");
header("Content-Transfer-Encoding: application/xls\n"); // Surtout ne pas enlever le \n
header("Content-Length: ".filesize($file));
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
header("Expires: 0");
readfile($file);

?>
