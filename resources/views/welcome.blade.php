<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyVote - Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('{{ asset('images/phoenix.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .left-section {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .right-section {
            flex: 1;
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        .divider {
            display: none;
        }

        @media (min-width: 768px) {
            .divider {
                display: block;
                width: 1px;
                background-color: #ccc;
                height: auto;
                margin: 0 20px;
            }
        }

        .btn-orange {
            background-color: #DC5F00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-orange:hover {
            background-color: #c44e00;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .form-control {
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #DC5F00;
            box-shadow: 0 0 0 0.25rem rgba(220, 95, 0, 0.25);
        }

        .user-icon {
            font-size: 50px;
            margin-bottom: 15px;
            color: #DC5F00;
        }

        .logo {
            max-width: 120px;
            margin-bottom: 15px;
        }

        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }

            .btn-orange {
                padding: 8px 15px;
                font-size: 14px;
            }

            .form-control {
                padding: 8px 10px;
                font-size: 14px;
            }

            .user-icon {
                font-size: 40px;
                margin-bottom: 10px; /* Adjust bottom margin */
            }

            .logo {
                max-width: 150px; /* Make the logo bigger on mobile */
            }

            h1, p {
                font-size: 16px;
            }

            .right-section {
                margin-top: -70px; /* Move the entire right section higher */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section mb-4 mb-md-0">
            <img src="{{ asset('images/blacklogo.png') }}" alt="EasyVote Logo" class="logo">
            <!-- Hide text on mobile view -->
            <h1 class="d-none d-md-block">Welcome to EasyVote</h1>
            <p class="d-none d-md-block">Secure, fast, and hassle-free voting for CCS student elections—anytime, anywhere!</p>
        </div>

        <!-- Divider -->
        <div class="divider"></div>

        <!-- Right Section -->
        <div class="right-section text-center">
            <!-- User Icon -->
            <i class="bi bi-person-circle user-icon"></i>

            <!-- Login Form -->
            <form>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" placeholder="Username" required>
                </div>

                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="d-flex justify-content-center gap-3 mb-3">
                    <!-- Admin Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-orange dropdown-toggle" type="button" id="adminDropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="#" onclick="changeAdminText('Admin')">Admin</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeAdminText('Voter')">Voter</a></li>
                        </ul>
                    </div>
                
                    <!-- Login Button -->
                    <button type="submit" class="btn btn-orange">Login</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function changeAdminText(text) {
            document.getElementById("adminDropdownButton").textContent = text;
        }

        // Add form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const username = this.querySelector('input[type="text"]').value;
            const password = this.querySelector('input[type="password"]').value;
            
            if (!username || !password) {
                e.preventDefault();
                alert('Please fill in all fields');
            }
        });
    </script>
</body>
</html>