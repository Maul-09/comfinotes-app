<x-adminlayout>
    <div class="waviy">
        <span style="--i:1">L</span>
        <span style="--i:2">o</span>
        <span style="--i:3">a</span>
        <span style="--i:4">d</span>
        <span style="--i:5">i</span>
        <span style="--i:6">n</span>
        <span style="--i:7">g</span>
        <span style="--i:8">.</span>
        <span style="--i:9">.</span>
        <span style="--i:10">.</span>
     </div>
 </div>
         {{-- Navbar Head --}}
     <div class="header">
         <div class="header-content">
             <nav class="navbar navbar-expand">
                 <div class="collapse navbar-collapse justify-content-between">
                     <div class="header-left">
                         <div class="dashboard_bar">
                             Transaksi Keuangan
                         </div>
                     </div>
                     <ul class="navbar-nav header-right">
                         <li class="nav-item">
                             <div class="input-group search-area">
                                 <input type="text" class="form-control" placeholder="Search here...">
                                 <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                             </div>
                         </li>
                         <li class="nav-item dropdown notification_dropdown">
                             <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#4f7086"></path>
                                 </svg>
                                 <span class="badge light text-white bg-primary rounded-circle">1</span>
                             </a>
                             <div class="dropdown-menu dropdown-menu-end">
                                 <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-2" style="height:380px;">
                                 <h5 class="p-3 fw-bold">Notification</h5>
                                 </div>
                                 <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
     </div>
     {{-- End Navbar Head --}}

     <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-block d-sm-flex border-0">
                            <div class="me-3">
                                <h4 class="card-title mb-2">Payment History</h4>
                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                            </div>
                            <div class="card-tabs mt-3 mt-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body tab-content p-0">
                            <div class="tab-pane fade active show" id="monthly" role="tabpanel">
                                <div id="accordion-one" class="accordion style-1">
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne1">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip3)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip3">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">XYZ Store ID</a></h6>
                                                    <span class="fs-14">Online Shop</span>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne1" class="collapse accordion_body" data-bs-parent="#accordion-one">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#default_collapseOne2">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip31)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip31">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Olivia Brownlee</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-success light" href="javascript:void(0);">Completed</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne2" class="collapse accordion_body show" data-bs-parent="#accordion-one">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne3">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip32)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip32">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Angela Moss</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-dark light" href="javascript:void(0);">Canceled</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne3" class="collapse accordion_body" data-bs-parent="#accordion-one">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne4">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip33)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip33">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">XYZ Store ID</a></h6>
                                                    <span class="fs-14">Online Shop</span>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne4" class="collapse accordion_body" data-bs-parent="#accordion-one">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne5">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/5.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip34)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip34">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Peter Parkur</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne5" class="collapse accordion_body" data-bs-parent="#accordion-one">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Weekly" role="tabpanel">
                                <div id="accordion-one1" class="accordion style-1">
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne11">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip35)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip35">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">XYZ Store ID</a></h6>
                                                    <span class="fs-14">Online Shop</span>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne11" class="collapse accordion_body" data-bs-parent="#accordion-one1">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#default_collapseOne21">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip36)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip36">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Olivia Brownlee</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-success light" href="javascript:void(0);">Completed</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne21" class="collapse accordion_body show" data-bs-parent="#accordion-one1">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne31">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip37)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip37">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Angela Moss</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-dark light" href="javascript:void(0);">Canceled</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne31" class="collapse accordion_body" data-bs-parent="#accordion-one1">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne41">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip38)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip38">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">XYZ Store ID</a></h6>
                                                    <span class="fs-14">Online Shop</span>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne41" class="collapse accordion_body" data-bs-parent="#accordion-one1">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Today" role="tabpanel">
                                <div id="accordion-one2" class="accordion style-1">
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne12">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip39)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip39">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">XYZ Store ID</a></h6>
                                                    <span class="fs-14">Online Shop</span>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-danger light" href="javascript:void(0);">Pending</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne12" class="collapse accordion_body" data-bs-parent="#accordion-one2">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#default_collapseOne22">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip310)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip310">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Olivia Brownlee</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-success light" href="javascript:void(0);">Completed</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne22" class="collapse accordion_body show" data-bs-parent="#accordion-one2">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne32">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                    <span class="bg-success">
                                                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip311)">
                                                            <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"></path>
                                                            <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                            <clippath id="clip311">
                                                            <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"></rect>
                                                            </clippath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">Angela Moss</a></h6>
                                                </div>
                                            </div>
                                            <span>June 5, 2020, 08:22 AM</span>
                                            <span>+$5,553</span>
                                            <span>MasterCard 404</span>
                                            <a class="btn btn-dark light" href="javascript:void(0);">Canceled</a>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="default_collapseOne32" class="collapse accordion_body" data-bs-parent="#accordion-one2">
                                            <div class="payment-details accordion-body-text">
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">ID Payment</p>
                                                    <span class="font-w500">#00123521</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Payment Method</p>
                                                    <span class="font-w500">MasterCard 404</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Invoice Date</p>
                                                    <span class="font-w500">April 29, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Due Date</p>
                                                    <span class="font-w500">June 5, 2020</span>
                                                </div>
                                                <div class="me-3 mb-3">
                                                    <p class="fs-12 mb-2">Date Paid</p>
                                                    <span class="font-w500">June 4, 2020</span>
                                                </div>
                                                <div class="info mb-3">
                                                    <svg class="me-3" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#fff"></path>
                                                        <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#fff"></path>
                                                        <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#fff"></path>
                                                    </svg>
                                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="col-xl-9 col-xxl-12">
                    <div class="card">
                        <div class="card-header d-block d-sm-flex border-0">
                            <div>
                                <h4 class="card-title mb-2">Invoices Sent</h4>
                                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="invoice-list">
                                <img src="images/avatar/1.jpg" alt="" class="rounded-circle me-3">
                                <div class="me-auto">
                                    <h6 class="fs-16 font-w600 mb-0"><a href="page-invoices.html" class="text-black">FSoziety</a></h6>
                                    <span class="fs-12">4h ago</span>
                                </div>
                                <span class="fs-16 text-black font-w600">$45</span>
                            </div>
                            <div class="invoice-list">
                                <img src="images/avatar/2.jpg" alt="" class="rounded-circle me-3">
                                <div class="me-auto">
                                    <h6 class="fs-16 font-w600 mb-0"><a href="page-invoices.html" class="text-black">FSoziety</a></h6>
                                    <span class="fs-12">4h ago</span>
                                </div>
                                <span class="fs-16 text-black font-w600">$45</span>
                            </div>
                            <div class="invoice-list">
                                <img src="images/avatar/3.jpg" alt="" class="rounded-circle me-3">
                                <div class="me-auto">
                                    <h6 class="fs-16 font-w600 mb-0"><a href="page-invoices.html" class="text-black">FSoziety</a></h6>
                                    <span class="fs-12">4h ago</span>
                                </div>
                                <span class="fs-16 text-black font-w600">$45</span>
                            </div>
                            <div class="invoice-list">
                                <img src="images/avatar/4.jpg" alt="" class="rounded-circle me-3">
                                <div class="me-auto">
                                    <h6 class="fs-16 font-w600 mb-0"><a href="page-invoices.html" class="text-black">FSoziety</a></h6>
                                    <span class="fs-12">4h ago</span>
                                </div>
                                <span class="fs-16 text-black font-w600">$45</span>
                            </div>
                            <div class="invoice-list">
                                <img src="images/avatar/5.jpg" alt="" class="rounded-circle me-3">
                                <div class="me-auto">
                                    <h6 class="fs-16 font-w600 mb-0"><a href="page-invoices.html" class="text-black">FSoziety</a></h6>
                                    <span class="fs-12">4h ago</span>
                                </div>
                                <span class="fs-16 text-black font-w600">$45</span>
                            </div>
                        </div>
                        <div class="card-footer border-0">
                            <a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-lg">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</x-adminlayout>
