<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajab Supriyadin - Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FCFAEE;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav ul {
            background: #507687;
            padding: 0;
            list-style: none;
            position: relative;
            width: 100%;
            margin: 0;
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
            font-weight: 500;
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

        h1 {
            text-align: center;
            color: #507687;
            margin: 2em 0;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 1em;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: 500;
            color: #333;
        }

        input[type="email"], textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #507687;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }

        input[type="submit"]:hover {
            background-color: #405f6c;
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

    <div>
        <h1>Contact Me</h1>
        <form>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Alamat email" required/>

            <label for="message">Pesan</label>
            <textarea name="message" placeholder="Tulis pesan Anda..." rows="4" required></textarea>

            <input type="submit" value="Kirim" />
        </form>
    </div>
<br>    
    <footer>
        <p>Copyright &copy; 2024 Rajab Supriyadin.</p>
    </footer>

</body>

</html>
