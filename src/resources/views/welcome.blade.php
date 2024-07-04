<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e0f7fa;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 2.5em;
            animation: fadeIn 2s;
        }
        p {
            color: #555;
            font-size: 1.2em;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            animation: slideIn 1.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/devina.jpg" alt="Profile Image" class="profile-img">
        <h1>Halo</h1>
        <p>Aku Devina Marsya Rani, Mahasiswi Program Studi Ilmu Komputer di Universitas Pendidikan Ganesha.</p>
    </div>
</body>
</html>
