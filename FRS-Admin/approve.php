
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard
        </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    
    
    
    <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  



<div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/BIT.png" class="img-fluid"/><span>FRS-BIT</span></h3>
            </div>
            <ul class="list-unstyled components">
            <li  class="active">
                    <a href="index.html" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="upload.html">
                    <i class="material-icons">upload</i><span>Upload Materials</span></a>
                </li>
                
                <li class="dropdown">
                    <a href="feedback.html">
                    <i class="material-icons">feedback</i><span>Feedback</span></a>

              <li class="dropdown">
                   <a href="profile.html">
                   <i class="material-icons">person</i><span>User Profile</span></a>    
        </nav>
        
        

        <!-- Page Content  -->
        <div id="content">
        
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
                    
                    <a class="navbar-brand" href="#">Upload Materials</a>
                    
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a href="feedback.html" class="nav-link">
                                   <span class="material-icons">notifications</span>
                               </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">
                                <span class="material-icons">person</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span class="material-icons">logout</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
            
            
                            
                    <div class="row ">
                      
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Upload Materials</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                            <form>
                                            <tr>
                                                <td>

                                                    <label for="Lp">Lesson Plan : </label><br> 
                                               </td>
                                               <td>
                                                <a href="C:\xampp\htdocs\FRS\FRS-Admin\lp.php">View</a>
                                               </td>
                                                <td>
                                                    <script src="https://smtpjs.com/v3/smtp.js">
                                                    </script>
                                                    <script src="index.js"></script>
                                                    <button style="background-color: greenyellow; border: 0ex;" onclick="sendEmail()">Accept</button>
                                                    <button style="background-color: red;border: 0ex;">Decline</button>

                                                </td>
                                                <td>
                                                    <label for="Fb1">Feedback : </label><br>
                                                    <input type="text" id="Fb1" name="Fb1" size="40">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Lm">Lecture Material : </label><br>
                                                </td>
                                                <td>
                                                    <a href="https://wiki.bitsathy.ac.in/w/img_auth.php/4/48/22MA101_LM1.pdf">View</a>
                                                </td>
                                                <td>
                                                    <button style="background-color: greenyellow; border: 0ex;">Accept</button>
                                                    <button style="background-color: red;border: 0ex;">Decline</button>

                                                </td>
                                                <td>
                                                    <label for="Fb2">Feedback : </label><br>
                                                    <input type="text" id="Fb2" name="Fb2" size="40">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Lv">Lecture Video : </label><br>  
                                                    </td>
                                                    <td>
                                                        <a href="https://drive.google.com/file/d/1Nc49nclI-mkOKbfAxqomtaRx5dHWRIxI/view?usp=sharing">View</a>
                                                    </td>                                              </td>
                                                <td>
                                                    <button style="background-color: greenyellow; border: 0ex;">Accept</button>
                                                    <button style="background-color: red;border: 0ex;">Decline</button>

                                                </td>
                                                <td>
                                                    <label for="Fb3">Feedback : </label><br>
                                                    <input type="text" id="Fb3" name="Fb3" size="40">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    
                                                    <label for="Dq">Discussion Question : </label><br>   
                                                </td>
                                                <td>
                                                    <a href="https://wiki.bitsathy.ac.in/wiki/22MA101_LP1_DQ">View</a>
                                                </td>
                                                <td>
                                                    <button style="background-color: greenyellow; border: 0ex;">Accept</button>
                                                    <button style="background-color: red;border: 0ex;">Decline</button>

                                                </td>
                                                <td>
                                                    <label for="Fb4">Feedback : </label><br>
                                                    <input type="text" id="Fb4" name="Fb4" size="40">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="Dl">Discourse Link : </label><br>
                                               </td>
                                               <td>
                                                <a href="https://discourse.bitsathy.ac.in/t/uint-1-class-1-basics-of-functions-and-linear-function/24401?u=revathi_v_m">View</a>
                                               </td>
                                                <td>
                                                    <button style="background-color: greenyellow; border: 0ex;">Accept</button>
                                                    <button style="background-color: red;border: 0ex;">Decline</button>

                                                </td>
                                                <td>
                                                    <label for="Fb5">Feedback : </label><br>
                                                    <input type="text" id="Fb5" name="Fb5" size="40">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit">
                                                </td>
                                            </tr>
                                         </form>
                                        </tbody>
                                    </table>
                                </div>
                            
                        </div>
                    
                    </div>
                    
                

        </div>
    </div>






    
  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
            
             $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
            
        });


     
           
       
</script>
  
  



  </body>
  
  </html>


