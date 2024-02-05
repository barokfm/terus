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
</body>
<div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
    <h1>Formulir Data Inventaris</h1>
</div>
<div class="container bg-body-tertiary py-2 rounded shadow mb-3">
    <div class="mb-3">
        <label for="text" class="form-label">Kursi Vernekel<small class="text-danger">*</small></label>
        <input type="number" class="form-control" id="name" placeholder="Persediaan Kursi 150 Buah" required maxlength="150">
    </div>
    <div class="mb-3">
        <label for="text1" class="form-label">Sound System<small class="text-danger">*</small></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Ya
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Tidak
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="text2" class="form-label">Area Kantor Dan Halaman<small class="text-danger">*</small></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1"
                checked>
            <label class="form-check-label" for="exampleRadios1">
                Ya
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Tidak
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Air Conditioner (AC)<small class="text-danger">*</small></label>
        <input type="number" max="8" class="form-control" id="name" placeholder="Persediaan AC 8 Unit" required>
    </div>


    <div class="container d-flex justify-content-end gap-3">
        <a href="#" class="btn btn-primary pb-2 px-5">Submit</a>
        <a href="#" class="btn btn-danger pb-2 px-5">Cancel</a>
    </div>
</div>

</html>

