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
    <body>
        <x-navbar />
        <div class="container mt-5 mb-5">
          <div class="d-flex justify-content-center row">
              <div class="col-md-10">
                  <div class="row p-2 bg-white border rounded">
                      <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i.imgur.com/QpjAiHq.jpg"></div>
                      <div class="col-md-6 mt-1">
                          <h5>Quant olap shirts</h5>
                          <div class="d-flex flex-row">
                              <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                          </div>
                          <div class="mt-1 mb-1 spec-1"><span>Date:</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Address:</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>People:</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Phone:</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Email:</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>

                          
                          <div class="mt-1 mb-1 spec-1"><span>Duration</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        </div>
                      <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                          <div class="d-flex flex-row align-items-center">
                              <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                          </div>
                          <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </body>
</html>
