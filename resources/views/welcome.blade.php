<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="welcome-container">
            <div class="welcome-wrapper">
                <div class="header-parent">
                    <div class="header-wrapper">
                        <div class="title-side">
                            <div class="title-wrapper">
                                <img src="https://scontent.fceb1-3.fna.fbcdn.net/v/t1.6435-9/99132004_246883206401344_6886541663234162688_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=be3454&_nc_eui2=AeF8Ajt52hRjum8T-hzUfrAillrO8QExzo-WWs7xATHOj7Mjk95rnz1hAJNGYkWUaFOuTdS1gqA39c45b13jhhN1&_nc_ohc=WUVQXQKmLwYAX8xg9ob&_nc_ht=scontent.fceb1-3.fna&oh=00_AfDcmF7NIUMJMzGXIdXwD-i-nioWzcyKoYUXNhdpBxjuBg&oe=66073B0B" alt="">
                                <p>North Coast Bohol Institute Inc.</p>
                            </div>
                        </div>
                        <div class="login-side">    
                            @if (Route::has('login'))
                                <div    >
                                    @auth
                                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-container">
                <div class="welcome-wrapper">
                    <div class="header-parent">
                        <div class="header-wrapper">
                        
                            <div class="website_container">
                                <h1>Enrollment System</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
