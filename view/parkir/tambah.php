<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member Baru</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f7f1e3;
            color: #4b3d3d;
            margin: 0;
            padding: 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-map.png');
            background-size: cover;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #6b4f4f;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            font-family: 'Times New Roman', serif;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #d1c6c6;
            border-radius: 10px;
            background-color: #fff8f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        form:hover {
            transform: scale(1.02);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1.1em;
            color: #5a3e3e;
        }

        input[type="number"],
        input[type="date"],
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #d1c6c6;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: #fefefe;
        }

        input[type="number"]:focus,
        input[type="date"]:focus,
        input[type="text"]:focus {
            border-color: #6b4f4f;
            box-shadow: 0 0 5px rgba(107, 79, 79, 0.5);
            outline: none;
        }

        button {
            background-color: #6b4f4f;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #8b6b6b;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Tambah Kelas Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">Id Parkir</label>
        <input type="number" name="id_parkir" required>
        <br>
        <label for="">Tanggal Parkir</label>
        <input type="date" name="tanggal_parkir" required>
        <br>
        <label for="">Harga Parkir</label>
        <input type="text" name="harga_parkir" required>
        <br>
        <label for="">Alamat Parkir</label>
        <input type="text" name="alamat_parkir" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>