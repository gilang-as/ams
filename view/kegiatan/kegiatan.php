<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kegiatan - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo $domain;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div class="wrapper">
            <?php tema('navbar');?>
            <div class="content-page">
                <div class="content">
                    <?php tema('header');?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i> Create Project</button>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-primary">All</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-1">
                                        <button type="button" class="btn btn-light">Ongoing</button>
                                        <button type="button" class="btn btn-light">Finished</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-2 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-dark"><i class="dripicons-view-apps"></i></button>
                                    </div>
                                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-link text-dark"><i class="dripicons-checklist"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="assets/images/projects/project-1.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="javascript:void(0);" class="text-dark">Company logo design</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>3</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>104</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">45%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="assets/images/projects/project-2.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-success p-1">Finished</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="javascript:void(0);" class="text-dark">Landing page design - Home</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>11</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>254</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-dark font-weight-bold ml-2">
                                                +2 more
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">100%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="assets/images/projects/project-3.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="javascript:void(0);" class="text-dark">Product page redesign</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>21</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>668</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-dark font-weight-bold ml-2">
                                                +5 more
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">71%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="assets/images/projects/project-4.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="javascript:void(0);" class="text-dark">Coffee detail page - Main Page</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>18</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>259</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">52%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php tema('footer');?>

            </div>


        </div>
        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
    </body>
</html>
