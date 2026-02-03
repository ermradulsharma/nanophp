<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoPHP + React</title>
    {!! vite('js/app.jsx') !!}
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .react-hero {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h1 {
            color: #61dafb;
        }
    </style>
</head>

<body>
    <div id="app"></div>
</body>

</html>