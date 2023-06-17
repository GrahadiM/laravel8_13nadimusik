<?php

use Illuminate\Support\Facades\Auth;

// if(!function_exists('getRole')) {
//     function getRole($id) {
//         $dt = [
//             1 => ['role' => 1, 'role_kode' => 'adm', 'role_name' => 'Administrator'],
//             2 => ['role' => 2, 'role_kode' => 'ptv', 'role_name' => 'Perguruan Tinggi'],
//             3 => ['role' => 3, 'role_kode' => 'rev', 'role_name' => 'Reviewer'],
//             4 => ['role' => 4, 'role_kode' => 'dos', 'role_name' => 'Dosen'],
//         ];
//         return $id == 'all' ? $dt : $dt[$id];
//     }
// }

// if(!function_exists('getAvailableField')) {
//     function getAvailableField($id) {
//         $dt = [
//             1 => ['nama' => 'Text', 'type' => 'text'],
//             2 => ['nama' => 'Angka', 'type' => 'number'],
//             3 => ['nama' => 'File', 'type' => 'file'],
//         ];
//         return $id == 'all' ? $dt : $dt[$id];
//     }
// }

if(!function_exists('getRole')) {
    function getRole($id) {
        $dt = [
            'administrator' => ['role' => 'administrator', 'role_kode' => 1],
            'admin' => ['role' => 'admin', 'role_kode' => 2],
        ];
        return $id == 'all' ? $dt : $dt[$id];
    }
}

if(!function_exists('getStatus')) {
    function getStatus($id) {
        $dt = [
            1 => ['status' => 1, 'status_name' => 'Tidak Aktif'],
            2 => ['status' => 2, 'status_name' => 'Aktif'],
        ];
        return $id == 'all' ? $dt : $dt[$id];
    }
}
