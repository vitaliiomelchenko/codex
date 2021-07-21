<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <header class="header">
        <nav class="nav">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8 d-none d-md-block">
                        <div class="d-flex justify-content-end">
                            <ul class="nav-list">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        For SME’s
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        For Recruiters
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                            <div class="actions">
                                <a href="#" class="user">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/user-icon.svg" alt="">
                                </a>
                                <a href="#" class="linkedin">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/in-icon.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-md-none pr-3">
                        <div class="mobile-open" id="mobileOpen">
                            <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="m12 24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12zm0-23c-6.065 0-11 4.935-11 11s4.935 11 11 11 11-4.935 11-11-4.935-11-11-11z"/></g><g><path d="m16.5 8h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g><g><path d="m16.5 12.5h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g><g><path d="m16.5 17h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <div class="close" id="mobileClose">
                    <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            For SME’s
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            For Recruiters
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="actions">
                    <a href="#" class="user">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/user-icon.svg" alt="">
                    </a>
                    <a href="#" class="linkedin">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/in-icon.svg" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </header>