

<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Forms</title>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="style.css" rel="stylesheet">
   </head>
   <body class="app">
	<?php
         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         ?>
      <div id="loader">
         <div class="spinner"></div>
      </div>
      <script type="f195bb265fa7d2bce7864f42-text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script><?php include "../../../mainnav.php" ?>
      <div class="page-container">
         <div class="header navbar">
            <div class="header-container">
               <ul class="nav-left">
                  <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                  <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                  <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
               </ul>
               <ul class="nav-right">
                  <li class="notifications dropdown">
                     <span class="counter bgc-red">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                     <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                        <li>
                           <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500"><?php echo($accname); ?></span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                     </ul>
                  </li>
                  <li class="notifications dropdown">
                     <span class="counter bgc-blue">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                     <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                        <li>
                           <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0"><?php echo($accname); ?></p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0">Moo Doe</p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0">Lee Doe</p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                        <div class="peer mR-10"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                        <div class="peer"><span class="fsz-sm c-grey-900"><?php echo($accname); ?></span></div>
                     </a>
                     <ul class="dropdown-menu fsz-sm">
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <main class="main-content bgc-grey-100">
            <div id="mainContent">
               <div class="row gap-20 masonry pos-r">
                  <div class="masonry-sizer col-md-6"></div>
                  <div class="masonry-item col-md-6">
                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Basic Form</h6>
                        <div class="mT-30">
                           <form>
                              <div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small></div>
                              <div class="form-group"><label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></div>
                              <div class="checkbox checkbox-circle checkbox-info peers ai-c mB-15"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Call John for Dinner</span></label></div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="masonry-item col-md-6">
                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Complex Form Layout</h6>
                        <div class="mT-30">
                           <form>
                              <div class="form-row">
                                 <div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div>
                                 <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="password" class="form-control" id="inputPassword4" placeholder="Password"></div>
                              </div>
                              <div class="form-group"><label for="inputAddress">Address</label><input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></div>
                              <div class="form-group"><label for="inputAddress2">Address 2</label><input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"></div>
                              <div class="form-row">
                                 <div class="form-group col-md-6"><label for="inputCity">City</label><input type="text" class="form-control" id="inputCity"></div>
                                 <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                       <option selected="selected">Choose...</option>
                                       <option>...</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2"><label for="inputZip">Zip</label><input type="text" class="form-control" id="inputZip"></div>
                              </div>
                              <div class="form-group">
                                 <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer"><label for="inputCall2" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Call John for Dinner</span></label></div>
                              </div>
                              <button type="submit" class="btn btn-primary">Sign in</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="masonry-item col-md-6">
                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Horizontal Form</h6>
                        <div class="mT-30">
                           <form>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                 <div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3" placeholder="Email"></div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                 <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword3" placeholder="Password"></div>
                              </div>
                              <fieldset class="form-group">
                                 <div class="row">
                                    <legend class="col-form-legend col-sm-2">Radios</legend>
                                    <div class="col-sm-10">
                                       <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked"> Option one is this and that&mdash;be sure to include why it's great</label></div>
                                       <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"> Option two can be something else and selecting it will deselect option one</label></div>
                                       <div class="form-check disabled"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="disabled"> Option three is disabled</label></div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="form-group row">
                                 <div class="col-sm-2">Checkbox</div>
                                 <div class="col-sm-10">
                                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"> Check me out</label></div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-sm-10"><button type="submit" class="btn btn-primary">Sign in</button></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="masonry-item col-md-6">
                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Disabled Forms</h6>
                        <div class="mT-30">
                           <form>
                              <fieldset disabled="disabled">
                                 <div class="form-group"><label for="disabledTextInput">Disabled input</label><input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"></div>
                                 <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                       <option>Disabled select</option>
                                    </select>
                                 </div>
                                 <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"> Can't check this</label></div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="masonry-item col-md-6">
                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Validation</h6>
                        <div class="mT-30">
                           <form class="container" id="needs-validation" novalidate>
                              <div class="row">
                                 <div class="col-md-6 mb-3"><label for="validationCustom01">First name</label><input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required></div>
                                 <div class="col-md-6 mb-3"><label for="validationCustom02">Last name</label><input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">City</label><input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">State</label><input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                    <div class="invalid-feedback">Please provide a valid state.</div>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Zip</label><input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                 </div>
                              </div>
                              <button class="btn btn-primary" type="submit">Submit form</button>
                           </form>
                           <script type="f195bb265fa7d2bce7864f42-text/javascript">!function(){"use strict";window.addEventListener("load",function(){var t=document.getElementById("needs-validation");t.addEventListener("submit",function(e){!1===t.checkValidity()&&(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)},!1)}()</script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            <span>Copyright © 2017 Designed by <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
            <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="f195bb265fa7d2bce7864f42-text/javascript"></script>
            <script type="f195bb265fa7d2bce7864f42-text/javascript">
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               
               gtag('config', 'UA-23581568-13');
            </script>
         </footer>
      </div>
      </div><script type="f195bb265fa7d2bce7864f42-text/javascript" src="vendor.js"></script><script type="f195bb265fa7d2bce7864f42-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="f195bb265fa7d2bce7864f42-|49" defer=""></script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>
