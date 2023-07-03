<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>Hệ thống quản trị</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/admin/img/logoicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="..\..\assets\admin\css\vendor.min.css" />
  <link rel="stylesheet" href="..\..\assets\admin\vendor\icon-set\style.css" />

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="..\..\assets\admin\css\theme.min.css" />


</head>

<body class="footer-offset">
  <script src="..\..\assets\admin\vendor\hs-navbar-vertical-aside\hs-navbar-vertical-aside-mini-cache.js"></script>


  <!-- ONLY DEV -->

  <!-- JS Preview mode only -->
  <div id="headerMain" class="d-none">
    <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
      <div class="navbar-nav-wrap">
        <div class="navbar-nav-wrap-content-left">
          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
            <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
            <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
          </button>
          <!-- End Navbar Vertical Toggle -->
          <!-- Search Form -->
          <!-- <div class="d-none d-md-block">
            <form class="position-relative m-0">
             
              <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input type="search" class="js-form-search form-control" placeholder="Tìm kiếm..." aria-label="Tìm kiếm..." data-hs-form-search-options='{
                     "clearIcon": "#clearSearchResultsIcon",
                     "dropMenuElement": "#searchDropdownMenu",
                     "dropMenuOffset": 20,
                     "toggleIconOnFocus": true,
                     "activeClass": "focus"
                   }' />
                <a class="input-group-append" href="javascript:;">
                  <span class="input-group-text">
                    <i id="clearSearchResultsIcon" class="tio-clear" style="display: none"></i>
                  </span>
                </a>
              </div>
           
            </form>
          </div> -->
          <!-- End Search Form -->

        </div>

        <!-- Secondary Content -->
        <div class="navbar-nav-wrap-content-right">
          <!-- Navbar -->
          <ul class="navbar-nav align-items-center flex-row">
            <li class="nav-item">
              <!-- Account -->
              <div class="hs-unfold">

                <div style="display:flex; align-items: center;"><span style="font-size: 14px; font-weight: 600; color: #000;" class="mr-2">Xin chào: <span style="color: #E68441; font-size: 14px; font-weight: 600px;"><?php session_start();
                                                                                                                                                                                                                        echo $_SESSION['showuser'] ?></span></span><a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="..\..\assets\admin\img\160x160\img1.jpg" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a></div>


                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                  <div class="dropdown-item-text">
                    <div class="media align-items-center">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="..\..\assets\admin\img\160x160\img1.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="card-title h5"><?php
                                                    echo $_SESSION['showten'] ?></span>
                        <span class="card-text"><?php
                                                echo $_SESSION['showemail'] ?></span>
                      </div>
                    </div>
                  </div>



                  <div class="dropdown-divider"></div>


                  <a class="dropdown-item" href="../.././index.php">
                    <span class="text-truncate pr-2" title="Manage team">Khách hàng</span>
                  </a>
                  <a class="dropdown-item" href="../.././index.php?act=logout">
                    <span class="text-truncate pr-2" title="Sign out">Đăng xuất</span>
                  </a>
                </div>
              </div>
              <!-- End Account -->
            </li>
          </ul>
          <!-- End Navbar -->
        </div>
        <!-- End Secondary Content -->
      </div>
    </header>
  </div>

  <div id="headerFluid" class="d-none">
    <header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered"></header>
  </div>
  <div id="headerDouble" class="d-none">
    <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0"></header>
  </div>