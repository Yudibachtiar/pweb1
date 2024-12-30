<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>Tracer Alumni</title>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery- 3.6.0.min.js"></script>
</head>
<body>
<div class="container">
<header>
<h1>Tracer Alumni</h1>
<p>Selamat datang di aplikasi tracer alumni untuk mengetahui jejak para alumni.</p>
</header>

<section class="form-container">
<form id="form-alumni">
<input type="text" id="nama" placeholder="Nama"
required>
<input type="number" id="tahun_lulus"
placeholder="Tahun Lulus" required>
<input type="text" id="pekerjaan" placeholder="Pekerjaan" required>
<input type="text" id="kontak" placeholder="Kontak" required>
<button type="submit">Tambah Alumni</button>
</form>
</section>

<section class="table-container">
<table id="table-alumni">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Tahun Lulus</th>
<th>Pekerjaan</th>
<th>Kontak</th>
<th>Aksi</th>
</tr>
</thead>
 
<tbody></tbody>
</table>
</section>
</div>

<script>
function loadAlumni() {
$.get('alumni.php?action=read', function(data) { let rows = ''; JSON.parse(data).forEach(function(alumni) {
rows += `
<tr>
<td>${alumni.id}</td>
<td>${alumni.nama}</td>
<td>${alumni.tahun_lulus}</td>
<td>${alumni.pekerjaan}</td>
<td>${alumni.kontak}</td>
<td>
<button class="delete" data-
id="${alumni.id}">Hapus</button>
</td>
</tr>`;
});
$('#table-alumni tbody').html(rows);
});
}

$(document).ready(function() { loadAlumni();

$('#form-alumni').on('submit', function(e) { e.preventDefault();
$.post('alumni.php?action=create', { nama: $('#nama').val(),
tahun_lulus: $('#tahun_lulus').val(), pekerjaan: $('#pekerjaan').val(), kontak: $('#kontak').val()
}, function() { loadAlumni();
$('#form-alumni')[0].reset();
});
});

$(document).on('click', '.delete', function() { const id = $(this).data('id');
$.post('alumni.php?action=delete', { id },
function() {
loadAlumni();
 
