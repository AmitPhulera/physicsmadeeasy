<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <meta charset="utf-8">
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
		

      <!--Let browser know website is optimized for mobile-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="shortcut icon" href="images/p.ico" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Physics Made Easy</title>
      <style>
    		td,th,input{
    			text-align:center !important;
    		}
    		table{
    			margin-top: 20px;
    		}
        .hidden{
          display: none;
        }
        .center{
          text-align: center;
        }
        .loader{
          width: 100vw;
          height: 100vh;
          background: rgba(0,0,0,.9);
          position: fixed;
          top:0;
          left:0;
          z-index: 100;
        }
        .loader .preloader-wrapper{
          top:50vh;
          left:50vw;
        }
      </style>
    
    </head>

    <body>
      <!--Navigation Bar Starts-->
      <nav>
		    <div class="nav-wrapper purple z-depth-5">
		      <a href="#!" class="brand-logo center">Physics Made Easy</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      
		      <ul class="side-nav blue-grey darken-3 " id="mobile-demo">
		        <li><a href="./index.php" class="cyan-text text-lighten-5">Home</a></li>
		        <li><a href="./experiments.php" class="cyan-text text-lighten-5">Experiments</a></li>
		        <li><a href="https://www.facebook.com/amitphulera95" class="cyan-text text-lighten-5">Contact Me</a></li>
		        
		      </ul>
		    </div>
  		</nav>
      <div class="loader">
   <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>
      <!--Navigation Bar Ends-->
