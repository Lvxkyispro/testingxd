<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact @kiltes</title>
    <style>
        body {
            background-color: #808080;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        h1 {
            animation: flicker 1.5s infinite alternate;
        }

        @keyframes flicker {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        .telegram-icon {
            margin-top: 20px;
        }

        .telegram-icon img {
            width: 50px;
            height: 50px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>This website is owned by @kiltes</h1>
    <div class="telegram-icon">
        <a href="https://t.me/kiltes" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram Icon">
        </a>
    </div>
</body>
</html>
