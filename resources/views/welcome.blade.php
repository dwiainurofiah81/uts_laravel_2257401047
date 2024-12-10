<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

section {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

h1 {
    color: #0066cc;
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button, .btn {
    padding: 10px 20px;
    border: none;
    background-color: #0066cc;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover, .btn:hover {
    background-color: #004999;
}

.buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.buttons .btn {
    flex: 1;
    text-align: center;
}
span{
    color: #0066cc;
    font-weight: bold;
}
    </style>
</head>
<body>
    <section class="welcome">
        <h1>Selamat Datang di Website</h1>
        <p>Silakan daftar atau login untuk melanjutkan</p>
        <div class="buttons">
            <a href="/register" class="btn">Daftar</a>
            <a href="/login" class="btn">Login</a>
        </div>
        <h3><span>Created </span>Dwi Ainurofiah</h3>
        <p>2257401054</p>
    </section>
    
</body>
</html>