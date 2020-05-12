<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <a href="{{url('mhs/create')}}" class="btn btn-primary">Add</a>
     <br/><br/>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Kelas</th>
        <th>Program Studi</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($mahasiswa as $mhs)
      <tr>
        <td>{{$mhs['id']}}</td>
        <td>{{$mhs['npm']}}</td>
        <td>{{$mhs['nama']}}</td>
        <td>{{$mhs['kelas']}}</td>
        <td>{{$mhs['prodi']}}</td>
        
        <td><a href="{{action('MahasiswaController@edit', $mhs['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MahasiswaController@destroy', $mhs['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
