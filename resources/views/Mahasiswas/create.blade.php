<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tutorial Laravel 5.7</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Data Mahasiswa</h2><br/>
      <form method="post" action="{{url('mhs')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">NPM Mahasiswa:</label>
            <input type="text" class="form-control" name="npm">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Nama Mahasiswa:</label>
              <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Kelas Mahasiswa:</label>
                <select name="kelas">
                  <option></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>  
                  <option value="D">D</option> 
                  <option value="E">E</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Program Studi:</label>
                <select name="prodi">
                  <option></option>
                  <option value="Sipil">Sipil</option>
                  <option value="Industri">Industri</option>
                  <option value="Informatika">Informatika</option>   
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
