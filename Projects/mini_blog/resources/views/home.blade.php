<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latest Blog Posts</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 40px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .blog-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .author {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .title {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .body {
            font-size: 15px;
            color: #555;
            line-height: 1.6;
        }

        .read-more {
            display: inline-block;
            margin-top: 15px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div style="position: absolute; top: 20px; right: 40px;">
    @auth
        <span style="margin-right: 10px;">Welcome, {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">
                Logout
            </button>
        </form>
    @else
        <a href="{{ route('login') }}" style="margin-right: 10px; text-decoration: none; color: #007bff;">Login</a>
        <a href="{{ route('register') }}" style="text-decoration: none; color: #007bff;">Register</a>
    @endauth
</div>


    <h1>Latest Blog Posts</h1>

    <div class="blog-grid">
        @foreach ($posts as $post)
            <div class="blog-card">
                <div class="author">By {{ $post->user->name ?? 'Unknown' }}</div>
                <div class="title">{{ $post->title }}</div>
                <div class="body">{{ \Illuminate\Support\Str::limit($post->body, 120) }}</div>
                <a href="#" class="read-more">Read More →</a>
            </div>
        @endforeach
    </div>

</body>
</html>
