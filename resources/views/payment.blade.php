<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex
}

.card {
    margin: auto;
    width: 600px;
    padding: 3rem 3.5rem;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

@media(max-width:767px) {
    .card {
        width: 90%;
        padding: 1.5rem
    }
}

@media(height:1366px) {
    .card {
        width: 90%;
        padding: 8vh
    }
}

.card-title {
    font-weight: 700;
    font-size: 2.5em
}

.nav {
    display: flex
}

.nav ul {
    list-style-type: none;
    display: flex;
    padding-inline-start: unset;
    margin-bottom: 6vh
}

.nav li {
    padding: 1rem
}

.nav li a {
    color: black;
    text-decoration: none
}

.active {
    border-bottom: 2px solid black;
    font-weight: bold
}

input {
    border: none;
    outline: none;
    font-size: 1rem;
    font-weight: 600;
    color: #000;
    width: 100%;
    min-width: unset;
    background-color: transparent;
    border-color: transparent;
    margin: 0
}

form a {
    color: grey;
    text-decoration: none;
    font-size: 0.87rem;
    font-weight: bold
}

form a:hover {
    color: grey;
    text-decoration: none
}

form .row {
    margin: 0;
    overflow: hidden
}

form .row-1 {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.5rem;
    outline: none;
    width: 100%;
    min-width: unset;
    border-radius: 5px;
    background-color: rgba(221, 228, 236, 0.301);
    border-color: rgba(221, 228, 236, 0.459);
    margin: 2vh 0;
    overflow: hidden
}

.btn:hover{
    color:white;
}
form .row-2 {
    border: none;
    outline: none;
    background-color: transparent;
    margin: 0;
    padding: 0 0.8rem
}

form .row .row-2 {
    border: none;
    outline: none;
    background-color: transparent;
    margin: 0;
    padding: 0 0.8rem
}

form .row .col-2,
.col-7,
.col-3 {
    display: flex;
    align-items: center;
    text-align: center;
    padding: 0 1vh
}

form .row .col-2 {
    padding-right: 0
}

#card-header {
    font-weight: bold;
    font-size: 0.9rem
}

#card-inner {
    font-size: 0.7rem;
    color: gray
}

.three .col-7 {
    padding-left: 0
}

.three {
    overflow: hidden;
    justify-content: space-between
}

.three .col-2 {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.5rem;
    outline: none;
    width: 100%;
    min-width: unset;
    border-radius: 5px;
    background-color: rgba(221, 228, 236, 0.301);
    border-color: rgba(221, 228, 236, 0.459);
    margin: 2vh 0;
    width: fit-content;
    overflow: hidden
}

.three .col-2 input {
    font-size: 0.7rem;
    margin-left: 1vh
}

.btn {
    width: 100%;
    background-color: rgb(65, 202, 127);
    border-color: rgb(65, 202, 127);
    color: white;
    justify-content: center;
    padding: 2vh 0;
    margin-top: 3vh
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

input:focus:-moz-placeholder {
    color: transparent
}

input:focus::-moz-placeholder {
    color: transparent
}

input:focus:-ms-input-placeholder {
    color: transparent
}
    </style>
</head>
<body>
    <div class="card mt-50 mb-50">
        <span><a href="{{URL::asset('/')}}"><-Back to home</a></span>
        <div class="card-title mx-auto"> Payment </div>
        <div class="nav">
            <ul class="mx-auto">
                <li class="active"><a >Price:{{$price}}$</a></li>
            </ul>
        </div>
        
        <form method="Post" action="{{URL::asset("/payment")}}"> <span id="card-header">Your cards:</span>
            @csrf
            <input hidden name="tour_id" value="{{$tour}}">
            <input hidden name="email" value="{{$email}}">
            <input hidden name="adults" value="{{$adults}}">
            <input hidden name="children" value="{{$children}}">
            <input hidden name="address" value="{{$address}}">
            <input hidden name="phone" value="{{$phone}}">
            <div class="row-1">
                <div class="row row-2"> <span id="card-inner">Card holder name</span> </div>
                <div class="row row-2"> <input type="text" placeholder="Bojan Viner"> </div>
            </div>
            <div class="row three">
                <div class="col-7">
                    <div class="row-1">
                        <div class="row row-2"> <span id="card-inner">Card number</span> </div>
                        <div class="row row-2"> <input type="text" placeholder="5134-5264-4"> </div>
                    </div>
                </div>
                <div class="col-2"> <input type="text" placeholder="Exp. date"> </div>
                <div class="col-2"> <input type="text" placeholder="CVV"> </div>
            </div> 
            <button class="btn d-flex mx-auto" type="submit" style="color:#000"><b>Add card</b></button>
            <a class="btn d-flex mx-auto"><b>Cancel</b></a>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
