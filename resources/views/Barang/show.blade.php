<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Panin Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama_Barang</label>
                            <input type="text" class="form-control @error('Nama_Barang') is-invalid @enderror" name="Nama_Barang" value="{{ old('Nama_Barang', $barang->Nama_Barang) }}" placeholder="Masukkan Nama_Barang">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah_Barang</label>
                            <input type="number" class="form-control @error('Jumlah_Barang') is-invalid @enderror" name="Jumlah_Barang" value="{{ old('Jumlah_Barang', $barang->Jumlah_Barang) }}" placeholder="Masukkan Jumlah_Barang">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>