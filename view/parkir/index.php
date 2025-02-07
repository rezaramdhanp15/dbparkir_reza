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
            font-family: 'Georgia', serif;
            background-color: #f4f1e1;
            color: #4e4e4e;
            line-height: 1.6;
            padding: 40px 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-map.png');
        }

        h1 {
            text-align: center;
            color: #2f2f2f;
            margin-bottom: 30px;
            font-size: 2.5em;
            letter-spacing: 1px;
            font-family: 'Times New Roman', serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 12px 25px;
            background-color: #5c4d43;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            display: inline-block;
            letter-spacing: 1px;
        }

        a:hover {
            background-color: #3b2f26;
        }

        .table-container {
            max-width: 85%;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.1rem;
            font-family: 'Courier New', Courier, monospace;
        }

        th, td {
            padding: 15px 25px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5c4d43;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f3e5;
        }

        tr:hover {
            background-color: #e4d7ae;
        }

        td {
            color: #555;
        }

        .actions a {
            padding: 8px 16px;
            background-color: #b59b6f;
            color: #fff;
            border-radius: 3px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .actions a:hover {
            background-color: #9a864d;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .center {
            text-align: center;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            table {
                font-size: 1rem;
            }

            h1 {
                font-size: 2em;
            }
        }

    </style>
</head>
<body>
    <h1>Daftar Kendaraan Siswa</h1>
    <div class="center">
        <a href="tambah.php">Tambah Member</a>
    </div>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id Parkir</th>
                    <th>Tanggal Parkir</th>
                    <th>Harga Parkir</th>
                    <th>Alamat Parkir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config/koneksi.php';
                $query = mysqli_query($conn,"SELECT * FROM parkir");
                $no=1;
                if(mysqli_num_rows($query)){
                    while($result=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $result['id_parkir'] ?></td>
                            <td><?php echo $result['tanggal_parkir'] ?></td>
                            <td><?php echo $result['harga_parkir'] ?></td>
                            <td><?php echo $result['alamat_parkir'] ?></td>
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
</body>
</html>
