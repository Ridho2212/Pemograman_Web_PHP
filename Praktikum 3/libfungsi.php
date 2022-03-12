<?php 
function hna($hna){
    if ($hna > 55 ) {
    return 'Siswa Lulus';
}
else {
    return 'Siswa Tidak Lulus';
}
}

function grade($hna){
    if ($hna > 0 && $hna <= 35){
    return 'E';
}
elseif ($hna > 36 && $hna <= 55){
    return 'D';
}
elseif ($hna > 56 && $hna <= 69){
   return 'C';
}
elseif ($hna > 70 && $hna <= 84){
  return 'B';
}
elseif ($hna > 85 && $hna <= 100){
    return 'A';
}
else {
   return 'I';
}
}

function komentar($grade){
    switch ($grade) {
    case 'A' :
        return "Sangat Memuaskan";
        break;

    case 'B' :
        return "Memuaskan";
        break;
    
    case 'C' :
        return "Cukup";
        break;
    
    case 'D' :
        return "Kurang";
        break;

    case 'E' :
        return "Sangat Kurang";
        break;
    
    default:
        return "Tidak Ada";
}
}

?>