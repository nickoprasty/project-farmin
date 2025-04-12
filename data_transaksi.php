<?php 
include 'database.php';

$sql = "
    SELECT p.nama_pupuk, t.jumlah 
    FROM transaksi_pupuk t
    JOIN pupuk p ON t.id_pupuk = p.id_pupuk
";

$res = $db->query($sql);
$data = [];

if (!$res) {
    echo json_encode(["error" => $db->error]);
    exit;
}

while($row = $res->fetch_assoc()){
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
