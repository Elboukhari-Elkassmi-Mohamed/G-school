<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 background ">
                
                <div class="d-flex flex-column  align-items-center px-3 pt-2 text-white min-vh-100 ps-5">
                    <a href="<?php echo URLROOT; ?>/Controller/index" class="d-none d-sm-inline pb-sm-3 mb-md-1 me-md-auto text-black text-decoration-none">
                        <span class=" fs-6 py-0 me-2"></span> <h3 class=" fw-bolder text-dark  ps-2 " style="font-size: 25px;">YOUCODE</h3>
                    </a>
                    <div class="d-flex flex-column align-items-center ">
                    <img src="<?php echo URLROOT;?>/img/forest.jpg" alt="hugenerd" width="70" height="70" class="rounded-circle  mt-1">
                    <h4 class="text-dark mt-3 h6 " style="font-size: 14px;"> <b> Noureddine Maher </b></h4>
                    <p class="admin-sidebar" style="font-size: 11px;">Admin</p>
                    </div>
                    
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                        <li class="nav-item " style="font-size: 16px;">
                            <a href="<?php echo URLROOT;?>/pages/statistique" class="nav-link align-middle     text-dark">
                                <i class="fal fa-home-lg-alt px-1 ic"></i> <span class="ms-1 d-none d-sm-inline mt-4  prop">Statistiques</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo URLROOT;?>/etudiants/showStudents" class="nav-link   align-middle text-dark">
                                <i  class="far fa-bookmark px-1 ic " ></i> <span class="ms-1 d-none d-sm-inline  prop">Etudiants</span> </a>
                        </li>
                        <li class="">
                            <a href="<?php echo URLROOT;?>/professeurs/viewprof" class="nav-link align-middle  text-dark">
                                <i class="fal fa-graduation-cap ic"></i> <span class="ms-1 d-none d-sm-inline prop">Professeur</span></a>
                        </li>
                        <li class="">
                            <a href="<?php echo URLROOT;?>/parents/viewparent" class="nav-link    align-middle text-dark ">
                                <i class="far fa-usd-square ic "></i> <span class="ms-1 d-none d-sm-inline prop">Parents</span></a>
                        </li>
                        <li class="">
                            <a href="<?php echo URLROOT;?>/pages/admin"  class="nav-link  align-middle text-dark ">
                                <i class="fal fa-file-chart-line ic"></i> <span class="ms-1 d-none d-sm-inline prop">Admins</span></a>
                        </li> 
                        <li class="">
                            <a href="<?php echo URLROOT; ?>/users/logout" class="nav-link mt-sm-4   text-dark">
                                <span class="d-none d-sm-inline px-sm-1 logout-sidebar">Logout</span><i class="fal fa-sign-out-alt fs-5 ic "></i></a>
                        </li>
                </div>
            </div>