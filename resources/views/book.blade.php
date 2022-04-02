<!DOCTYPE html>
<html lang="en">

<head>
    @includeIf('partials.W3CSS')
    <title>Booking Page</title>
     <link rel="stylesheet" href="{{URL::asset('css/booking.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <style>
        /* body {

        } */

        .booking-form-box {
            max-width: 350px;
            border: 1px;
            margin: 10% auto 0;
        }

        .booking-form {
            padding: 0 20px 20px;
        }

        .booking-form label {
            margin-bottom: 5px;
            margin-top: 10px;
            font-size: 12px;
            color: white;
        }

        input::placeholder {
            color: white !important;
        }
    </style> -->
</head>

<body>
    <!-- Navigation-->
    <x-navbar />
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{URL::asset('/img/about-bg.jpg')}}')">
        <!-- <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <div class="post w3-container ">
                            <div class="w3-container w3-teal">
                                <center>
                                    <h2>New Tour</h2>
                                </center>
                            </div>

                            <form class="w3-container w3-card-4 w3-light-grey" enctype="multipart/form-data" action="{{url('/tour/new')}}" method="post">
                                {{ csrf_field() }}

                                <div class="w3-row-padding">
                                    <p>
                                        <label class="w3-text-grey" for="title">Title</label>
                                        <input class="w3-input w3-border" type="text" id="title" name="title" required>
                                    <p>
                                </div>

                                <div class="w3-row-padding">
                                    <p class="w3-half">
                                        <label class="w3-text-grey" for="departure">Departure point</label>
                                        <input class="w3-input w3-border" type="text" required id="departure" name="departure">
                                    </p>

                                    <p class="w3-half">
                                        <label class="w3-text-grey" for="time">time</label>
                                        <input class="w3-input w3-border" type="datetime-local" id="time" name="time">
                                    </p>

                                </div>

                                <div class="w3-row-padding">
                                    <p class="w3-half">
                                        <label class="w3-text-grey" for="duration">Duration</label>
                                        <input class="w3-input w3-border" id="duration" name="duration" type="text" required>
                                    </p>

                                    <p class="w3-half">
                                        <label class="w3-text-grey" for="price">Price</label>
                                        <input class="w3-input w3-border" type="text" id="price" name="price">
                                    </p>
                                </div>

                                <div class="w3-row-padding">
                                    <label class="w3-text-grey" for="img">Tour image</label>
                                    <input class="w3-input w3-border" type="file" id="img" name="img">
                                </div>

                                <div class="w3-row-padding">
                                    <label class="w3-text-grey">Iternary</label>
                                    <p id="iternaries">
                                        <label class="w3-text-grey">Day 1:</label>
                                        <input class="w3-input w3-border" type="text" id="iternary" name="iternaries[]">
                                    </p>
                                </div>

                                <div class="w3-row-padding">
                                    <p>
                                        <label class="w3-text-grey" for="description">Description</label>
                                        <textarea class="w3-input w3-border" id="description" rows="6" name="description" style="resize:none"></textarea>
                                    </p>
                                </div>

                                <div class="w3-row-padding">
                                    <p>
                                        <label class="w3-text-grey" for="requirement">Overview</label>
                                        <textarea class="w3-input w3-border" id="requirement" rows="6" name="requirement" style="resize:none"></textarea>
                                    </p>
                                </div>
                                @php
                                if($errors->any())
                                echo '<center>
                                    <p style="color:red">'.$errors->first().'</p>
                                </center>';
                                @endphp
                                @if(session('notification'))
                                <center>
                                    <p style="color:green">{{ session('notification')}}</p>
                                </center>
                                @endif
                                <center>
                                    <p><input type="submit" class="w3-btn w3-padding w3-teal" style="width:120px" name="submit" value="Create"></p>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="booking-form-box">
            <div class="booking-form">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email">
                <label>Phone number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number">
                <div class="input-grp">
                    <label>Adult ticket</label>
                    <input type="text" class="form-control" placeholder="Enter email">
                </div>
                <div class="input-grp">
                    <label>Children ticket</label>
                    <input type="text" class="form-control" placeholder="Enter phone number">
                </div>
            </div>
        </div>
    </header>
    <x-footer />
    <!-- Footer-->
    @includeIf('partials.scriptjs')

</body>

</html>