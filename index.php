<?php
    include 'persons.php';
    include 'function.php';  
    echo 'Исходный массив:'.'<br>';  
    print_r($example_persons_array); 
    echo '<br>';  
    echo '<br>';  
    $fullName = $example_persons_array[0]['fullname'];
    echo "Исходное полное имя: ".$fullName.'<br>';
    echo '<br>';  
    $chunckedName = getPartsFromFullname($example_persons_array[0]['fullname']);
    echo "Результат работы getPartsFromFullname: ";
    print_r($chunckedName); 
    echo '<br>';
    echo '<br>';  
    echo "Результат работы getPartsFromFullname: ".getFullnameFromParts($chunckedName['surname'],$chunckedName['name'],$chunckedName['patronomyc']).'<br>';     
    echo '<br>';  
    echo "Результат работы getShortName: ".getShortName($fullName).'<br>';
    echo '<br>';  
    echo "Результат работы getGenderFromName: ".getGenderFromName($fullName).'<br>';
    echo '<br>';  
    echo 'Гендерный состав аудитории: ';
    echo '<br>';
    getGenderDescription($example_persons_array);
    echo '<br>';  
    getPerfectPartner("АЛиеВ","ПеТр","АфаНасиевИЧ",$example_persons_array);
    