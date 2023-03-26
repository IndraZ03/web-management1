<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contoh Modal dengan Input untuk Mengisi Sel Tabel</title>
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Andi</td>
        <td id="nilai-1"></td>
        <td>
          <!-- Button untuk membuka modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nilaiModal" data-nilai="1">
            Isi Nilai
          </button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Budi</td>
        <td id="nilai-2"></td>
        <td>
          <!-- Button untuk membuka modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nilaiModal" data-nilai="2">
            Isi Nilai
          </button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Cici</td>
        <td id="nilai-3"></td>
        <td>
          <!-- Button untuk membuka modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nilaiModal" data-nilai="3">
            Isi Nilai
          </button>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="nilaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Isi Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form untuk input nilai -->
          <form>
            <div class="form-group">
              <label for="nilai-input">Nilai:</label>
              <input type="number" class="form-control" id="nilai-input">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" onclick="simpanNilai()">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Load Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>



