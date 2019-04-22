<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="container" style="margin-top: 50px">
  <div class="container">
    <h3 style=" margin-left: 10%">Edit Data</h3>
    <div class="row">
          <form action="/perpus/{{$buku->id}}/update" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                  <!-- form -->
                    <div class="form-group row" style="margin-left: 10%">

                    <div class="col-sm-12"  style="margin-top: 5%">
                      <input name="judul" required="required" type="text" class="form-control" id="judul" placeholder="Judul Buku" value="{{$buku->judul}}">
                    </div>

                    <div class="col-sm-12" style="margin-top: 5%">
                      <input name="penerbit" required="required" type="text" class="form-control" id="penerbit" placeholder="Penerbit" value="{{$buku->penerbit}}">
                    </div>

                    <div class="col-sm-12" style="margin-top: 5%">
                      <input name="tahun_terbit" required="required" type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit" value="{{$buku->tahun_terbit}}">
                    </div>

                    <div class="col-sm-12" style="margin-top: 5%">
                      <input name="pengarang" required="required" type="text" class="form-control" id="pengarang" placeholder="Pengarang" value="{{$buku->pengarang}}">
                    </div>
                </div>
              <!-- endform -->
                </div>
                <div class="btn btn-warning btn-sm float-right" style="margin-right: 2%">
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
          </div>
</body>
</html>