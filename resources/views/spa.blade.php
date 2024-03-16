<!-- spa.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA with Laravel and JavaScript</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Single Page Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active btn btn-primary text-white my-2 my-lg-0 me-lg-4" aria-current="page"
                        href="/SPA/public/spa-home">Home</a>
                    <a class="nav-link active btn btn-primary text-white my-2 my-lg-0 me-lg-4"
                        href="/SPA/public/spa-about">About</a>
                    <a class="nav-link active btn btn-primary text-white my-2 my-lg-0 me-lg-4"
                        href="/SPA/public/spa-contact">Contact</a>
                    <a class="nav-link active btn btn-primary text-white my-2 my-lg-0 me-lg-4 mpa-link"
                        href="/SPA/public/mpa-home">Go to MPA</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="text-center" id="app">
        <!-- Your SPA content will be injected here -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
