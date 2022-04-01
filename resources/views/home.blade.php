<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

::-webkit-input-placeholder {
  color: #56585b;
}

::-moz-placeholder {
  color: #56585b;
}

:-moz-placeholder {
  color: #56585b;
}
.cover  {
  height: 10vh;
  width: 90%;
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,0.05)), to(rgba(0,0,0,0)));
  background: -webkit-linear-gradient(top, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
  background: linear-gradient(to bottom, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
  padding: 20px 50px;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
}
h1 {
  font-size: 3rem;
  font-weight: 700;
  color: #fff;
  margin: 0 0 1.5rem;
}
i {
  font-size: 1.3rem;
}
.flex-form input[type="submit"] {
  background: #ef3f5a;
  border: 1px solid #ef3f5a;
  color: #fff;
  padding: 0 30px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

.flex-form input[type="submit"]:hover {
  background: #d73851;
  border: 1px solid #d73851;
}

.flex-form {
  display: -webkit-box;
  display: flex;
  z-index: 10;
  position: relative;
  width: 500px;
  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.3);
}

.flex-form > * {
  border: 0;
  padding: 0 0 0 10px;
  background: #fff;
  line-height: 50px;
  font-size: 1rem;
  border-radius: 0;
  outline: 0;
  -webkit-appearance: none;
}

input[type="text"] {
  flex-basis: 500px;
}
@media all and (max-width:800px) {
  body {
    font-size: 0.9rem;
  }

  .flex-form {
    width: 100%;
  }

  input[type="search"] {
    flex-basis: 100%;
  }

  .flex-form > * {
    font-size: 0.9rem;
  }


  h1 {
    font-size: 2rem;
  }

  .cover {
    padding: 20px;
  }

}

@media all and (max-width:360px) {


  .flex-form {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
  }

  input[type="search"] {
    flex-basis: 0;
  }

  label {
    display: none;
  }
}
    </style>
    <x-header/>
</head>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Page Header-->
        <header class="masthead"  style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <div class="cover">
                            <h1 class="mb-5">Find Tour</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form  class="flex-form" action="{{url("/tours")}}" method="GET">
                                @csrf
                                <label for="from">
                                  <i class="ion-location"></i>
                                </label>
                                <input type="text" placeholder="Where do you want to go?" name="key">
                                <input type="submit" value="Search">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <section class=" bg-light" style=" padding-top: 3rem ">
            <div class="container px-4 px-lg-5">
                @if($lowest)
                <h2 class="fw-bolder mb-4">Lowest price:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($lowest as $i=>$value )
                        <x-tour-item :tour="$value"/>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
        <section class=" bg-light">
            <div class="container px-4 px-lg-5">
                @if($bigSale)
                <h2 class="fw-bolder mb-4">Big Sale:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($bigSale as $i=>$value )
                        <x-tour-item :tour="$value"/>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
        <!-- Footer-->
        <x-footer/>
        @includeIf('partials.scriptjs')
        <script src="path-to-the-file/splide.min.js"></script>
        <script>
            new Splide( '.splide', {
            fixedWidth : '10rem',
            fixedHeight: '6rem',
            gap        : '1rem',
        } );
        </script>
    </body>
</html>
