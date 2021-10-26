<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts List</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Candal&family=Lato&display=swap" rel="stylesheet">
        
        <!-- CSS -->
        <link rel="stylesheet" href="../../../assets/css/style.css">
    </head>
    <body>
    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">Michel HATHIER</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse dual-collapse2">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Posts</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign in</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-cog"></i> Admin</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt text-danger"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>  
        </nav>
        <!-- SINGLE POST -->
        <section class="list-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row row-cols-1 row-cols-md-2 g-4 pb-4">
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/lorem.jpg" class="card-img-top" alt="webdev pic">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/js.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/design.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/lorem.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row row-cols-1 row-cols-md-2 g-4 pb-4">
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/js.jpg" class="card-img-top" alt="webdev pic">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/design.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/lorem.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="../../../assets/images/js.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-top d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Featured Post</h5>
                                        <span class="badge bg-success">Tag</span>
                                        </div>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="card-meta d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clock"></i></span>
                                    <span><i class="fas fa-user"></i></span>
                                <button class="btn btn-danger">Read more</button>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-xl-3">
                        <aside class="aside-tags mb-4">
                            <h5 class="tags-title">Tags</h5> 
                            <ul>
                              <li><a href="#">Database</a></li>
                              <li><a href="#">Git/Github</a></li>
                              <li><a href="#">HTML5/CSS3</a></li>
                              <li><a href="#">Framework</a></li>
                              <li><a href="#">PHP/Symfony</a></li>
                              <li><a href="#">Javascript</a></li>
                              <li><a href="#">Sécurity</a></li>
                            </ul>     
                        </aside>
                        <aside class="aside-posts mb-4">
                            <h5 class="posts-title">Recent posts</h5> 
                            <ul>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                                <li><a href="#">Feature post</a></li>
                            </ul>     
                        </aside>
                        <aside class="aside-comments">
                            <h5 class="posts-title">Recent comments</h5> 
                            <ul>
                                <li><a href="postsingle.html">Dave le 15/09/2021 dans feature post</a></li>
                                <li><a href="postsingle.html">Mike le 13/09/2021 dans feature post</a></li>
                                <li><a href="#">Léa le 10/09/2021 dans feature post</a></li>
                                <li><a href="#">Paul le 05/09/2021 dans feature post</a></li>
                            </ul>     
                        </aside>
                    </div>
                </div>
            </div>       
        </section>      
        <!-- FOOTER -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg></a>
                    </div>
                </div>
            </div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="../../../assets/js/main.js"></script>

    </body>
</html>

                        