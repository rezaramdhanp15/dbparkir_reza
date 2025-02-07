<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kendaraan</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather', serif;
            background-color: #f5e6c9;
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
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 12px 25px;
            background-color: #5f4b3a;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 20px;
            display: inline-block;
            letter-spacing: 1px;
        }

        a:hover {
            background-color: #3e2c1c;
            transform: translateY(-3px);
        }

        .table-container {
            max-width: 95%;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            border-top: 8px solid #5f4b3a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
        }

        th, td {
            padding: 15px 25px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5f4b3a;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f3e2;
        }

        tr:hover {
            background-color: #e5d6b4;
        }

        td {
            color: #555;
        }

        .actions a {
            padding: 10px 18px;
            background-color: #9b7d63;
            color: #fff;
            border-radius: 5px;
            margin-right: 12px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .actions a:hover {
            background-color: #7a5a42;
            transform: translateY(-3px);
        }

        .actions {
            display: flex;
            gap: 12px;
        }

        .center {
            text-align: center;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #4e4e4e;
        }

        .footer a {
            text-decoration: none;
            color: #9b7d63;
        }

        .footer a:hover {
            color: #5f4b3a;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            table {
                font-size: 1.1rem;
            }

            a {
                padding: 10px 20px;
            }

            .table-container {
                padding: 20px;
            }
        }

    </style>
</head>
<body>
    <h1>Daftar Kendaraan Siswa</h1>
    <div class="center">
        <a href="tambah.php">Tambah Kendaraan</a>
    </div>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id Kendaraan</th>
                    <th>No Plat</th>
                    <th>Id Parkir</th>
                    <th>Jenis Kendaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config/koneksi.php';
                $query = mysqli_query($conn,"SELECT * FROM kendaraan");
                $no = 1;
                if(mysqli_num_rows($query)){
                    while($result = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $result['id_kendaraan'] ?></td>
                            <td><?php echo $result['no_plat'] ?></td>
                            <td><?php echo $result['id_parkir'] ?></td>
                            <td><?php echo $result['jenis_kendaraan'] ?></td>
                            <td class="actions">
                                <a href="#">Edit</a>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6' class='center'>Data kosong</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Created with Reza ramdhan.p ❤️ </p>
        <p><a href="#">Ganteng</a> | <a href="#">Ganteng banget</a></p>
    </div>
</body>
</html>
