<!-- Nama    : I Putu Yudia Artana -->
<!-- NIM     : 21101095 -->

<?php
    function konversiCkeF($suhu){
        $hasilCkF = ((9/5) * $suhu + 32);
        return $hasilCkF;
    }
    function konversiFkeC($suhu){
        $hasilFkC = (5/9) * ($suhu - 32);
        return $hasilFkC;
    }


if(isset($_POST['submit'])){
    $suhu=$_POST['suhu'];
    $konversi=$_POST['konversi'];
    $hasilFkC = konversiFkeC($suhu);
    $hasilCkF = konversiCkeF($suhu);
    if($konversi=="CkeF"){
        echo "Hasil Konversi: <br>
        &degF = (9/5) x &degC + 32 <br>
        &degF = (9/5) x $suhu&deg + 32 <br>
        &degF = $hasilCkF&deg";
    }if($konversi=="FkeC"){
        echo "Hasil Konversi: <br>
        &degC = (5/9) x (&degF - 32) <br>
        &degC = (5/9) x ($suhu&deg - 32) <br>
        &degC = $hasilFkC&deg";
    }if(empty($konversi)){
        echo "Mohon Pilih Konversi !";
    }
}

?>