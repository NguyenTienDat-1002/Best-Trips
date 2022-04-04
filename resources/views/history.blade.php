<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background: #eee
    }
    
    .ratings i {
        font-size: 16px;
        color: red
    }
    
    .strike-text {
        color: red;
        text-decoration: line-through
    }
    
    .product-image {
        width: 100%
    }
    
    .dot {
        height: 7px;
        width: 7px;
        margin-left: 6px;
        margin-right: 6px;
        margin-top: 3px;
        background-color: blue;
        border-radius: 50%;
        display: inline-block
    }
    
    .spec-1 {
        color: #938787;
        font-size: 15px
    }
    
    h5 {
        font-weight: 400
    }
    
    .para {
        font-size: 16px
    }
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet" type="text/css"/>
  <x-header/>
</head>
    <body style="background-image: url('{{URL::asset('img/historybg.jpg')}}');  background-repeat: no-repeat; background-size:cover">
        <x-navbar />
        <div class="container mt-5 mb-5" >
            @foreach ( $books as $book)
            <div class="d-flex justify-content-center row">
              <div class="col-md-10">
                  <div class="row p-2 bg-white border rounded">
                      <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{$book->tour->img}}"></div>
                      <div class="col-md-6 mt-1">
                          <h5>{{$book->tour->title}}</h5>
                          <div class="d-flex flex-row">
                              <span>Full Name: {{$book->user->full_name}}</span>
                          </div>
                          <div class="mt-1 mb-1 spec-1"><span>Date: </span><span>{{date('d/m/Y',strtotime($book->tour->departure_date))}}<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Address: </span><span>{{$book->address}}<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>People: </span><span>{{$book->adults}} Adults - {{$book->children}} children<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Phone: </span><span>{{$book->phone}}<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Email: </span><span>{{$book->email}}<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Duration: </span><span>{{$book->tour->duration}} Days<br></span></div>
                        </div>
                      <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                          <div class="d-flex flex-row align-items-center">
                              <h4 class="mr-1">${{$book->price}}</h4>
                          </div>
                          <div class="d-flex flex-column mt-4"><a href="{{route('tourDetails',['id'=>$book->tour_id])}}" class="btn btn-primary btn-sm" type="button">Tour's Details</a></div>
                      </div>
                  </div>
              </div>
          </div>
            @endforeach
          
      </div>
    </body>
</html>
