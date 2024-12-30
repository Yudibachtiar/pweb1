<?php
// Dummy data untuk daftar pekerjaan
$jobs = [
["title" => "Software Engineer", "company" => "TechCorp", "location" => "Jakarta", "description" => "Mengembangkan dan Memelihara Aplikasi Perangkat Lunak"],
["title" => "Graphic Designer", "company" => "DesignPro",
"location" => "Bandung", "description" => "Membuat Konsep Visual dan Grafik Untuk Proyek"],
["title" => "Digital Marketing Specialist", "company" => "Marketify", "location" => "Surabaya", "description" => "Merencanakan dan Melaksanakan Kampanye Pemasaran Digital"]
];

// Jika formulir lamaran dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$jobTitle = htmlspecialchars($_POST['job_title']);

echo "<h3>Lamaran Terkirim</h3>";
echo "<p>Terima kasih, $name, telah melamar untuk posisi
$jobTitle. Kami akan menghubungi Anda melalui email: $email.</p>"; exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>Bursa Kerja</title>
<style>
body {
font-family: Arial, sans-serif; margin: 0;
padding: 0;
background-color:rgb(255, 255, 255);
color: #333;
}
.container {
width: 90%;
max-width: 1200px; margin: 20px auto;
}
.job-container { display: flex; flex-wrap: wrap; gap: 20px;
justify-content: space-between;
}
.job {
background-color: white; border: 1px solid #ddd; border-radius: 5px;
 
padding: 20px;
flex: 1 1 calc(33.333% - 20px);
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;
}
.job:hover {
transform: translateY(-5px);
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
.job-title {
font-size: 1.5em; font-weight: bold; color: #007bff; margin-bottom: 10px;
}
.job-company { font-size: 1em; color: #555;
margin-bottom: 5px;
}
.job-location {
font-size: 0.9em; color: #777;
}
form {
background-color: white; border: 1px solid #ddd; border-radius: 5px; padding: 20px;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
form label {
display: block; margin-bottom: 5px; font-weight: bold;
}
form input, form select, form button { padding: 10px;
margin-bottom: 15px; width: 100%;
border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;
}
form button {
background-color:rgb(40, 85, 167); color: white;
border: none;
 
cursor: pointer; font-size: 1em;
}
form button:hover {
background-color:rgb(40, 85, 167);
}
</style>
</head>
<body>
<div class="container">
<div class="job-container">
<?php foreach ($jobs as $job): ?>
<div class="job">
<div class="job-title"><?php echo
$job['title']; ?></div>
<div class="job-company">Perusahaan: <?php echo $job['company']; ?></div>
<div class="job-location">Lokasi: <?php echo
$job['location']; ?></div>
<p><?php echo $job['description']; ?></p>
</div>
<?php endforeach; ?>
</div>

<h2>Lamar Pekerjaan</h2>
<form method="POST">
<label for="name">Nama Anda</label>
<input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

<label for="email">Email Anda</label>
<input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

<label for="job_title">Posisi yang Dilamar</label>
<select id="job_title" name="job_title" required>
<?php foreach ($jobs as $job): ?>
<option value="<?php echo $job['title'];
?>"><?php echo $job['title']; ?></option>
<?php endforeach; ?>
</select>

<button type="submit">Kirim Lamaran</button>
</form>
</div>
</body>
</html>
 
