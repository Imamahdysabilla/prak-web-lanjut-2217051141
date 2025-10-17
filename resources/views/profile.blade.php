<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Profil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .profile-card {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      width: 300px;
    }
    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: #ddd;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 60px;
      margin: 0 auto 20px;
      color: #888;
    }
    .profile-info {
      background: #e6e6e6;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <div class="profile-img">👤</div>
    <div class="profile-info">Name: {{ $name }}</div>
    <div class="profile-info">Kelas: {{ $kelas }}</div>
    <div class="profile-info">email: {{ $email }}</div>
  </div>
</body>
</html>
