<html>
<head>
    <title>Chat Application</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>

<br> <br> <br> <br>

<div class="container">
    <div class="row" id="app">
        <div class="offset-4 col-4 offset-sm-1 col-sm-10">
            <li class="list-group-item active">Chat Room</li>
            <ul class="list-group" v-chat-scroll>

                <message v-for="value in chat.message" :key="value.index">
                    @{{ value }}
                </message>

            </ul>



            <input type="text"
                   class="form-control"
                   placeholder="Type your message here..."
                   v-model="message" @keyup.enter="send()">
            <br>
        </div>
    </div>
</div>



<script src="{{asset('js/app.js')}}"></script>

</body>
</html>