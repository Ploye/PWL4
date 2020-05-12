<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tutorial Laravel 5.7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Mahasiswa</h2><br/>
      <form method="post" action="{{action('MahasiswaController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">NPM Mahasiswa:</label>
            <input type="text" class="form-control" name="npm" value="{{$mahasiswa->npm}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Nama Mahasiswa:</label>
              <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Kelas Mahasiswa:</label>
                <select name="kelas">
                  <option></option>
                  <option value="A" @if($mahasiswa->kelas=="A") selected @endif>A</option>
                  <option value="B" @if($mahasiswa->kelas=="B") selected @endif>B</option>
                  <option value="C" @if($mahasiswa->kelas=="C") selected @endif>C</option>  
                  <option value="D" @if($mahasiswa->kelas=="D") selected @endif>D</option> 
                  <option value="E" @if($mahasiswa->kelas=="E") selected @endif>E</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Program Studi:</label>
                <select name="prodi">
                  <option></option>
                  <option value="Sipil" @if($mahasiswa->prodi=="Sipil") selected @endif>Sipil</option>
                  <option value="Industri" @if($mahasiswa->prodi=="Industri") selected @endif>Industri</option>
                  <option value="Informatika" @if($mahasiswa->prodi=="Informatika") selected @endif>Informatika</option>   
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
