<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create - Panin Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('Barang.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama_Barang</label>
                                <input type="text" class="form-control @error('Nama_Barang') is-invalid @enderror" name="Nama_Barang" value="{{ old('Nama_Barang') }}" placeholder="Masukkan Nama_Barang">
                            
                                <!-- error message untuk title -->
                                @error('Nama_Barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Barang</label>
                                <input type="number" class="form-control @error('Jumlah_Barang') is-invalid @enderror" name="Jumlah_Barang" value="{{ old('Jumlah_Barang') }}" placeholder="Masukkan Jumlah Barang">
                            
                                <!-- error message untuk title -->
                                @error('Jumlah_Barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--<div class="form-group">
                                <label class="font-weight-bold">Jumlah_Barang</label>
                                <textarea class="form-control @error('Jumlah_Barang') is-invalid @enderror" name="Jumlah_Barang" rows="5" placeholder="Masukkan Jumlah_Barang">{{ old('Jumlah_Barang') }}</textarea>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>-->

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>