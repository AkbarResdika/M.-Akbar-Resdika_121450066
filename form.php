<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Themed Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="background">
        <div class="form-container">
            <h1>Formulir Registrasi</h1>
            
            <form id="registrationForm" method="POST" action="process.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required minlength="3" placeholder="Masukkan nama lengkap">
                    <div class="error" id="nameError"></div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="example@gmail.com">
                    <div class="error" id="emailError"></div>
                </div>

                <div class="form-group">
                    <label for="age">Usia</label>
                    <input type="number" id="age" name="age" min="10" max="100" required>
                    <div class="error" id="ageError"></div>
                </div>

                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender" required>
                        <option value="">Pilih</option>
                        <option value="Male">Laki-laki</option>
                        <option value="Female">Perempuan</option>
                    </select>
                    <div class="error" id="genderError"></div>
                </div>

                <div class="form-group">
                    <label for="textfile">Upload Berkas (.txt)</label>
                    <input type="file" id="textfile" name="textfile" accept=".txt" required>
                    <div class="error" id="fileError"></div>
                </div>

                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>
