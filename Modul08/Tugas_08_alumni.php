<?php
$action = $_GET['action'];
$file = 'alumni.json';

if (!file_exists($file)) { file_put_contents($file, '[]');
}

$data = json_decode(file_get_contents($file), true);

if ($action == 'read') { echo json_encode($data);
} elseif ($action == 'create') {
$new_alumni = [
"id" => time(), // Menggunakan timestamp sebagai ID unik "nama" => $_POST['nama'],
"tahun_lulus" => $_POST['tahun_lulus'], "pekerjaan" => $_POST['pekerjaan'], "kontak" => $_POST['kontak']
];
$data[] = $new_alumni; file_put_contents($file, json_encode($data)); echo json_encode(["status" => "success"]);
} elseif ($action == 'delete') {
$id = $_POST['id'];
$data = array_filter($data, function ($alumni) use ($id) { return $alumni['id'] != $id;
});
file_put_contents($file, json_encode($data)); echo json_encode(["status" => "success"]);
}
?>