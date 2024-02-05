<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakorwil | Formulir Peminjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Formulir Data Peminjam</h1>
    </div>
    <div class="container bg-body-tertiary py-2 rounded shadow mb-3">
        <form action="">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="nama_peminjam" placeholder="John Doe" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" required placeholder="john@example.com">
            </div>
            <div class="mb-3">
                <label for="no-telp" class="form-label">No. Telepon<small class="text-danger">*</small></label>
                <input type="number" class="form-control" id="no_hp" required>
            </div>
            <div class="mb-3">
                <label for="no-ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="no-ktp" class="form-control" id="no_ktp" required>
            </div>
            <label for="photo" class="form-label">Photo KTP<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input class="form-control" type="file" name="foto_ktp" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="agenda" class="form-label">Agenda<small class="text-danger">*</small></label>
                <textarea class="form-control" name="agenda" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tgl_acara" class="form-label">Tgl. Acara<small class="text-danger">*</small></label>
                <input type="date" class="form-control text-secondary" name="tgl_acara" required>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
                <input type="time" class="form-control text-secondary" name="waktu" required>
            </div>
            <div class="container d-flex justify-content-end gap-3">
                <button type="submit" class="btn btn-primary pb-2 px-5">Lanjut</button>
                <a href="#" class="btn btn-danger pb-2 px-5">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
