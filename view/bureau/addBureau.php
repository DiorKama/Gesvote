<html>
<head>
<title>Dynamic Dependent Select Box using jQuery and Ajax</title>
</head>
<body>
<div>
<label>Region :</label><select name="country" class="country">
<option value="0">Select Country</option>
<?php
 
    require_once "model/region.php";
    $ob=new Region();
    $liste = $ob->getAllRegion();
    foreach($liste as $row)
    {
     echo '<option value="'.$row['id_region'].'">'.$row['nom_region'].'</option>';
    } 
?>
</select><br/><br/>
<label>Departement :</label><select name="city" class="city">
    <option value="0">Select City</option>
</select>
<br/><br/>
<label>Arrondissement :</label><select name="arron" class="arron">
    <option value="0">Select arron</option>
</select><br/><br/>
<label>Commun :</label><select name="commune" class="commune">
     <option value="0">Select commun</option>
</select><br/><br/>
<label>bureau :</label><select name="bureau" class="bureau">
     <option value="0">Select commun</option>
</select>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
// chargement departement
$(document).ready(function()
{
$(".country").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;

$.ajax
({
type: "POST",
url: "controller/departementController.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".city").html(cities);
} 
});

});
});

// chargement Arrondissement
$(document).ready(function()
{
$(".city").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;

$.ajax
({
type: "POST",
url: "controller/arrondissementController.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".arron").html(cities);
} 
});

});
});


// chargement commune
$(document).ready(function()
{
$(".arron").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;

$.ajax
({
type: "POST",
url: "controller/communeController.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".commune").html(cities);
} 
});

});
});

// chargement bureau
$(document).ready(function()
{
$(".commune").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;

$.ajax
({
type: "POST",
url: "controller/bureauController.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".bureau").html(cities);
} 
});

});
});
</script>
</body>
</html>