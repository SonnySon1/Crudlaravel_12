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
        <h1 class="mb-5">CRUD SEDERHANA SISWA</h1>
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
                    <tr>
                        <th scope="row">1</th>
                        <td><img width="50" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAlAMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQIEBQYDB//EADUQAAICAAMFBAgFBQAAAAAAAAABAgMEESEFEjFBUSJhcsETIzNCcYGhsWKRktHwFCQyUoL/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABURAQEAAAAAAAAAAAAAAAAAAAAB/9oADAMBAAIRAxEAPwD9cABUAAAAAAAAAAAAAAAACMrMWBGMwRgAQAfUAAAAAAAFI2opuTSS5t5GpjsbHDZwjlO3pyXxOPffZfLesk33cl8gO3PH4WHG1Pw6mK2lhX70l8Ys4QA9HVfVdpXZGT6Z6/kfQ8x5G9hdpWVNRvbsh195fuB2Q2YwnGyCnCSlF8GgwBARgGyMMjAEIANgAAAAANfHYn+mocl/nLSJsnC2nb6XFyj7sOyvMDVbbbbbbfFsgBQAAAAMDb2dinRZuTfqpvXufU7TPMceJ3cBb6bCQk3nJdl/Ig2CZ8i5mIBkYZiAbQMfmANsAAAABVxR5mxuVk5PnJs9Meati4Wzi+UmvqIMAAUAAAI2GyADqbGl6q2P4kco6uxl6myXWWX8/MUb+ZGGyNkEbMWGYtgXMGOYA3gAAAAA421qXXid9Ls2a59/M7J8sVQsTS65ac4vowPOgysrnVN12RykuJiUCNgjAEBGAO9hKnRh4VvitZfE0Nm4Vykr7E1BPsp+8/2Oo2QGYsNmLYBmLYbIwGZDEoHRAAAAAAUwsshVDeskox6sD54rC14qKU+zJcJLijjYjBX0Nvd34/7RN2/a0Fmqa3LvloiU7Vg/bQcH1jqgOS2R6cdDvO/BXaynVLx8fqYtYGGv9uv0gcWuudssq4Sl8EdDC7NyaniH/wALzPvZtDC1x3Yy3u6C0NV7Wlv+yW503tQOm9NFw6dDFmvTjqLskpuMuUZH3YBsxb1DMWAZi3qGzFsCNgma6gDqgAACnwxeIWGolY+PCK6sD547GRwsckt6x8I58O9nFutndPfsk5S5N8vgYznKc3ObzlJ5tmJQZAQATToGRgCMNmIB6o3MJj51NQtbnD6xNNsxfeB6JSUoqUXmnqmRs5OzsS4TVM32J8O5nUbIJmYNlzMWwAJmAOwAAKcTa13pMT6NPsw0y7ztNpavgtTzNkvSTlN8ZNsDFkYIUCAARjMjI2AZA2YtgGYspiAfcdvDXemw8J8+Evijhs39lT7NkHyaa/nyIOgyNkIwGYGYA7IBGBhe/UW+CX2PNJ6I9Jd7C3wS+x5oAwCMoEDMWAzICNgDFhsgBvIxbDIwI2bmyX66xfg8zSz6m5sr29ng8wOmyMMEEKQAdtmJQB8r/YW+CX2PN8kABGRgFEIABGYsADFkzIAIYtgARm7sr21ng8wAOlzRACCoAAf/2Q==" alt=""></td>
                        <td>XII RPL 2</td>
                        <td>Soni Sudrajat</td>
                        <td>12322223</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success" href="">Detail</a>
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-danger" href="">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>