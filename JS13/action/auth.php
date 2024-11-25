<?php
include('../lib/session.php'); // Pastikan file ini memuat class dan instansiasi Session
include('../lib/connection.php');

// Inisialisasi Session
$session = new Session();

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'login') {
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if (empty($username) || empty($password)) {
        $session->setFlash('status', false);
        $session->setFlash('message', 'Username dan password tidak boleh kosong.');
        $session->commit();

        header('Location: ../login.php', false);
        exit;
    }

    include('../model/UserModel.php');
    $user = new UserModel();

    try {
        $data = $user->getSingleDataByKeyword('username', $username);

        if ($data && password_verify($password, $data['password'])) {
            $session->set('is_login', true);
            $session->set('username', $data['username']);
            $session->set('name', $data['nama']);
            $session->set('level', $data['level']);
            $session->commit();

            header('Location: ../index.php', false);
        } else {
            $session->setFlash('status', false);
            $session->setFlash('message', 'Username dan password salah.');
            $session->commit();

            header('Location: ../login.php', false);
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
        $session->setFlash('status', false);
        $session->setFlash('message', 'Terjadi kesalahan saat login. Silakan coba lagi.');
        $session->commit();

        header('Location: ../login.php', false);
    }
} else if ($act == 'logout') {
    $session->deleteAll();
    header('Location: ../login.php', false);
}
