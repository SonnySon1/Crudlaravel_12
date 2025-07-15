<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mb-5">LIST DATA SISWA</h1>
        <a href="/create" class="btn btn-primary">Create Siswa</a>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Clas</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td><img width="50" src="{{ asset('storage/'.$user->photo) }}" alt=""></td>
                            <td>{{ $user->clas->name }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nisn }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="">Detail</a>
                                    <a class="btn btn-warning" href="/edit/{{ $user->id }}">Edit</a>
                                    <a class="btn btn-danger" href="/delete/{{ $user->id }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>