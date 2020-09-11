<?php

function perolehan_medali($data)
{
    if (count($data) == 0) {
        return "no data";
    }

    $arr = []; //menyimpan output dari perolehan mendali 
    $len = count($data);
    $history = [];
    $flag = 0;
    $pos = 0;

    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < count($history); $j++) {
            if ($data[$i][0] == $history[$j]) {
                $flag = 1; // jika flag bernilai satu maka berarti nagara pernah diinput
                $pos = $j; // $pos digunakan untuk menentukan index dari negara tersebut didalam $arr[]
                break;
            }
        }

        if ($flag == 1) {
            if ($data[$i][1] == "emas") {
                $arr[$pos]["emas"] += 1;
            }
            if ($data[$i][1] == "perak") {
                $arr[$pos]["perak"] += 1;
            }
            if ($data[$i][1] == "perunggu") {
                $arr[$pos]["perunggu"] += 1;
            }
        } else { // jika negara belum pernah diinput, buat array associative baru didalam variable $arr sesuai dengan jenis medali yang didapat
            $history[] = $data[$i][0]; //menambahkan negara tersebut kedalam $histori
            if ($data[$i][1] == "emas") {
                $arr[] = [
                    "negara" => $data[$i][0],
                    "emas" => 1,
                    "perak" => 0,
                    "perunggu" => 0
                ];
            }
            if ($data[$i][1] == "perak") {
                $arr[] = [
                    "negara" => $data[$i][0],
                    "emas" => 0,
                    "perak" => 1,
                    "perunggu" => 0
                ];
            }
            if ($data[$i][1] == "perunggu") {
                $arr[] = [
                    "negara" => $data[$i][0],
                    "emas" => 0,
                    "perak" => 0,
                    "perunggu" => 1
                ];
            }
        }
    }
    return $arr;
}

$data = array(
    array('Indonesia', 'emas'),
    array('India', 'perak'),
    array('Korea selatan', 'perak'),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas')
);

print_r(perolehan_medali($data));
print_r(perolehan_medali([]));
