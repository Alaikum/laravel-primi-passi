<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Primi Passi Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        ul {
            list-style: none;
        }

        html,
        body {
            background-color: grey;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;



        }

        h2 {
            padding: 1rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid salmon;
            padding: 1rem;
            text-align: center;
            background-color: bisque;


        }

        .photo__card {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 1rem;
            padding: 1rem;
        }

        .photo__card>img {
            border-radius: 15px;
            transition: transform 2s;
        }

        .photo__card>img:hover {
            transform: scale(1.5);
            cursor: pointer;
        }

        .photo__card>p {
            font-size: 1.5rem;
            color: black;
        }

        .photo__card>p:hover {
            cursor: pointer;
            color: red;

        }

        .text {
            font-style: oblique;

        }

        .text:hover {
            color: black;
            cursor: pointer;
            font-style: normal;
            transform: scale(1.05);
        }

        .footer {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: brown;
            padding: 1rem;
            font-weight: 900;
        }

        .footer>span:hover {
            cursor: pointer;
            color: crimson;
            transform: scale(1.5);
        }

        ul {
            text-align: end;
        }

        li { 
            padding: 5px;
            font-size: 24px;
            font-weight: 700;
            margin: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Hello World, My Name is Laravel </h1>
        <div>
            <h2> First Post</h2>
            <div>
                <figure class="photo__card">
                    <img src="{{ $img }}" alt="NoPhoto">
                    <p> {{ $profile }}</p>
                </figure>
                <div>
                    <p class="text">{{ $text }} </p>
                    <p class="footer"><span>{{ $city }}</span> <span> {{ $data_post }} </span></p>
                </div>
                <ul>
                    @forelse ($comments as $comment)
                        <li>
                            {{ $comment }}
                        </li>
                    @empty
                        <p>0 Comments</p> 
                    @endforelse
                </ul>

            </div>
        </div>
    </div>

</body>

</html>
