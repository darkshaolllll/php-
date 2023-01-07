<?php
$choices=[
    'eggs'=>'asdada',
    'toast'=>'dasdsaf',
    'coffee'=>'piping hot coffee'
];
echo "<slect name='food'>\n";
foreach($choices as $key => $choice){
    echo "<option value='$key'>$choice</option>\n";
}
echo "</select>";

?>