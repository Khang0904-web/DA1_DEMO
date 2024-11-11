<?php
namespace App\Views\Admin\Layouts;
use App\Helpers\AuthHelper;
use App\Views\BaseView;

class Header extends BaseView
{
    public static function render($data = null)
    {
        ?>


        <!DOCTYPE html>
        <html lang="en">
        <!--begin::Head-->

        <head>
            <title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
            <meta charset="utf-8" />
            <meta name="description"
                content="The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
            <meta name="keywords"
                content="tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta property="og:locale" content="en_US" />
            <meta property="og:type" content="article" />
            <meta property="og:title"
                content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
            <meta property="og:url" content="https:/keenthemes.com/metronic" />
            <meta property="og:site_name" content="Metronic by Keenthemes" />
            <link rel="canonical" href="http:/preview.keenthemes.comindex.html" />
            <link rel="shortcut icon" href="/public/assets/media/logos/favicon.ico" />
            <!--begin::Fonts(mandatory for all pages)-->
            <link rel="stylesheet" href="https:/fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
            <!--end::Fonts-->
            <!--begin::Vendor Stylesheets(used for this page only)-->
            <link href="/public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <link href="/public/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Vendor Stylesheets-->
            <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
            <link href="/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
            <link href="/public/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="public/assets/css/style.css">
            <!--end::Global Stylesheets Bundle-->
            <script>
                / Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
            </script>
        </head>
        <!--end::Head-->
        <!--begin::Body-->

        <body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
            data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true" class="app-default">
            <!--begin::Theme mode setup on page load-->
            <script>
                var defaultThemeMode = "light";
                var themeMode;
                if (document.documentElement) {
                    if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                    } else {
                        if (localStorage.getItem("data-bs-theme") !== null) {
                            themeMode = localStorage.getItem("data-bs-theme");
                        } else {
                            themeMode = defaultThemeMode;
                        }
                    }
                    if (themeMode === "system") {
                        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                    }
                    document.documentElement.setAttribute("data-bs-theme", themeMode);
                }
            </script>
            <!--end::Theme mode setup on page load-->
            <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
                <!--begin::Page-->
                <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                    <!--begin::Header-->
                    <div id="kt_app_header" class="app-header d-flex">
                        <!--begin::Header container-->
                        <div class="app-container container-fluid d-flex align-items-center justify-content-between"
                            id="kt_app_header_container">
                            <!--begin::Logo-->
                            <div class="app-header-logo d-flex flex-center">
                                <!--begin::Logo image-->
                                <a href="index.html">
                                    <img alt="Logo" src="/public/uploads/image/3-removebg-preview.png" width="100%"
                                        height="135px"/>
                                </a>
                                <!--end::Logo image-->
                                <!--begin::Sidebar toggle-->
                                <button class="btn btn-icon btn-sm btn-active-color-primary d-flex d-lg-none"
                                    id="kt_app_sidebar_mobile_toggle">
                                    <i class="ki-outline ki-abstract-14 fs-1"></i>
                                </button>
                                <!--end::Sidebar toggle-->
                            </div>
                            <!--end::Logo-->
                            <div class="d-flex flex-lg-grow-1 flex-stack" id="kt_app_header_wrapper">
                                <div class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0"
                                    data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                                    data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                                    <!--begin::Page title-->

                                    <!--end::Page title-->
                                    <div class="d-flex gap-3 gap-lg-8 flex-wrap">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-warning">
                                                <i class="ki-outline ki-abstract-13 fs-2 text-inverse-warning"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold fs-base text-gray-900">Target A</span>
                                                <span class="fw-semibold fs-7 text-gray-500">Uplift: 64%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Navbar-->
                                <div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">

                                    <!--end::Notifications-->
                                    <!--begin::User menu-->
                                    <div class="app-navbar-item" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-40px"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                            <img src="/public/assets/media/avatars/300-2.jpg" class="rounded-3" alt="user" />
                                        </div>
                                        <!--begin::User account menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="assets/media/avatars/300-2.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bold d-flex align-items-center fs-5">Ana Fox
                                                            <span
                                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-semibold text-muted text-hover-primary fs-7">ana@kt.com</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="" class="menu-link px-5">My Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="" class="menu-link px-5">
                                                    <span class="menu-text">My Projects</span>
                                                    <span class="menu-badge">
                                                        <span
                                                            class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                                    </span>
                                                </a>
                                            </div>

                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::User account menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User menu-->
                                </div>
                                <!--end::Navbar-->
                            </div>
                        </div>
                        <!--end::Header container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Wrapper-->
                    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                        <!--begin::Sidebar-->
                        <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                            <!--begin::Primary menu-->
                            <div id="kt_aside_menu_wrapper"
                                class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-lg-ps my-5 pt-8" data-kt-scroll="true"
                                data-kt-scroll-height="auto"
                                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                                <!--begin::Menu-->
                                <div id="kt_aside_menu"
                                        class="menu menu-rounded menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                                        data-kt-menu="true">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start" class="menu-item here show py-2">
                                            <!--begin:Menu link-->
                                            <span class="menu-link menu-center">
                                                <span class="menu-icon me-0">
                                                    <i class="ki-outline ki-home-2 fs-1"></i>
                                                </span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu content-->
                                                    <div class="menu-content">
                                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                                                    </div>
                                                    <!--end:Menu content-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link active" href="index.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Default</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->

                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                    </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Primary menu-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
                                <!--begin::Menu toggle-->
                                <a href="#" class="btn btn-icon btn-active-color-primary"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-night-day theme-light-show fs-2x"></i>
                                    <i class="ki-outline ki-moon theme-dark-show fs-2x"></i>
                                </a>
                                <!--begin::Menu toggle-->
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-night-day fs-2"></i>
                                            </span>
                                            <span class="menu-title">Light</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-moon fs-2"></i>
                                            </span>
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-screen fs-2"></i>
                                            </span>
                                            <span class="menu-title">System</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Sidebar-->
                        <!--begin::Main-->
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                            <!--begin::Content wrapper-->
                            <div class="d-flex flex-column flex-column-fluid">
                                <!--begin::Content-->
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class="app-container container-fluid">
                                        <!--begin::Row-->
                                        <div class="row g-5 g-xl-10">
                                            



                                            <?php

    }
}

?>