<?php
// Html Edition
$id = $_GET["id"];
$data = $crud->data[$crud->listName];
echo <<<EOT
<h3>Edition</h3>
  <form action="index.php" method="POST">
        <input type="hidden" value="$id" name="id"/>
EOT;
    foreach ($crud->attributesList as $attribute) {
        $value = $data[$id][$attribute];
        echo "<label for=\"$value\">$attribute</label>";
        echo "<input type=\"text\" value=\"$value\" name=\"$attribute\"/>";
    }
echo <<<EOT
        <input type="submit" name="edit" value="Edit"/>
    </form>
EOT;
