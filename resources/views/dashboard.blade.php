<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Dashboard</title>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="pt-3 sm:pt-5">
            <h1 class="text-5xl font-semibold text-black dark:text-white text-center">Dashboard</h1>
            <p>Hello {{ Auth::user()->name }}</p>

            <a href="#" onclick="document.getElementById('logout-form').submit()">
                <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                Se déconnecter
            </a>
        </div>
    </div>
</body>
</html>