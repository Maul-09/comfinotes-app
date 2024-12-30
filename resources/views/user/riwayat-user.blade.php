<x-layout-user>
    <div id="preloader">
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
                                    Riwayat Transaksi
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

            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="d-flex mb-3">
                        <div class="mb-3 align-items-center me-auto">
                            <h4 class="card-title">Payment History</h4>
                            <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-outline-primary mb-3"><i class="fa fa-calendar me-3 scale3"></i>Filter Date</a>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive fs-14">
                                <table class="table card-table display mb-4 dataTablesCard " id="example5">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                  <label class="form-check-label" for="checkAll">
                                                  </label>
                                                </div>
                                            </th>
                                            <th>ID Invoice</th>
                                            <th>Date</th>
                                            <th>Recipient</th>
                                            <th>Email</th>
                                            <th>Service Type</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                  <label class="form-check-label" for="flexCheckDefault2">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                                                        <span class="fs-14">Online Shop</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">xyzstore@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                  <label class="form-check-label" for="flexCheckDefault3">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/2.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Hawkins Jr.</h6>
                                                        <span class="fs-14">@hawkins</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">hawkins@mail.com</span></td>
                                            <td><span class="text-black">Clean Up </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                  <label class="form-check-label" for="flexCheckDefault4">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/3.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Kevin Samuel</h6>
                                                        <span class="fs-14">@kevin</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">kevin@mail.com</span></td>
                                            <td><span class="text-black">Upgrade Component </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                  <label class="form-check-label" for="flexCheckDefault5">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/4.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Jons Sitepu</h6>
                                                        <span class="fs-14">@jonsitepu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">jons@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance  </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-dark light">Canceled</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                  <label class="form-check-label" for="flexCheckDefault6">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/5.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Brian Harefa</h6>
                                                        <span class="fs-14">@brianharefa</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">brian@mail.com</span></td>
                                            <td><span class="text-black">Clean Up</span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                  <label class="form-check-label" for="flexCheckDefault7">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/6.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">David Here</h6>
                                                        <span class="fs-14">@davidhere</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">davidhere@mail.com</span></td>
                                            <td><span class="text-black">Upgrade Component </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-dark light">Canceled</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                                  <label class="form-check-label" for="flexCheckDefault8">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/7.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Fanny Stefanus</h6>
                                                        <span class="fs-14">@fannystefan</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">fannystevan@mail.com</span></td>
                                            <td><span class="text-black">Clean Up</span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                                  <label class="form-check-label" for="flexCheckDefault9">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/8.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                                                        <span class="fs-14">Online Shop</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">xyzstore@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                                                  <label class="form-check-label" for="flexCheckDefault10">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/5.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                                                        <span class="fs-14">Online Shop</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">xyzstore@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                                  <label class="form-check-label" for="flexCheckDefault11">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                                                        <span class="fs-14">Online Shop</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">xyzstore@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                  <label class="form-check-label" for="flexCheckDefault12">
                                                  </label>
                                                </div>
                                            </td>
                                            <td><span class="text-black font-w500">#123412451</span></td>
                                            <td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
                                                    <div>
                                                        <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                                                        <span class="fs-14">Online Shop</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-black">xyzstore@mail.com</span></td>
                                            <td><span class="text-black">Server Maintenance </span></td>
                                            <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layout-user>
