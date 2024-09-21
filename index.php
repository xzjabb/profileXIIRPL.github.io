<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajab Supriyadin Personal Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #FCFAEE;
            font-family: Arial, sans-serif;
        }

        nav ul {
            background: #507687;
            padding: 0;
            list-style: none;
            position: relative;
            width: 100%;
        }

        nav ul:after {
            content: "";
            clear: both;
            display: block;
        }

        nav ul li {
            float: left;
        }

        nav ul li:hover {
            background-color: #FCFAEE;
        }

        nav ul li a {
            display: block;
            padding: 20px 30px;
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            color: #B8001F;
        }

        nav ul ul {
            display: none;
            background-color: #507687;
            padding: 0;
            position: absolute;
            top: 100%;
            max-width: 300px;
            width: auto;
        }

        nav ul ul li {
            float: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.21);
            position: relative;
        }

        nav ul li:hover > ul {
            display: block;
        }

        nav ul ul li a {
            padding: 10px 40px;
            color: #fff;
        }

        nav ul ul li a:hover {
            background: #FCFAEE;
        }

        nav ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
            width: 200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2em auto;
            font-family: Arial, sans-serif;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #507687;
            color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        tbody tr {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        th {
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 1em;
            background-color: #507687;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About me</a></li>
            <li class="dropdown"><a href="#">Materi</a>
                <ul>
                    <li><a href="penulisan-css.docx">Penulisan CSS</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <hr>

    <header style="text-align: center;">
        <img src="gambar/rjb.jpg" width="200" height="200" style="border-radius: 50%;" alt="Rajab Supriyadin" />
        <h1 style="color: #507687;">Rajab Supriyadin</h1>
        <p><strong>(Junior Web Developer)</strong></p>
    </header>
    <hr>

    <article style="text-align: center;">
        <h2 style="color: #B8001F;">OVERVIEW</h2>
        <p>
            Hi, saya adalah Web Developer muda yang berdomisili di Tangerang Selatan.
            saat ini sedang belajar HTML untuk membuat profil pribadi.
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto;">
        <table>
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Pengalaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>HTML (Expert)</li>
                            <li>CSS (Beginner)</li>
                            <li>Javascript (Beginner)</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Freelancer di Internet</li>
                            <li>Freelancer di Internet</li>
                            <li>Freelancer di Internet</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br> 

    <footer style="text-align: center;">
        <p>Copyright &copy; 2024 Rajab Supriyadin.</p>
    </footer>
    
</body>

</html>
