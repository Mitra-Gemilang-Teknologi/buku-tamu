<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</title>

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="../../external.html?link=https://bukutamu.ciamiskab.go.id/assets/form/img/favicon.ico" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset("/assets/templateskm/assets/form/img/apple-touch-icon-57x57-precomposed.png")}}">

    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset("/assets/templateskm/>assets/form/img/apple-touch-icon-72x72-precomposed.png")}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset("/assets/templateskm/assets/form/img/apple-touch-icon-114x114-precomposed.png")}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset("/assets/templateskm/assets/form/img/apple-touch-icon-144x144-precomposed.png")}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset("/assets/templateskm/assets/form/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("/assets/templateskm/assets/form/css/menu.css")}}" rel="stylesheet">
    <link href="{{asset("/assets/templateskm/assets/form/css/style.css")}}" rel="stylesheet">
     <link href="{{asset("/assets/templateskm/assets/form/css/vendors.css")}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
     <link href="{{asset("/assets/templateskm/assets/form/css/custom.css")}}" rel="stylesheet">
    <style>
			html{
				scroll-behavior: smooth;s
			}
        .initop {
            background-image: url('img_pertanyaan/0.html');
            background-repeat: no-repeat;
            background-position: right top;
            background-size: 25%;
            background-origin: content-box;
        }

        .inibot {
            /* background-image: url('img_pertanyaan/0.png'); */
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: 25%;
            background-origin: content-box;
        }
			#beranda {
			background: linear-gradient(-45deg, #51006C, #FF6600);
			background-size: 400% 400%;
			animation: gradient 15s ease infinite;
			height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.mylinks a {
  text-decoration: none;
  display: inline-block;
  padding: 2%;

}
.mycooldiv {
  background: red;
  width: 100%;
  height: 400px;
  margin-bottom: 30%;
  box-shadow: inset 0 0 10px 200px rgba(0, 0, 0, 0.55);
}

    </style>

    <!-- MODERNIZR MENU -->
    <script src="{{asset("/assets/templateskm/assets/form/js/modernizr.js")}}"></script>

</head>
  <body>

    @yield('container')


      <!-- COMMON SCRIPTS -->
    <script src="{{asset("/assets/templateskm/assets/form/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("/assets/templateskm/assets/form/js/common_scripts.min.js")}}"></script>
    <script src="{{asset("/assets/templateskm/assets/form/js/velocity.min.js")}}"></script>
    <script src="{{asset("/assets/templateskm/assets/form/js/functions.js")}}"></script>

    <!-- Wizard script -->
    <script src="{{asset("/assets/templateskm/assets/form/js/review_func.js")}}"></script>

  </body>

</html>
