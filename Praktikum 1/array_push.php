<!DOCTYPE html>
<html lang="id">

<body>
    <?php
        $tims = ["erwin","heru","ali","zaki"];
        array_push($tims,"wati");
        foreach($tims as $person){
            echo $person. '<br/>';
        }

?>
</body>

</html>