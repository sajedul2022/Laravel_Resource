<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>Laravel Project</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>





    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/userlist/2">User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagelink','contact') }}">
                        {{ __('Contact') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagelink','faq') }}">
                        {{ __('FAQ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagelink','terms') }}">
                        {{ __('Terms') }}
                    </a>
                </li>

                <!-- <li class="nav-item">
        <a class="nav-link " href="#"></a>
      </li> -->
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <h4>
                    URL link:- {{ route("login")}}
                </h4>

                <div class="col-sm-8">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Dec 7, 2020</h5>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>





</body>

</html>