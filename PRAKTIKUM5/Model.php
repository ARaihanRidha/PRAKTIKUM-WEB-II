<?php
require 'koneksi.php';

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($table, $data) {
    global $connect;
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_map('htmlspecialchars', array_values($data)));
    $query = "INSERT INTO $table ($columns) VALUES ('$values')";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function hapus($table, $id_column, $id) {
    global $connect;
    $query = "DELETE FROM $table WHERE $id_column = $id";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function ubah($table, $data, $id_column, $id_value) {
    global $connect;
    $set_clause = [];
    foreach ($data as $column => $value) {
        $set_clause[] = "$column = '" . htmlspecialchars($value) . "'";
    }
    $set_clause = implode(", ", $set_clause);
    $query = "UPDATE $table SET $set_clause WHERE $id_column = '$id_value'";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}
?>
