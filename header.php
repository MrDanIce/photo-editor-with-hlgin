<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>Image Editor</title>
        <style type="text/css">[ng-cloak]#splash{display:block!important}[ng-cloak]{display:none}#splash{display:none;position:absolute;top:45%;left:50%;width:6em;height:6em;overflow:hidden;border-radius:100%;z-index:0}@-webkit-keyframes fade{from{opacity:1}to{opacity:.2}}@keyframes fade{from{opacity:1}to{opacity:.2}}@-webkit-keyframes rotate{from{-webkit-transform:rotate(0deg)}to{-webkit-transform:rotate(360deg)}}@keyframes rotate{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}#splash::after,#splash::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%}#splash::before{background:linear-gradient(to right,green,#ff0);-webkit-animation:rotate 2.5s linear infinite;animation:rotate 2.5s linear infinite}#splash::after{background:linear-gradient(to bottom,red,#00f);-webkit-animation:fade 2s infinite alternate,rotate 2.5s linear reverse infinite;animation:fade 2s infinite alternate,rotate 2.5s linear reverse infinite}#splash-spinner{position:absolute;width:100%;height:100%;z-index:1;border-radius:100%;box-sizing:border-box;border-left:.5em solid transparent;border-right:.5em solid transparent;border-bottom:.5em solid rgba(255,255,255,.3);border-top:.5em solid rgba(255,255,255,.3);-webkit-animation:rotate .8s linear infinite;animation:rotate .8s linear infinite}</style>
        <link rel="stylesheet" href="assets/css/main.css?v23">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
    </head>

    
    <body id="editor" ng-app="ImageEditor" ng-strict-di>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">PhotoEd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">Link</a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>
              <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>

        <div id="splash" ng-cloak>
            <div id="splash-spinner"></div>
        </div>