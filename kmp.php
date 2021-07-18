<?php class KMP{

    function KMPSearch($p,$t){ 
    //$p = (string) pattern;
    //$t = (string) teks;

        $hasil = array();
        // str_split untuk memasukkan huruf menjadi array
        // Contoh: str_split(“Hello”); akan mengeluarkan menjadi “Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )”
        $pattern = str_split($p);
        $text    = str_split($t);

        // Berfungsi untuk menghitung table lompatan
        $lompat = $this->preKMP($pattern);
        
        // Perhitungan KMP
        $i = $j = 0;
        $num=0;
        while($j<count($text)){
            if(isset($pattern[$i]) && isset($lompat[$i])){
                while($i>-1 && $pattern[$i]!=$text[$j]){
                    // jika tidak cocok, maka lompat sesuai tabel lompatan
                    $i = $lompat[$i];
                }
            }else{
                $i = 0;
            }

            $i++;
            $j++;
            if($i>=count($pattern)){
                // jika cocok, tentukan posisi string yang cocok
                // kemudian lompat ke string berikutnya
                $hasil[$num++]=$j-count($pattern);
                if(isset($lompat[$i])){
                    $i = $lompat[$i];
                }
            }
        }
        return $hasil; // Output akan menghasilkan array yang memuat letak keberapa saja kata ditemukan
    }


// preKMP berfungsi untuk menentukan table lompatan
// Pada preKMP akan dilakukan input berupa pattern dan outputnya adalah array angka yang menentukan jumlah lompatan
  
    function preKMP($pattern){
        $i = 0;
        $j = $lompat[0] = -1;
        while($i<count($pattern)){
            while($j>-1 && $pattern[$i]!=$pattern[$j]){
                $j = $lompat[$j];
            }
            $i++;
            $j++;
            if(isset($pattern[$i])&&isset($pattern[$j])){
                if($pattern[$i]==$pattern[$j]){
                    $lompat[$i]=$lompat[$j];
                }else{
                    $lompat[$i]=$j;
                }
            }
        }
        return $lompat;
    }

}
