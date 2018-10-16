 <?php
// tableHead
$tHead = "";
foreach ($crud->attributesList as $attribute) {
    $tHead .= "<th> $attribute </th>";
}

echo <<<EOT
    <table>
        <tr>
            $tHead
            <th></th>
        </tr>
        <tbody>
EOT;
// tableData and actions
foreach (reset($crud->data) as $idx => $item):
    $tData = "";
    foreach ($crud->attributesList as $attribute) {
        $tData .= "<td>".$item[$attribute]."</td>";
    }
    echo <<<EOT
        <tr>
            $tData
            <td>
                <a href="?action=edit&id=$idx">Edit</a>
                <a href="?action=delete&id=$idx">Delete</a>
            </td>
        </tr>
EOT;
endforeach;
echo <<<EOT
        </tbody>
    </table>
<hr>
<a href="?action=add">Add</a>
<hr>
EOT;
?>
