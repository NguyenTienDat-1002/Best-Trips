<div class="col mb-5">
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="{{$tour->img}}" alt="{{$tour->title}}" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$tour->title}}</h5>
                <!-- Product price-->
                ${{$tour->price}}
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url("/tour/{$tour->id}")}}">View options</a></div>
        </div>
    </div>
</div>