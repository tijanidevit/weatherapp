
  <header class="float-start w-100">
    <div class="top-bar">
     
      <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container">
           <a class="navbar-brand" href="./">
             <img src="images/logo.png" alt="logo"/>
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
              </li>
               <li class="nav-item">
                 <a class="nav-link" href="current">Current Forecast</a>
               </li>
               
               <li class="nav-item">
                  <a  class="nav-link" href="periodic"> Periodic Forecast</a>
               </li>
             </ul>


             
           </div>

           <div class="right-menu-sec col-lg-1">
            <ul class="list-unstyled d-flex m-0 align-items-center justify-content-end">
              <li class="d-none d-md-block ">
                <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn login-btn"> Login </a>
              </li>    
            </ul>
          </div>
         </div>
       </nav>    
    </div>
  </header>







  

<!-- mobile menu -->

<div class="offcanvas offcanvas-start mobile-menu-div" tabindex="-1" id="mobile-menu">
  <div class="offcanvas-header">
    
     <button type="button" class="close-menu" data-bs-dismiss="offcanvas" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
      </svg>
     </button>
  </div>
  
      
    <div class="offcanvas-body">
      
      <div class="head-contact">
         <a href="./" class="logo-side">
         <img src="images/logo.png" alt="logo">
         </a>
         
         <div class="mobile-menu-sec mt-3">
            <ul class="list-unstyled">
               <li class="active-m">
                  <a href="./"> Home </a>
               </li>
               <li>
                  <a href="current"> Current Forecast </a>
               </li>
               
               <li>
                  <a href="periodic"> Periodic Forecast</a>
               </li>
               <li class="">
                   <a data-bs-toggle="modal" data-bs-target="#loginModal"> Login </a>
                </li> 
            </ul>
         </div>
         
         <ul class="side-media list-unstyled">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
         </ul>
      </div>
    </div>
    
 
</div>