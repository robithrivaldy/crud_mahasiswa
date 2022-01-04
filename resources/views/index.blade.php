<!DOCTYPE html>
<html>

<head>
    <title>CRUD MAHASISWA</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD MAHASISWA</h1>
                <a href="{{ url('create') }}" class="btn btn-primary">+ Create Data</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data as $item)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ url('show/' . $item->id) }}" class="btn btn-warning"> Edit</a>
                                    <a href="{{ url('destroy/' . $item->id) }}" class="btn btn-danger"> Delete</a>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <th colspan="5">
                                    <center>Data is Empty</center>
                                </th>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
