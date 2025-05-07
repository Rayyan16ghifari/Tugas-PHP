<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #555;
        }
        input[type=text],
        input[type=email],
        input[type=number] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type=submit] {
            margin-top: 20px;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .hasil {
            margin-top: 25px;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
        }
        .status {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Nilai Ujian</h2>

    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Nilai Ujian:</label>
        <input type="number" name="nilai" min="0" max="100" required>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama  = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $nilai = (int) $_POST['nilai'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";

        if ($nilai > 70) {
            echo "<p class='status' style='color: green;'>Status: Lulus 🎉</p>";
        } else {
            echo "<p class='status' style='color: red;'>Status: Remedial 📖</p>";
        }
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
