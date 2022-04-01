<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
*{
  margin: 0;
  padding: 0;
  font-family: roboto;
}


.cont{
  width: 93%;
  max-width: 350px;
  text-align: center;
  margin: 4% auto;
  padding: 30px 0;
  background: #111;
  color: #EEE;
  border-radius: 5px;
  border: thin solid #444;
  overflow: hidden;
}

hr{
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title{
  font-size: 2em;
}

h1 span{
  font-weight: 300;
  color: #Fd4;
}

div.stars{
  width: 270px;
  display: inline-block;
}

input.star{
  display: none;
}

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}


input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before {
  color: #F62;
}

label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}

label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}

.rev-box{
  overflow: hidden;
  height: 0;
  width: 100%;
  transition: all .25s;
}

textarea.review{
  background: #222;
  border: none;
  width: 100%;
  max-width: 100%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  color: #EEE;
}

label.review{
  display: block;
  transition:opacity .25s;
}


    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type ="text/css"/>
    <x-header/>
</head>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$tour->img}}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-{{$tour->id}}</div>
                        <h1 class="display-5 fw-bolder">{{$tour->title}}</h1>
                        <div class="fs-5 mb-5">
                            @if($tour->sales!=0)
                                <span class="text-decoration-line-through">{{$tour->price}}</span>
                                <span>${{$tour->price*(100-$tour->sales)/100}}</span>
                            @else
                            <span>${{$tour->price}}</span>
                            @endif
                        </div>
                        <p class="lead">Duration: {{$tour->duration}}</p>
                        <p class="lead">Departure point: {{$tour->departure_point}}</p>
                        <p class="lead">Departure time: {{date('d/m/Y',strtotime($tour->departure_date))}}</p>
                        <div class="d-flex">
                            <a class="btn btn-outline-dark flex-shrink-0" type="button" href="{{URL::asset(route('tour.book',['id'=>$tour->id]))}}">
                                <i class="bi-cart-fill me-1"></i>
                                Booking
                            </a>
                            @if(Auth::check()&&Auth::guard()->user()->role=="Admin")
                            <a class="btn btn-outline-dark flex-shrink-0" type="button" href="{{route('editTour',['id'=>$tour->id])}}"style="margin-left: 10px">
                                <i class="bi-cart-fill me-1"></i>
                                Edit
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Overview:</h1> 
                    {!!$overview!!}
                </p>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Video:</h1> 
                    <center><video controls>
                        <source src="{{$tour->video}}" type="video/{{pathinfo($tour->video, PATHINFO_EXTENSION);}}">
                      Your browser does not support the video tag.
                    </video></center>
                </p>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Description:</h1> 
                    {!!$description!!}
                </p>
            </div>
        </section>
        
          
                
            <div class="cont">
                <div class="stars">
                <form action="">
                  <input class="star star-5" id="star-5-2" type="radio" name="star" value="5"/>
                  <label class="star star-5" for="star-5-2"></label>
                  <input class="star star-4" id="star-4-2" type="radio" name="star" value="4"/>
                  <label class="star star-4" for="star-4-2"></label>
                  <input class="star star-3" id="star-3-2" type="radio" name="star" value="3"/>
                  <label class="star star-3" for="star-3-2"></label>
                  <input class="star star-2" id="star-2-2" type="radio" name="star" value="2"/>
                  <label class="star star-2" for="star-2-2"></label>
                  <input class="star star-1" id="star-1-2" type="radio" name="star" value="1"/>
                  <label class="star star-1" for="star-1-2"></label>
                  <div class="rev-box">
                    <textarea class="review" col="30" name="review"></textarea>
                    <label class="review" for="review">Breif Review</label>
                  </div>
                </form>
                </div>
            </div>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                @if($tours)
                <h2 class="fw-bolder mb-4">Other tours:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($tours as $i=>$value )
                        <x-tour-item :tour="$value"/>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
        
        <!-- Footer-->
        @includeIf('partials.scriptjs')
    </body>
</html>
