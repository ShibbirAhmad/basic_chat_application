<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>
    <h1>Live Chat With Us</h1>

    <div style="margin: 0 auto;width:400px;" id="app">
        <header>
            <h4>chat</h4>
            <div class="form-group mb-2">
                <input type="text" class="form-control" value="" name="username" id="user_input" placeholder="place your name">
            </div>

        </header>
        <div id="messages"></div>

        <div class="form-group">
            <input type="text" class="form-control" id="message_input" value="" placeholder="write  message">
            <button style="appearance: none;" type="button" class="btn mt-2 btn-primary"
                id="message_send">Send</button>
        </div>
    </div>


     <script src="{{ asset('js/app.js') }}" > </script>


</body>
