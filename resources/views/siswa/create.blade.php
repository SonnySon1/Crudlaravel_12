<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href       ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
          rel        ="stylesheet" 
          integrity  ="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
          crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mb-5">TAMBAH SISWA</h1>
        <a href="/" class="btn btn-warning mb-3">Kembali</a>
        <div>
            <form action="/create/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="clas_id" class="form-label">Class</label>
                    <select name="clas_id" class="form-control" id="">
                        <option value="">--Select Class--</option>
                        @foreach ($clases as $clas)
                            <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                        @endforeach
                    </select>
                    @error('photo')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input name="photo" type="file" class="form-control" id="photo">
                    @error('photo')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                     @error('name')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">Nisn</label>
                    <input name="nisn" type="number" class="form-control" id="nisn">
                     @error('nisn')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat">
                     @error('alamat')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="email">
                     @error('email')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                     @error('password')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_handphone" class="form-label">No Handphone</label>
                    <input name="no_handphone" type="tel" class="form-control" id="password">
                     @error('no_handphone')
                        <small class="text-danger"><i>{{ $message }}</i></small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>