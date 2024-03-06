<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type"
          content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?php echo wp_get_document_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_stylesheet_directory_uri(); ?>/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512"
          href="<?php echo get_stylesheet_directory_uri(); ?>/android-chrome-512x512.png">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header-view">
    <header class="navbar navbar-expand-xl">
        <div class="container">
            <div class="d-flex">
                <button class="menu-toggle d-xl-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon icon-menu"></span>
                    <span class="icon icon-cross"></span>
                </button>

                <button class="search d-xl-none">
                    <span class="icon icon-search"></span>
                </button>
            </div>

            <a class="navbar-brand" href="/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Success"/>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Каталог</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Хіти продажу</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Колекції</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">SALE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">БЛОГ</a></li>
                </ul>
            </div>

            <div class="d-flex header-icons">
                <button class="search d-none d-xl-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M15.5303 14.9697C15.2374 14.6768 14.7626 14.6768 14.4697 14.9697C14.1768 15.2626 14.1768 15.7374 14.4697 16.0303L15.5303 14.9697ZM20.4697 22.0303C20.7626 22.3232 21.2374 22.3232 21.5303 22.0303C21.8232 21.7374 21.8232 21.2626 21.5303 20.9697L20.4697 22.0303ZM10 16.75C6.54822 16.75 3.75 13.9518 3.75 10.5H2.25C2.25 14.7802 5.71979 18.25 10 18.25V16.75ZM16.25 10.5C16.25 13.9518 13.4518 16.75 10 16.75V18.25C14.2802 18.25 17.75 14.7802 17.75 10.5H16.25ZM10 4.25C13.4518 4.25 16.25 7.04822 16.25 10.5H17.75C17.75 6.21979 14.2802 2.75 10 2.75V4.25ZM10 2.75C5.71979 2.75 2.25 6.21979 2.25 10.5H3.75C3.75 7.04822 6.54822 4.25 10 4.25V2.75ZM14.4697 16.0303L20.4697 22.0303L21.5303 20.9697L15.5303 14.9697L14.4697 16.0303Z"
                              fill="black"/>
                    </svg>
                </button>
                <button class="favorites d-none d-xl-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21 9.00003C21 15.2444 12.0004 20.5 12.0004 20.5C12.0004 20.5 3 15.1667 3 9.01268C3 6.50003 5 4.50003 7.5 4.50003C10 4.50003 12 7.50003 12 7.50003C12 7.50003 14 4.50003 16.5 4.50003C19 4.50003 21 6.50003 21 9.00003Z"
                              stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="call">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M4.48801 1.78143L7.49993 4.97732C7.87318 5.37363 7.87344 5.99463 7.50052 6.39127L6.04455 7.93982C6.95876 10.7348 9.00325 12.9708 11.5944 14.0281L11.8845 14.1407L13.2646 12.6729C13.6523 12.2606 14.2985 12.2427 14.708 12.633L17.7199 15.8289C18.0931 16.2252 18.0934 16.8462 17.7205 17.2428L16.9715 18.0395C15.6035 19.4944 13.5203 19.9045 11.6906 19.0789C9.1042 17.912 7.01722 16.4857 5.42964 14.8C3.84206 13.1143 2.49814 10.8976 1.39787 8.15009C0.650623 6.28412 0.974729 4.16885 2.21213 2.71538L2.37155 2.53721L3.04467 1.82128C3.43231 1.40899 4.07851 1.39115 4.48801 1.78143Z"
                              stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="account d-none d-xl-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                        <g clip-path="url(#clip0_255_19784)">
                            <path d="M1.50146 19.356C2.78056 17.7334 6.65438 14.4881 11.9169 14.4881C17.1795 14.4881 20.6879 17.7334 21.7843 19.356"
                                  stroke="black" stroke-width="1.66643" stroke-linecap="round"/>
                            <path d="M12.0483 10.4097C14.2766 10.4097 16.083 8.6033 16.083 6.37502C16.083 4.14675 14.2766 2.34038 12.0483 2.34038C9.82005 2.34038 8.01367 4.14675 8.01367 6.37502C8.01367 8.6033 9.82005 10.4097 12.0483 10.4097Z"
                                  stroke="black" stroke-width="1.66643"/>
                        </g>
                    </svg>
                </button>

                <button class="cart position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M18.9351 5.84827H14.911V4.17066C14.911 2.44575 13.4577 1.05469 11.6692 1.05469H8.59515C6.80661 1.05469 5.35341 2.44575 5.35341 4.17066V5.84827H1.32918C0.993831 5.84827 0.770264 6.07084 0.770264 6.4047V17.8197C0.770264 19.5447 2.22346 20.9357 4.012 20.9357H16.3083C18.0968 20.9357 19.55 19.5447 19.55 17.8197V6.4047C19.4941 6.12648 19.2705 5.84827 18.9351 5.84827ZM6.58303 4.17066C6.58303 3.05781 7.47731 2.16754 8.65104 2.16754H11.7251C12.8989 2.16754 13.849 3.05781 13.849 4.17066V5.84827H6.58303V4.17066ZM18.3763 17.8197C18.3763 18.9326 17.4261 19.8228 16.2524 19.8228H4.012C2.83827 19.8228 1.8881 18.9326 1.8881 17.8197V6.96112H18.3763V17.8197Z"
                              fill="black" stroke="black" stroke-width="0.441876"/>
                    </svg>

                    <span class="badge">8</span>
                </button>
            </div>
        </div>
    </header>

    <div id="sale-bar">
        <p>НОВИНКИ СЕЗОНУ 23-24 ЗА СУПЕР ЦІНАМИ</p>
        <span>/</span>
        <a href="">ДЕТАЛЬНІШЕ</a>

        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="#FF0000"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>

    <div id="mobile-menu" class="bg-light">
        <ul class="main-menu">
            <li class="menu-item">
                <label class="menu-item-label">Каталог</label>
                <button class="menu-item-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7" fill="none">
                        <path d="M0.785645 1.24316L5.49974 5.95726L10.2138 1.24316" stroke="black"
                              stroke-width="1.57143" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="sub-menu">
                    <li>Верхній одяг</li>
                    <li>Верх</li>
                    <li>Низ</li>
                    <li>Костюми</li>
                    <li>Сукні</li>
                    <li>Аксесуари</li>
                </ul>
            </li>

            <li class="menu-item">
                <label class="menu-item-label">Хіти продажу</label>
            </li>

            <li class="menu-item">
                <label class="menu-item-label">Колекції</label>
                <button class="menu-item-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7" fill="none">
                        <path d="M0.785645 1.24316L5.49974 5.95726L10.2138 1.24316" stroke="black"
                              stroke-width="1.57143" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="sub-menu">
                    <li>LINEN COLLECTION</li>
                    <li>TOTAL WHITE</li>
                    <li>ЛІТНЯ КАПСУЛА</li>
                    <li>НОВОРІЧНА КАПСУЛА</li>
                    <li>ТРИКОТАЖ</li>
                    <li>ШОВК</li>
                    <li>DENIM</li>
                    <li>ОСІНЬ-ЗИМА 23/24</li>
                    <li>ЛІТНІЙ РОЗПРОДАЖ</li>
                    <li>CLASSIC</li>
                </ul>
            </li>

            <li class="menu-item">
                <label class="menu-item-label">Sale</label>
            </li>

            <li class="menu-item bg-light">
                <label class="menu-item-label">
                    <span class="menu-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                          <g clip-path="url(#clip0_378_4617)">
                            <path d="M1.50146 19.3561C2.78056 17.7336 6.65438 14.4883 11.9169 14.4883C17.1795 14.4883 20.6879 17.7336 21.7843 19.3561"
                                  stroke="black" stroke-width="1.66643" stroke-linecap="round"/>
                            <path d="M12.0483 10.4096C14.2766 10.4096 16.083 8.60325 16.083 6.37498C16.083 4.1467 14.2766 2.34033 12.0483 2.34033C9.82005 2.34033 8.01367 4.1467 8.01367 6.37498C8.01367 8.60325 9.82005 10.4096 12.0483 10.4096Z"
                                  stroke="black" stroke-width="1.66643"/>
                          </g>
                        </svg>
                    </span>
                    Особистий кабінет
                </label>
                <button class="menu-item-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7" fill="none">
                        <path d="M0.785645 1.24316L5.49974 5.95726L10.2138 1.24316" stroke="black"
                              stroke-width="1.57143" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <ul class="sub-menu">
                    <li>Вхід</li>
                    <li>Реєстрація</li>
                    <li>Забули пароль?</li>
                    <li>Моя інформація</li>
                    <li>Улюблене</li>
                    <li>Історія замовлень</li>
                    <li>Повернення</li>
                    <li>E-Mail розсилка</li>
                </ul>
            </li>
        </ul>

        <div class="menu-footer">
            <div class="social-networks">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <g clip-path="url(#clip0_378_4644)">
                            <path d="M11.499 5.51807C8.25299 5.51807 5.56348 8.16121 5.56348 11.4536C5.56348 14.7459 8.20662 17.389 11.499 17.389C14.7913 17.389 17.4344 14.6995 17.4344 11.4536C17.4344 8.20758 14.7449 5.51807 11.499 5.51807ZM11.499 15.256C9.41227 15.256 7.69654 13.5402 7.69654 11.4536C7.69654 9.36686 9.41227 7.65113 11.499 7.65113C13.5857 7.65113 15.3014 9.36686 15.3014 11.4536C15.3014 13.5402 13.5857 15.256 11.499 15.256Z" fill="black"/>
                            <path d="M17.667 6.7237C18.4097 6.7237 19.0118 6.12163 19.0118 5.37894C19.0118 4.63625 18.4097 4.03418 17.667 4.03418C16.9243 4.03418 16.3223 4.63625 16.3223 5.37894C16.3223 6.12163 16.9243 6.7237 17.667 6.7237Z" fill="black"/>
                            <path d="M21.1452 1.90121C19.9395 0.649193 18.2238 0 16.2762 0H6.72379C2.68952 0 0 2.68952 0 6.72379V16.2298C0 18.2238 0.649193 19.9395 1.94758 21.1915C3.1996 22.3972 4.86895 23 6.77016 23H16.2298C18.2238 23 19.8931 22.3508 21.0988 21.1915C22.3508 19.9859 23 18.2702 23 16.2762V6.72379C23 4.77621 22.3508 3.10685 21.1452 1.90121ZM20.9597 16.2762C20.9597 17.7137 20.4496 18.873 19.6149 19.6613C18.7802 20.4496 17.621 20.8669 16.2298 20.8669H6.77016C5.37903 20.8669 4.21976 20.4496 3.38508 19.6613C2.5504 18.8266 2.13306 17.6673 2.13306 16.2298V6.72379C2.13306 5.33266 2.5504 4.17339 3.38508 3.33871C4.17339 2.5504 5.37903 2.13306 6.77016 2.13306H16.3226C17.7137 2.13306 18.873 2.5504 19.7077 3.38508C20.496 4.21976 20.9597 5.37903 20.9597 6.72379V16.2762Z" fill="black"/>
                        </g>
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <g clip-path="url(#clip0_378_4650)">
                            <path d="M23 11.5703C23 5.18019 17.8513 0 11.5 0C5.14872 0 0 5.18019 0 11.5703C0 17.3453 4.20541 22.132 9.70312 23V14.9148H6.7832V11.5703H9.70312V9.0212C9.70312 6.1214 11.42 4.51964 14.0468 4.51964C15.3051 4.51964 16.6211 4.74562 16.6211 4.74562V7.593H15.171C13.7424 7.593 13.2969 8.48486 13.2969 9.39986V11.5703H16.4863L15.9765 14.9148H13.2969V23C18.7946 22.132 23 17.3453 23 11.5703Z" fill="black"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="contacts">
                <a class="phone" href="tel:+380933335086">+38 093 3335086</a>
                <small class="manager">менеджер Анастасія</small>
            </div>
        </div>
    </div>
</div>

<main>
