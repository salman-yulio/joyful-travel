<?php

$conn = mysqli_connect("localhost", "root", "", "travel1");


function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[]=$row;
    }
    return $rows;
};

function create ($data){
    global $conn;
        //ambil data dari tiap elemen yang ada di form
        $nama=htmlspecialchars($data["nama"]);
        $jml=htmlspecialchars($data["jml"]);
        $cekin=htmlspecialchars($data["cekin"]);
        $no=htmlspecialchars($data["no"]);
    
        //query insert data
        $query = "INSERT INTO datapengunjung
                    VALUES ('','$nama','$jml','$cekin','$no','','')";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM datapengunjung WHERE id = $id");
    mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    //ambil data dari tiap elemen yang ada di form
    $id=$data["id"];
    $cekin=htmlspecialchars($data["cekin"]);
    
    //query update data
    $query = "UPDATE datapengunjung SET
            cekin = '$cekin'
            WHERE id=$id
            ";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function temukan($search){
    $query = "SELECT * FROM datapengunjung WHERE
    nama LIKE '%$search%'
    ";
    return query($query);
}

// function authenticate_user($username, $password) {
//     // Ganti dengan koneksi database Anda
//     $conn = new mysqli('localhost', 'root', '', 'travel1');

//     if ($conn->connect_error) {
//         die("Koneksi gagal: " . $conn->connect_error);
//     }

//     // Query pengguna
//     $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
//     $stmt->bind_param("s", $username);
//     $stmt->execute();
//     $stmt->bind_result($hashed_password);
//     $stmt->fetch();

//         // Debugging: Menampilkan hasil query
//         if ($hashed_password) {
//             echo "Password di database: $hashed_password<br>";
//             echo "Password yang dimasukkan: $password<br>";
//         } else {
//             echo "Pengguna tidak ditemukan.<br>";
//         }

//     if ($hashed_password && password_verify($password, $hashed_password)) {
//         return true;
//     }
//     return false;
// }

// function authenticate_user($username, $password) {
//     // Koneksi ke database
//     $conn = new mysqli('localhost', 'root', '', 'travel1');

//     if ($conn->connect_error) {
//         die("Koneksi gagal: " . $conn->connect_error);
//     }

//     // Query untuk memeriksa username dan password
//     $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
//     $stmt->bind_param("s", $username);
//     $stmt->execute();
//     $stmt->bind_result($stored_password);
//     $stmt->fetch();

//     // Debug: Menampilkan hasil query
//     if ($stored_password) {
//         echo "Password di database: $stored_password<br>";
//         echo "Password yang dimasukkan: $password<br>";
//     } else {
//         echo "Pengguna tidak ditemukan.<br>";
//     }

//     // Bandingkan password langsung (tanpa enkripsi)
//     if ($stored_password && $password === $stored_password) {
//         return true;
//     }
//     return false;
// }

function authenticate_user($username, $password) {
    $conn = new mysqli('localhost', 'root', '', 'travel1');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mendapatkan password dan role
    $stmt = $conn->prepare("SELECT password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password, $role);
    $stmt->fetch();

    // Verifikasi password (gunakan strcmp jika password tidak terenkripsi)
    if ($hashed_password && $password === $hashed_password) {
        return ['username' => $username, 'role' => $role];
    }
    return false;
}


?>