<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoPHP</title>
    {!! vite('css/app.css') !!}
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="logo-container">
                <img src="/images/logo.png" alt="NanoPHP Logo" class="main-logo">
            </div>
            <p class="subtitle">
                A lightweight, package-oriented framework<br>
                now powered by the <strong>Blade</strong> Templating Engine.
            </p>

            <div class="features">
                <div class="feature-item">
                    <div class="feature-title">FastRoute</div>
                    <div class="feature-desc">High-performance routing</div>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Eloquent</div>
                    <div class="feature-desc">Expressive ORM</div>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Blade</div>
                    <div class="feature-desc">Elegant Templating</div>
                </div>
            </div>

            <a href="https://github.com/antigravity/nanophp" class="cta-button">Get Started</a>
        </div>
    </div>
    {!! vite('js/app.jsx') !!}
</body>

</html>