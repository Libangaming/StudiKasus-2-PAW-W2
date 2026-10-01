<?php
    $nama = "";
    $email = "";
    $jenis_kelamin = "";
    $alamat = "";
    $telepon = "";

    // buat ngecek 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengguna</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Form Data Pengguna</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Nama </label>
                            <input
                                type="text"
                                name="nama"
                                id="nama"
                                class="form-control"
                                placeholder="Masukkan nama"
                                required
                            >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                required
                            >
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Jenis Kelamin </label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="jenis_kelamin"
                                        id="laki"
                                        value="Laki-laki"
                                        required
                                    >
                                    <label class="form-check-label" for="laki" > Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="jenis_kelamin"
                                        id="perempuan"
                                        value="Perempuan"
                                    >
                                    <label class="form-check-label" for="perempuan"> Perempuan </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label"> Alamat </label>
                            <textarea
                                name="alamat"
                                id="alamat"
                                class="form-control"
                                rows="3"
                                placeholder="Masukkan alamat"
                                required
                            ></textarea>
                        </div>
                        <div class="mb-3">

                            <label for="telepon" class="form-label"> Nomor Telepon
                            </label>
                            <input
                                type="tel"
                                name="telepon"
                                id="telepon"
                                class="form-control"
                                placeholder="Contoh: 081234567890"
                                required
                            >
                        </div>
                        <input
                            type="hidden"
                            name="status"
                            value="Pengguna"
                        >
                        <button type="submit" class="btn btn-primary w-100"> Submit </button>
                    </form>
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>

                        <div class="alert alert-success mt-4">

                            <h5 class="mb-3">
                                Data Berhasil Dikirim!
                            </h5>

                            <p class="mb-1">
                                <strong>Nama:</strong>
                                <?= htmlspecialchars($nama); ?>
                            </p>

                            <p class="mb-1">
                                <strong>Email:</strong>
                                <?= htmlspecialchars($email); ?>
                            </p>

                            <p class="mb-1">
                                <strong>Jenis Kelamin:</strong>
                                <?= htmlspecialchars($jenis_kelamin); ?>
                            </p>

                            <p class="mb-1">
                                <strong>Alamat:</strong>
                                <?= htmlspecialchars($alamat); ?>
                            </p>

                            <p class="mb-1">
                                <strong>Nomor Telepon:</strong>
                                <?= htmlspecialchars($telepon); ?>
                            </p>

                            <p class="mb-0">
                                <strong>Status:</strong>
                                <?= htmlspecialchars($_POST["status"]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>