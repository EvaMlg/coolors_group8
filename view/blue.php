
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COOLOR FILMS</title>
        <script src="https://kit.fontawesome.com/fdac4fc693.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="public/css/secondstyle.css">
    </head>
    <body class="white-secondary white-gradient-secondary">

        <!-- Navbar -->
            
        <nav class="navbar navbar-expand-lg navbar-light white p-3">
            <a class="navbar-brand p-3" href="#"> <b>COOLOR FILMS</b> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div>
                <input class="search" type="text" placeholder="Search..">
            </div>
           
            
            <div class="btn-group">
                <button type="button" class="btn btn-primary"></button>
                <br>
                <button type="button" class="btn bg-purple"></button>
                <button type="button" class="btn btn-info"></button>
                <button type="button" class="btn btn-warning"></button>
                <button type="button" class="btn btn-danger"></button>
              </div>
            <!-- <ul>
                <li class="ROUGE"> <a href="#"></a> </li>
                <li class="YELLOW"><a href="#"></a></li>
                <li class="BLUE"><a href="#"></a></li>
                <li class="VERT"><a href="#"></a></li>
                <li class="ROSE"><a href="#"></a></li>
                <li class="NOIR"><a href="#"></a></li>
                <li class="ORANGE"><a href="#"></a></li>
            </ul> -->
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Log in<span class="sr-only">(current)</span></a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="carousel.html">Sign up</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Français</a>
                                <a class="dropdown-item" href="#">English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Nederlands</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:soumaya.abouda@gmail.com">Contact us</a>
                    </li>
                </ul>     
            </div>
        </nav>
        
        <!-- Cards container -->
        <div class="container-fluid p-4">  
                <!-- Row 1 -->
                <div class="row mb-5">
                    <!-- Col 1 -->
                   <?php foreach ($films['color'] as $colorUnit):
            if (color=="blue"){
                
            } echo color; 
                    var_dump($name);?> 
                   <?php endforeach;?>

                    <div class="col-md-6 col-lg-3 p-3 text-center">
                        <div class="card p-3 text-center shadow-sm shadow-y">
                            <img src="../public/images/pantone/coolorsblue.jpg" class="card-img-top" alt="pantone">

                            <div class="card-body text-left">
                                <h5 class="card-title">BLUUE</h5> <!-- Afficher le titre du film depuis la DB  -->
                                <p class="card-text"> #104B83 </p>
                            </div>

                            <div class="card-footer text-center border-0 bg-transparent">
                                <hr class="w-25 mx-auto mb-4">
                                <a href="../view/blue.php" class="btn btn-outline-primary mb-2"> Watch here</a>
                            </div>
                        </div>
                    </div>  
                    
                    
                </div> 

                <!-- Row 2 -->
                
                <div class="row ">
                    <!-- Col 1 -->
                    <div class="col-md-6 col-lg-3 p-3 text-center">
                        <div class="card p-3 text-center shadow-sm shadow-y">
                            <img src="../public/images/pantone/coolorsorange.jpg" class="card-img-top" alt="soumoji">

                            <div class="card-body text-left">
                                <h5 class="card-title">ORAANGE</h5>
                                <p class="card-text">#FD5904</p>
                                
                            </div>

                            <div class="card-footer text-center border-0 bg-transparent">
                                <hr class="w-25 mx-auto mb-4">
                                <a href="#" class="btn btn-primary bg-dark border-0"> See more</a>
                            </div>
                        </div>
                    </div>  
                    
                    <!-- Col 2 -->
                    <div class="col-md-6 col-lg-3 p-3 text-center">
                        <div class="card p-3 text-center shadow-sm shadow-y">
                            <img src="../public/images/pantone/coolorsgreen.jpg" class="card-img-top" alt="soumoji">

                            <div class="card-body text-left">
                                <h5 class="card-title">GREEEEN</h5>
                                <p class="card-text">#02891A</p>
                                
                            </div>

                            <div class="card-footer text-center border-0 bg-transparent">
                                <hr class="w-25 mx-auto mb-4">
                                <a href="#" class="btn btn-primary bg-dark border-0"> See more</a>
                            </div>
                        </div>
                    </div>  

                    <!-- Col 3 -->
                    <div class="col-md-6 col-lg-3 p-3 text-center">
                        <div class="card p-3 text-center shadow-sm shadow-y">
                            <img src="../public/images/pantone/coolorsrainbow.jpg" class="card-img-top" alt="soumoji">

                            <div class="card-body text-left">
                                <h5 class="card-title">RAINBOOW</h5>
                                <p class="card-text">#######</p>
                                
                            </div>

                            <div class="card-footer text-center border-0 bg-transparent">
                                <hr class="w-25 mx-auto mb-4">
                                <a href="#" class="btn btn-primary bg-dark border-0"> See more</a>
                            </div>
                        </div>
                    </div>  
                    
                    <!-- Col 4 -->
                    <div class="col-md-6 col-lg-3 p-3 text-center">
                        <div class="card p-3 text-center shadow-sm shadow-y">
                            <img src="../public/images/pantone/coolorsblack.jpg" class="card-img-top" alt="soumoji">

                            <div class="card-body text-left">
                                <h5 class="card-title">BLAACK</h5>
                                <p class="card-text">#000000</p>
                                
                            </div>

                            <div class="card-footer text-center border-0 bg-transparent">
                                <hr class="w-25 mx-auto mb-4">
                                <a href="#" class="btn btn-primary bg-dark border-0"> See more</a>
                            </div>
                        </div>
                    </div>  

                </div>
        </div>


    <!-- Bootstrap links -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

</body>
</html>