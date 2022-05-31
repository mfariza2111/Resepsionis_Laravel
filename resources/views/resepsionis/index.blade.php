<!DOCTYPE html>
<html>
 <head>
 <title>
 </title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap
/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="an
onymous">
 </head>
 <body>
 
 <div class="container">
 @if(session('sukses')) 
 <div class="alert alert-success" role="alert">
 {{session('sukses')}} 
 </div>
 @endif 
 <div class="row">
 <div class="col-12">
     <h1>DATA TAMU</h1>
 </div>

 <div class="col-12">
 <!-- Button trigger modal -->
 <br>
 <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
 Tambah Data 
</button>
 </div>
 <table class="table table-hover">
 <tr>
 <th>NAMA</th>
 <th>NIM</th>
 <th>ALAMAT</th>
 <th>UMUR</th>
 <th>JENIS KELAMIN</th>
 <th>STATUS</th>
 <th>WAKTU</th>
 <th>AKSI</th>
 </tr>
 @foreach($data_Resepsionis as $resepsionis)
 <tr>
 <td>{{$resepsionis->nama}}</td>
 <td>{{$resepsionis->nik}}</td> 
 <td>{{$resepsionis->alamat}}</td>
 <td>{{$resepsionis->umur}}</td>
 <td>{{$resepsionis->jeniskelamin}}</td>
 <td>{{$resepsionis->status}}</td>
 <td>{{$resepsionis->waktu}}</td> 
 <td>
     <a href="/resepsionis/{{$resepsionis->id}}/edit" class = "btn btn-warning btn-sm">Edit Data resepsionis</a>
     <a href="/resepsionis/delete/{{$resepsionis->id}}" class = "btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')" >Hapus Data resepsionis</a>
</td>
 </tr>
 @endforeach 
 </table>
 </div>
 </div>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="/resepsionis/create" method="POST">
 {{csrf_field()}} 
 <div class="form-group">
 <label for="exampleInputEmail1">Nama</label>
 <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Nama">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">NIk</label>
 <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="NIK">
 </div>
 <div class="form-group">
 <label for="exampleFormControlTextarea1">Alamat</label>
 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Umur</label>
 <input name="umur" type="int" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Umur">
 </div>
 <div class="form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
  <div class="col-md-6 col-sm-6 ">
    <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
        <input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" required>Laki-Laki
      </label>
      <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
        <input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
      </label>
    </div>
  </div>
</div>
<div class="form-group">
 <label for="exampleInputEmail1">status</label>
 <input name="status" type="int" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="status">
 </div>
 <div class="form-group">
 <label for="exampleInputEmail1">Waktu</label>
 <input name="waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Waktu">
 </div>
 
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="an
onymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.m
in.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="an
onymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.
js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="an
onymous"></script>
 </body>
 
</html>