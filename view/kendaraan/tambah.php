<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas Baru</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather', serif;
            background-color: #f4f1e1;
            color: #4e4e4e;
            line-height: 1.6;
            padding: 50px 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-map.png');
            background-attachment: fixed;
        }

        h1 {
            text-align: center;
            color: #3e2c1c;
            font-size: 3em;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-top: 8px solid #5f4b3a;
        }

        label {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #3e2c1c;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #f9f3e2;
            color: #4e4e4e;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #5f4b3a;
            background-color: #f2e1c3;
        }

        button {
            display: inline-block;
            background-color: #5f4b3a;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #3e2c1c;
            transform: translateY(-3px);
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #5f4b3a;
            font-size: 1rem;
        }

        .footer a {
            text-decoration: none;
            color: #5f4b3a;
            font-weight: bold;
        }

        .footer a:hover {
            color: #3e2c1c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            form {
                width: 80%;
            }
        }

    </style>
</head>
<body>
    <h1>Tambah Kelas Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="id_kendaraan">Id Kendaraan</label>
        <input type="number" name="id_kendaraan" id="id_kendaraan" required>

        <label for="no_plat">No Plat</label>
        <input type="text" name="no_plat" id="no_plat" required>

        <label for="id_parkir">Id Parkir</label>
        <input type="number" name="id_parkir" id="id_parkir" required>

        <label for="jenis_kendaraan">Jenis Kendaraan</label>
        <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" required>

        <button type="submit">Simpan</button>
    </form>

    <div class="footer">
        <p>&copy; 2025 Your Company. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</body>
</html>
