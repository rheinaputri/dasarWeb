<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = anti_injection($koneksi, $_POST['id']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', 'Jabatan berhasil diubah');
        } else {
            pesan('danger', 'Jabatan gagal diubah karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
        $user_id = anti_injection($koneksi, $_POST['id']);
        $nama = anti_injection($koneksi, $_POST['nama']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat = anti_injection($koneksi, $_POST['alamat']);
        $no_telp = anti_injection($koneksi, $_POST['no_telp']);
        $username = anti_injection($koneksi, $_POST['username']);
        $query_anggota = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp', jabatan_id = '$jabatan' WHERE user_id = '$user_id'";
        if (mysqli_query($koneksi, $query_anggota)) {
            if (!empty($_POST['password'])) {
                $password = $_POST['password']; // Generate random salt 
                $salt = bin2hex(random_bytes(16)); // Gabungkan salt dengan password 
                $combined_password = $salt . $password; 
                // Hash password dengan salt 
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
                $query_user = "UPDATE user SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}