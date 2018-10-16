<?php
// Html Addition
// tableHead
$inputs = "";
foreach ($crud->attributesList as $attribute) {
    $inputs .= "<input type=\"text\" name=\"".$attribute."\" placeholder=\"".$attribute."\"/>";
}
echo <<<EOT
<h3>Addition</h3>
<form action="index.php" method="POST">
    $inputs
    <input type="submit" name="add" value="Add"/>
</form>
EOT;
