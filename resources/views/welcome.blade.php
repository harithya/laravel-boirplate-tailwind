<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>

<body>
    <div id="app">
        <!-- Sidebar Starts -->
        <aside class="sidebar">
            <!-- Sidebar Header Starts -->
            <a href="/">
                <div class="sidebar-header">
                    <div class="sidebar-logo-icon">
                        <img src="/svg/logo-small.svg" alt="logo" class="h-[45px]" />
                    </div>

                    <div class="sidebar-logo-text">
                        <h1 class="flex text-xl">
                            <span class="font-bold text-slate-800 dark:text-slate-200"> Admin </span>
                            <span class="font-semibold text-primary-500">Toolkit</span>
                        </h1>

                        <p class="whitespace-nowrap text-xs text-slate-400">Simple &amp; Customizable</p>
                    </div>
                </div>
            </a>
            <!-- Sidebar Header Ends -->

            <!-- Sidebar Menu Starts -->
            <ul class="sidebar-content">
                <!-- Dashboard -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-menu-text">Dashboard</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="/" class="sidebar-submenu-item"> Analytics </a>
                        </li>
                        <li>
                            <a href="./ecommerce.html" class="sidebar-submenu-item">Ecommerce</a>
                        </li>
                    </ul>
                </li>

                <div class="sidebar-menu-header">Applications</div>

                <!-- Email -->
                <li>
                    <a href="./email.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="mail"></i>
                        </span>
                        <span class="sidebar-menu-text">Email</span>
                    </a>
                </li>
                <!-- Chat -->
                <li>
                    <a href="./chat.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="message-square"></i>
                        </span>
                        <span class="sidebar-menu-text">Chat</span>
                    </a>
                </li>
                <!-- Calendar -->
                <li>
                    <a href="./calendar.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="calendar"></i>
                        </span>
                        <span class="sidebar-menu-text">Calendar</span>
                    </a>
                </li>
                <!-- Invoice -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="sidebar-menu-text">Invoice</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./invoice-create.html" class="sidebar-submenu-item"> Create </a>
                        </li>

                        <li>
                            <a href="./invoice-details.html" class="sidebar-submenu-item"> Details </a>
                        </li>
                    </ul>
                </li>
                <!-- ecommnerce -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="shopping-bag"></i>
                        </span>
                        <span class="sidebar-menu-text">Ecommerce</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./product-list.html" class="sidebar-submenu-item"> Product List </a>
                        </li>

                        <li>
                            <a href="./product-edit.html" class="sidebar-submenu-item"> Product Edit </a>
                        </li>
                        <li>
                            <a href="./order-list.html" class="sidebar-submenu-item"> Order List </a>
                        </li>
                        <li>
                            <a href="./order-details.html" class="sidebar-submenu-item"> Order Details </a>
                        </li>
                        <li>
                            <a href="./customer-list.html" class="sidebar-submenu-item"> Customer List </a>
                        </li>
                    </ul>
                </li>
                <!-- Users -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="users"></i>
                        </span>
                        <span class="sidebar-menu-text">Users</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./user-list.html" class="sidebar-submenu-item">List</a>
                        </li>
                        <li>
                            <a href="./profile.html" class="sidebar-submenu-item"> Profile </a>
                        </li>
                    </ul>
                </li>
                <!--  Commponents  -->
                <div class="sidebar-menu-header">Components</div>
                <!-- Common  -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="box"></i>
                        </span>
                        <span class="sidebar-menu-text">Common</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./accordion.html" class="sidebar-submenu-item"> Accordion </a>
                        </li>
                        <li>
                            <a href="./alert.html" class="sidebar-submenu-item">Alert</a>
                        </li>
                        <li>
                            <a href="./avatar.html" class="sidebar-submenu-item">Avatar</a>
                        </li>
                        <li>
                            <a href="./badge.html" class="sidebar-submenu-item">Badge</a>
                        </li>
                        <li>
                            <a href="./button.html" class="sidebar-submenu-item">Button</a>
                        </li>
                        <li>
                            <a href="./card.html" class="sidebar-submenu-item">Card</a>
                        </li>
                        <li>
                            <a href="./carousel.html" class="sidebar-submenu-item"> Carousel </a>
                        </li>

                        <li>
                            <a href="./drawer.html" class="sidebar-submenu-item">Drawer</a>
                        </li>
                        <li>
                            <a href="./dropdown.html" class="sidebar-submenu-item"> Dropdown </a>
                        </li>
                        <li>
                            <a href="./list-group.html" class="sidebar-submenu-item"> List Group </a>
                        </li>
                        <li>
                            <a href="./modal.html" class="sidebar-submenu-item">Modal</a>
                        </li>
                        <li>
                            <a href="./pagination.html" class="sidebar-submenu-item"> Pagination </a>
                        </li>
                        <li>
                            <a href="./progress-bar.html" class="sidebar-submenu-item"> Progress </a>
                        </li>

                        <li>
                            <a href="./spinner.html" class="sidebar-submenu-item"> Spinner </a>
                        </li>
                        <li>
                            <a href="./tabs.html" class="sidebar-submenu-item">Tab</a>
                        </li>
                        <li>
                            <a href="./toast.html" class="sidebar-submenu-item">Toast</a>
                        </li>
                        <li>
                            <a href="./tooltip.html" class="sidebar-submenu-item"> Tooltip </a>
                        </li>
                    </ul>
                </li>
                <!-- Forms  -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="edit"></i>
                        </span>
                        <span class="sidebar-menu-text">Forms</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./input.html" class="sidebar-submenu-item">Input</a>
                        </li>
                        <li>
                            <a href="./input-group.html" class="sidebar-submenu-item"> Input Group </a>
                        </li>
                        <li>
                            <a href="./textarea.html" class="sidebar-submenu-item"> Textarea </a>
                        </li>
                        <li>
                            <a href="./checkbox.html" class="sidebar-submenu-item"> Checkbox </a>
                        </li>
                        <li>
                            <a href="./radio.html" class="sidebar-submenu-item">Radio</a>
                        </li>
                        <li>
                            <a href="./toggle.html" class="sidebar-submenu-item">Toggle</a>
                        </li>
                        <li>
                            <a href="./select.html" class="sidebar-submenu-item">Select</a>
                        </li>

                        <li>
                            <a href="./datepicker.html" class="sidebar-submenu-item"> Datepicker </a>
                        </li>
                        <li>
                            <a href="./editor.html" class="sidebar-submenu-item">Editor</a>
                        </li>
                        <li>
                            <a href="./uploader.html" class="sidebar-submenu-item"> Uploader </a>
                        </li>
                        <li>
                            <a href="./form-layout.html" class="sidebar-submenu-item">Layout</a>
                        </li>
                        <li>
                            <a href="./form-validation.html" class="sidebar-submenu-item"> Validation </a>
                        </li>
                    </ul>
                </li>
                <!-- Tables  -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="list"></i>
                        </span>
                        <span class="sidebar-menu-text">Tables</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./basic-table.html" class="sidebar-submenu-item"> Basic Table </a>
                        </li>
                        <li>
                            <a href="./data-table.html" class="sidebar-submenu-item"> Data Table </a>
                        </li>
                    </ul>
                </li>
                <!-- Charts  -->
                <li>
                    <a href="./chart.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span class="sidebar-menu-text">Charts</span>
                    </a>
                </li>
                <!-- Icons-->
                <li>
                    <a href="./icons.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="italic"></i>
                        </span>
                        <span class="sidebar-menu-text">Icons</span>
                    </a>
                </li>
                <!-- Typography-->
                <li>
                    <a href="./typography.html" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="type"></i>
                        </span>
                        <span class="sidebar-menu-text">Typography</span>
                    </a>
                </li>
                <!--  Pages  -->
                <div class="sidebar-menu-header">Pages</div>
                <!-- Authentication  -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu">
                        <span class="sidebar-menu-icon">
                            <i data-feather="lock"></i>
                        </span>
                        <span class="sidebar-menu-text">Authentication</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./login.html" class="sidebar-submenu-item">Login</a>
                        </li>
                        <li>
                            <a href="./register.html" class="sidebar-submenu-item"> Register </a>
                        </li>
                        <li>
                            <a href="./recover-password.html" class="sidebar-submenu-item"> Forgot Password </a>
                        </li>
                        <li>
                            <a href="./reset-password.html" class="sidebar-submenu-item"> Reset Password </a>
                        </li>
                    </ul>
                </li>
                <!-- Miscellaneous  -->
                <li>
                    <a href="javascript:void(0);" class="sidebar-menu active">
                        <span class="sidebar-menu-icon">
                            <i data-feather="grid"></i>
                        </span>
                        <span class="sidebar-menu-text">Miscellaneous</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="./starter.html" class="sidebar-submenu-item active"> Starter Page </a>
                        </li>
                        <li>
                            <a href="./comming-soon.html" class="sidebar-submenu-item"> Coming Soon </a>
                        </li>
                        <li>
                            <a href="./maintenance.html" class="sidebar-submenu-item"> Maintenance </a>
                        </li>
                        <li>
                            <a href="./404-error.html" class="sidebar-submenu-item"> Error 404 </a>
                        </li>
                        <li>
                            <a href="./500-error.html" class="sidebar-submenu-item"> Error 500 </a>
                        </li>
                        <li>
                            <a href="./not-authorized.html" class="sidebar-submenu-item"> Not Authorized </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Ends -->
        </aside>
        <!-- Sidebar Ends -->

        <!-- Wrapper Starts -->
        <div class="wrapper">
            <!-- Header Starts -->
            <header class="header">
                <div class="container-fluid flex items-center justify-between">
                    <!-- Sidebar Toggle & Search Starts -->
                    <div class="flex items-center space-x-6">
                        <button class="sidebar-toggle">
                            <span class="flex space-x-4">
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="22"
                                    width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16"></path>
                                </svg>
                            </span>
                        </button>

                        <!-- Mobile Search Starts -->
                        <div class="sm:hidden">
                            <button type="button" data-trigger="search-modal"
                                class="flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300">
                                <i width="22" height="22" data-feather="search"></i>
                            </button>
                        </div>
                        <!-- Mobile Search Ends -->

                        <!-- Searchbar Start -->
                        <button type="button" data-trigger="search-modal"
                            class="group hidden h-10 w-72 items-center overflow-hidden rounded-primary bg-slate-100 px-3 shadow-sm dark:border-transparent dark:bg-slate-700 sm:flex">
                            <i class="text-slate-400" width="1em" height="1em" data-feather="search"></i>
                            <span class="ml-2 text-sm text-slate-400">Search</span>
                        </button>
                        <!-- Searchbar Ends -->
                    </div>
                    <!-- Sidebar Toggle & Search Ends -->

                    <!-- Header Options Starts -->
                    <div class="flex items-center">
                        <!-- Language Dropdown Starts -->
                        <div class="dropdown" data-strategy="absolute">
                            <div class="dropdown-toggle px-3">
                                <button type="button"
                                    class="inline-flex items-center gap-2 text-sm text-slate-600 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300">
                                    <span class="fi fi-gb"></span>
                                    <span class="hidden font-medium md:inline-block">English</span>
                                    <span class="inline-block font-medium md:hidden">EN</span>
                                </button>
                            </div>

                            <div class="dropdown-content mt-3 w-40">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-gb"></span>
                                            <span class="">English</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-de"></span>
                                            <span class="">German</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-gf"></span>
                                            <span class="">French</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-sa"></span>
                                            <span class="">Arabic</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-cn"></span>
                                            <span class="">Chinese</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <button class="dropdown-btn" type="button">
                                            <span class="fi fi-bd"></span>
                                            <span class="">Bangla</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Language Dropdown Ends -->

                        <!-- Dark Mood Toggle Starts -->
                        <div class="dropdown" data-strategy="absolute" id="theme-switcher-dropdown">
                            <button
                                class="dropdown-toggle px-3 text-slate-500 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500"
                                type="button">
                                <i class="hidden dark:block" width="24" height="24" data-feather="moon"></i>
                                <i class="block dark:hidden" width="24" height="24" data-feather="sun"></i>
                            </button>

                            <div class="dropdown-content mt-3 w-36">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="light">
                                            <i width="16" height="16" data-feather="sun"></i>
                                            <span>Light</span>
                                        </button>
                                    </li>

                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="dark">
                                            <i width="16" height="16" data-feather="moon"></i>
                                            <span>Dark</span>
                                        </button>
                                    </li>

                                    <li class="dropdown-list-item">
                                        <button type="buttton" class="dropdown-btn" data-theme-mode="system">
                                            <i width="16" height="16" data-feather="monitor"></i>
                                            <span>System</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Dark Mood Toggle Ends -->

                        <!-- Notification Dropdown Starts -->
                        <div class="dropdown -mt-0.5" data-strategy="absolute">
                            <div class="dropdown-toggle px-3">
                                <button
                                    class="relative mt-1 flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500">
                                    <i width="24" height="24" data-feather="bell"></i>
                                    <span
                                        class="absolute -right-1 -top-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-danger-500 text-[11px] text-slate-200">
                                        5
                                    </span>
                                </button>
                            </div>

                            <div class="dropdown-content mt-3 w-[17.5rem] divide-y dark:divide-slate-700 sm:w-80">
                                <div class="flex items-center justify-between px-4 py-4">
                                    <h6 class="text-slate-800 dark:text-slate-300">Notifications</h6>
                                    <button
                                        class="text-xs font-medium text-slate-600 hover:text-primary-500 dark:text-slate-300">
                                        Clear All
                                    </button>
                                </div>

                                <div class="h-80 w-full" data-simplebar>
                                    <ul>
                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-500">
                                                <i data-feather="alert-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">New order received</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been placed</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>2 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-500">
                                                <i data-feather="alert-triangle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">High CPU usage</h6>
                                                <p class="text-xs text-slate-400">CPU usage is at 92%</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>5 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-500">
                                                <i data-feather="check-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Your order has been shipped</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been shipped</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>10 min ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-danger-100 text-danger-500">
                                                <i data-feather="x-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Something went wrong</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been placed</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>1 hour ago</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li
                                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-500">
                                                <i data-feather="check-circle" width="20" height="20"></i>
                                            </div>

                                            <div>
                                                <h6 class="text-sm font-normal">Your order has been shipped</h6>
                                                <p class="text-xs text-slate-400">Order #1234 has been shipped</p>
                                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                    <i data-feather="clock" width="1em" height="1em"></i>
                                                    <span>10 min ago</span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="px-4 py-2">
                                    <button class="btn btn-primary-plain btn-sm w-full" type="button">
                                        <span>View More</span>
                                        <i data-feather="arrow-right" width="1rem" height="1rem"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Notification Dropdown Ends -->

                        <!-- Profile Dropdown Starts -->
                        <div class="dropdown" data-strategy="absolute">
                            <div class="dropdown-toggle pl-3">
                                <button class="group relative flex items-center gap-x-1.5" type="button">
                                    <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
                                        <img class="avatar-img group-focus-within:ring group-focus-within:ring-primary-500"
                                            src="/images/avatar1.png" alt="Avatar 1" />
                                    </div>
                                </button>
                            </div>

                            <div class="dropdown-content mt-1 w-56 divide-y dark:divide-slate-600">
                                <div class="px-4 py-3">
                                    <p class="text-sm">Signed in as</p>
                                    <p class="truncate text-sm font-medium">admin@example.com</p>
                                </div>
                                <div class="py-1">
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="user" class="text-slate-500"></i>
                                        <span>Profile</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="settings" class="text-slate-500"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-link">
                                        <i width="18" height="18" data-feather="help-circle" class="text-slate-500"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                                <div class="py-1">
                                    <form method="POST" action="#">
                                        <button type="submit" class="dropdown-btn">
                                            <i width="18" height="18" data-feather="log-out" class="text-slate-500"></i>
                                            <span>Sign out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Profile Dropdown Ends -->
                    </div>
                    <!-- Header Options Ends -->
                </div>
            </header>
            <!-- Header Ends -->

            <!-- Page Content Starts -->
            <div class="content">
                <!-- Main Content Starts -->
                <main class="container flex-grow p-4 sm:p-6">
                    <div>
                        <h5>Starter Page</h5>
                        <livewire:user-table />
                    </div>
                </main>
                <!-- Main Content Ends -->

                <!-- Footer Starts -->
                <footer class="footer">
                    <p class="text-sm">
                        Copyright © 2023
                        <a class="text-primary-500 hover:underline" href="https://getadmintoolkit.com" target="_blank">
                            Admin Toolkit
                        </a>
                    </p>

                    <p class="flex items-center gap-1 text-sm">
                        Hand-crafted &amp; Made with
                        <i class="text-danger-500" data-feather="heart" height="1em" width="1em"></i>
                    </p>
                </footer>
                <!-- Footer Ends -->
            </div>
            <!-- Page Content Ends -->
        </div>
        <!-- Wrapper Ends -->

        <!-- Search Modal Start -->
        <div class="modal" id="search-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header px-4 sm:px-6">
                        <div class="group flex items-center">
                            <i data-feather="search"
                                class="text-slate-500 group-focus-within:text-slate-600 dark:text-slate-400 dark:group-focus-within:text-slate-300"></i>
                            <input type="text"
                                class="w-full border-none bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400 focus:ring-0 dark:text-slate-200"
                                placeholder="Search" />
                            <button
                                class="rounded-primary bg-slate-100 px-2 py-1 text-[10px] font-semibold text-slate-600 hover:bg-slate-200 dark:bg-slate-700 dark:text-slate-300 dark:hover:bg-slate-600"
                                data-dismiss="modal">
                                ESC
                            </button>
                        </div>
                    </div>
                    <div class="modal-body max-h-[600px] px-4 py-6 sm:px-6"></div>
                </div>
            </div>
        </div>
        <!-- Search Modal Ends -->
    </div>

</body>

</html>