<h4>Menu</h4>

<?php
// 2D pole pro hodnoty položek menu a URL
// index 0 - pro GET v URL
// index 1 - pro názvy v navigaci  
$nazev = array
(
  array("", "Domov"),     //index [0][0] a [0][1]
  array("o-nas", "O nás") //index [1][0] a [1][1] atd.
  //za posledním polem už čárka není
);
?>

<ul class="nav nav-pills flex-column">
<?php
for ($i=0; $i < count($nazev); $i++)
{
  echo "<li class=\"nav-item\"><a class=\"nav-link";
  if($_GET['text'] == $nazev[$i][0]) { echo ' active'; }
  echo '" href="index.php';
  if ($nazev[$i][0] != "") echo '?text=';
  echo $nazev[$i][0] . '">' . $nazev[$i][1] . "</a></li>\n";
}
?>
</ul>
