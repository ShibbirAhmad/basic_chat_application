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


    <style>
        .chat_box_container {
            animation-duration: 200ms;
            animation-name: fb_bounce_in_v2;
            background-color: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .15);
            display: flex;
            flex-direction: column;
            min-height: 309px;
            transition-timing-function: ease-in;
            width: 375px;
        }

        .content {
            margin: 24px 24px;
        }

        .m_submit_btn {
            appearance: none;
            position: absolute;
            margin-left: 17%;
            margin-top: -2.3%;
            border: none;
            background: #ddd;
            border-radius: 0px 43px 41px 0px;
            padding: 6px;
            width: 52px;
        }


        .message {

            background: #ddd;
            padding: 4px 10px;
            border-radius: 14px;
            margin: 10px 0px;

        }


        
    </style>

</head>

<body>


    <div id="app" class="chat_box_container">
        <div class="content">
            <h4 class="heading">Live Chat With Us</h4>

            <div id="messages"></div>

            <div class="form-group mb-2">
                <input type="text" class="form-control" value="" name="username" id="user_input"
                    placeholder="place your name">
            </div>
            <div class="form-group">
                <input style="border-radius: 0px 50px 50px 0px;" type="text" class="form-control" id="message_input"
                    value="" placeholder="write  message">
                <button style="appearance: none;" type="button" class="m_submit_btn" id="message_send">Send</button>
            </div>
        </div>

    </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>
