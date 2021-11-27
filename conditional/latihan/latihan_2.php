<?php
$ipk = 3.51;

if ($ipk > 0 && $ipk < 2 ) {
    echo "Grade E<br>";
    echo "Maaf Anda Harus Mengulang";
} else if ($ipk >= 2 && $ipk <= 2.6) {
    echo "Grade D<br>";
    echo "Maaf Anda Harus memperbaiki mata kuliah";
} else if ($ipk > 2.6 && $ipk <= 3) {
    echo "Grade C<br>";
    echo "Mau Memperbaiki boleh tidak juga";
} else if ($ipk > 3 && $ipk <= 3.5) {
    echo "Grade B<br>";
    echo "Mata Kuliah Anda Baik";
} else if ($ipk > 3.5 && $ipk <= 4) {
    echo "Grade A<br>";
    echo "Mata Kuliah anda Super";
} else {
    echo "Sistem Error";
}