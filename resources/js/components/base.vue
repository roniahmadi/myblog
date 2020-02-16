<template>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Dashboards</li>
                        <li>
                            <a href="index.html" class="mm-active">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Inventori</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Barang
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="elements-buttons-standard.html">
                                        <i class="metismenu-icon"></i>
                                        Stok Barang
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon"></i>
                                        Utilities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Toko
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="elements-buttons-standard.html">
                                        <i class="metismenu-icon"></i>
                                        List Toko
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon"></i>
                                        Jenis Toko
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon"></i>
                                        Kategori Toko
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">User & Role</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                User
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="elements-buttons-standard.html">
                                        <i class="metismenu-icon"></i>
                                        List User
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon"></i>
                                        Role User
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Orders</div>
                                        <div class="widget-subheading">Last year expenses</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">1896</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning">$3M</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Followers</div>
                                        <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger">45,9%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Income</div>
                                        <div class="widget-subheading">Expected totals</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-focus">$147</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                    </div>
                                    <div class="progress-sub-label">
                                        <div class="sub-label-left">Expenses</div>
                                        <div class="sub-label-right">100%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Active Users
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="active btn btn-focus">Last Week</button>
                                        <button class="btn btn-focus">All Month</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">City</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">John Doe</div>
                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Madrid</td>
                                        <td class="text-center">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#347</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Ruben Tillman</div>
                                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Berlin</td>
                                        <td class="text-center">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#321</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Elliot Huber</div>
                                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">London</td>
                                        <td class="text-center">
                                            <div class="badge badge-danger">In Progress</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#55</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Amsterdam</td>
                                        <td class="text-center">
                                            <div class="badge badge-info">On Hold</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-right">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        Created By Ronikediri.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
