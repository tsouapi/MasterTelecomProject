 <?php try {
  $DB = new PDO('mysql:host=localhost;dbname=dimensionning; charset=utf8','root','');
  $DB-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


          }catch (PDOException $e) {

  echo "Echec : ".$e->getMessage();
  

} ?>