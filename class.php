<?php 
class pasien {
    public $nama_pasien;
    public $tmp_lahir;
    public $tgl_periksa;
    public $email;
    public $jk;
    public $ket;

    function __construct($nama_pasien ,$tmp_lahir, $tgl_periksa, $email, $gender, $jk, $ket){
        $this -> namapaseien = $nama_pasien ;
        $this -> tmplahir = $tmp_lahir;
        $this -> tglperiksa = $tgl_periksa;
        $this -> email = $email;
        $this -> jk = $jk;
        $this -> ket = $ket;
    }
}

trait bmi {
    public $bb;
    public $tb;
    
    public function __construct($bb, $tb){
        $this -> bb = $bb;
        $this -> tb = $tb;
    }

    public function nilai(){
        return number_format((float)$this -> bb / ($this->tb/100) ** 2, 1, '.' , '');
    }

    public function status($ket){
        if($ket < 18.5) {
            return "Kekurangan berat badan";
        }
        elseif ($ket >= 18.5 && $ket <= 23.9){
            return "Normal";
        }
        elseif ($ket >= 24 && $ket <= 26.9){
            return "Kelebihan Bobot";
        }
        elseif ($ket >= 27 && $ket <= 29.9){
            return "Obesitas 1";
        }
        elseif ($ket > 30){
            return  "Obesitas 2";
        }
    }
}

class bmiPasien extends pasien  {
    use bmi;
    public $bmi;
    function __construct ($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, $ket){
        parent :: __construct ($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, $ket);
        $this -> bb = $bb;
        $this -> tb = $tb;
        $this -> bmi = $this -> nilai();
    }
}
?>