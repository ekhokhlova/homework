<?php
require 'states.php'; 


$arr_abbr = array_keys($us_state_abbrevs_names['states']);
sort($arr_abbr);
$arr_names = array_values($us_state_abbrevs_names['states']);
sort($arr_names);
$arr_states_copy = array_combine($arr_abbr,$arr_names);
rsort($us_state_abbrevs_names['countries']);
$us_state_abbrevs_names['states'] = $arr_states_copy;

while($element=each($us_state_abbrevs_names)){
 echo $element['key'] . '<br/>';
  foreach ($us_state_abbrevs_names[$element['key']] as $abbr => $names){
    echo $abbr . ' - ' . $names . '<br>';
 }
}



?>    

    