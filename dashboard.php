<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2);
    font-family:'Poppins',sans-serif;
}

.dashboard-card{
    background:white;
    padding:50px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
    width:500px;

    animation:fadeIn .8s ease;
    transition:.3s;
}

.dashboard-card:hover{
    transform:translateY(-5px);
}

.dashboard-card i{
    font-size:70px;
    color:#0d6efd;
    animation:float 2s infinite ease-in-out;
}

.dashboard-card h1{
    margin-top:15px;
    font-weight:700;
    color:#222;
}

.dashboard-card p{
    color:#666;
    font-size:18px;
}

.btn-logout{
    margin-top:20px;
    transition:.3s;
}

.btn-logout:hover{
    transform:translateY(-2px);
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes float{
    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-8px);
    }

    100%{
        transform:translateY(0);
    }
}

</style>

</head>
<body>

<div class="dashboard-card">

    <i class="bi bi-person-check-fill"></i>

    <h1>Welcome User 🎉</h1>

    <p>Login Successful</p>

    <a href="login.php" class="btn btn-danger btn-logout">
        Logout
    </a>

</div>

</body>
</html>