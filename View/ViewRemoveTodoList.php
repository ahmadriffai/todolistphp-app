<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus Todo";

    $pilihan = input("Nomor ( x untuk batal )");

    if ($pilihan == "x"){
        echo "Batal Menghapus Todo" . PHP_EOL;
    }else{
        $result = removeTodoList($pilihan); // True or False

        if ($result){
            echo "Sukses Menghapus Todo nomor $pilihan" . PHP_EOL;
        }else{
            echo "Gagal Menghapus Todo nomor $pilihan" . PHP_EOL;
        }
    }

}