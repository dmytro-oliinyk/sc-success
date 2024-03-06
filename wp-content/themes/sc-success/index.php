<?php get_header(); ?>

<section id="slider">
    <div class="slider-items">
        <div class="slider-item"
             style="background-image: url('/wp-content/uploads/cc25c4e8c7a1ee87dadee38f4194f5d1.jpeg');">
            <div class="slider-item-content">
                <h2>Осіння колекція</h2>
                <h3>розпродаж до -70%</h3>
                <a href="/catalog">
                    <span>В КАТАЛОГ</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                        <path d="M11.2857 14L19 7.49997M19 7.49997L11.2857 1M19 7.49997L1 7.50021" stroke="white"
                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <ul class="slider-controls">
        <li></li>
        <li class="active"></li>
        <li></li>
    </ul>
</section>

<section class="section products">
    <div class="section-head">
        <h4>Новинки</h4>

        <div class="more">
            <a href="">переглянути всі</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <div class="section-content">
        <div class="product-carousel">
            <div class="product-carousel-container">
                <div class="product-carousel-inner">
                    <?php get_template_part('template-parts/product-1-card') ?>
                    <?php get_template_part('template-parts/product-2-card') ?>
                    <?php get_template_part('template-parts/product-3-card') ?>
                    <?php get_template_part('template-parts/product-4-card') ?>
                </div>
            </div>
            <div class="product-carousel-controls">
                <button class="product-carousel-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M8.30273 1.77372L1.11805 8.00041L8.30273 14.2271" stroke="black" stroke-width="1.11765"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.8823 8.00024H1.11802" stroke="black" stroke-width="1.11765" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="product-carousel-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M10.6973 14.2263L17.8819 7.99959L10.6973 1.77295" stroke="black" stroke-width="1.11765"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.11768 7.99976H17.882" stroke="black" stroke-width="1.11765" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="section-separator">
    <hr/>
</div>

<div class="tag-cloud">
    <a href="">СУКНІ</a><span>/</span>
    <a href="">Кофта</a><span>/</span>
    <a href="">Джинси</a><span>/</span>
    <a href="">ОСІННІ Куртки</a><span>/</span>
    <a href="">ЖИЛЕТКИ</a><span>/</span>
    <a href="">КАРДИГАН</a><span>/</span>
    <b>ЖИЛЕТ</b><span>/</span>
    <a href="">СУКНЯ ТРИКОТАЖНА</a><span>/</span>
    <a href="">НОВИНКИ</a><span>/</span>
    <a href="">РОЗПРОДАЖ КОЛЕКЦІЇ</a><span>/</span>
    <a href="">ПАЛЬТА 2024</a>
</div>

<section class="section products">
    <div class="section-head">
        <h4>Рекомендуємо</h4>

        <button>
            <a href="">переглянути всі</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php get_template_part('template-parts/product-3-card') ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="product-carousel">
                    <div class="product-carousel-container">
                        <div class="product-carousel-inner gap-6">
                            <?php get_template_part('template-parts/product-2-card') ?>
                            <?php get_template_part('template-parts/product-1-card') ?>
                        </div>
                    </div>
                    <div class="product-carousel-controls">
                        <button class="product-carousel-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                 fill="none">
                                <path d="M8.30273 1.77372L1.11805 8.00041L8.30273 14.2271" stroke="black"
                                      stroke-width="1.11765"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.8823 8.00024H1.11802" stroke="black" stroke-width="1.11765"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-carousel-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                 fill="none">
                                <path d="M10.6973 14.2263L17.8819 7.99959L10.6973 1.77295" stroke="black"
                                      stroke-width="1.11765"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1.11768 7.99976H17.882" stroke="black" stroke-width="1.11765"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="section-separator p-0">
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section products">
    <div class="section-head">
        <h4>Хіти продажу <span>Бестселлери</span></h4>

        <button>
            <a href="">переглянути всі</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="section-content">
        <div class="product-carousel">
            <div class="product-carousel-container">
                <div class="product-carousel-inner">
                    <?php get_template_part('template-parts/product-4-card') ?>
                    <?php get_template_part('template-parts/product-2-card') ?>
                    <?php get_template_part('template-parts/product-3-card') ?>
                    <?php get_template_part('template-parts/product-1-card') ?>
                </div>
            </div>
            <div class="product-carousel-controls">
                <button class="product-carousel-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M8.30273 1.77372L1.11805 8.00041L8.30273 14.2271" stroke="black" stroke-width="1.11765"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.8823 8.00024H1.11802" stroke="black" stroke-width="1.11765" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="product-carousel-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M10.6973 14.2263L17.8819 7.99959L10.6973 1.77295" stroke="black" stroke-width="1.11765"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.11768 7.99976H17.882" stroke="black" stroke-width="1.11765" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="section-separator">
    <hr/>
</div>

<section class="section" id="about">
    <div class="row section-images">
        <div class="col-12 col-sm-6">
            <div class="about-image bg-black d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="37" viewBox="0 0 180 37" fill="none">
                    <g clip-path="url(#clip0_255_19794)">
                        <path d="M131.025 35.8474V24.507C131.025 24.4075 130.579 24.4075 130.579 24.507C130.579 29.5416 127.689 35.4076 121.053 35.4076H117.022C116.819 35.4076 116.737 35.3594 116.737 35.2118V18.4934H117.671C120.929 18.4934 123.005 21.7682 123.005 25.0913C123.005 25.191 123.414 25.191 123.414 25.0913V11.3077C123.414 11.208 123.005 11.208 123.005 11.3077C123.005 14.6788 120.943 17.9057 117.671 17.9057H116.737V2.11857C116.737 1.97081 116.819 1.9227 117.022 1.9227H120.929C125.977 1.9227 128.421 7.29733 128.421 11.8438C128.421 11.9434 128.909 11.9434 128.909 11.8438V1.48283C128.909 1.43128 128.909 1.33506 128.747 1.33506H107.29C107.211 1.33506 107.211 1.9227 107.29 1.9227H110.874C111.036 1.9227 111.118 1.97081 111.118 2.11857V35.2083C111.118 35.3561 111.036 35.4041 110.874 35.4041H107.29C107.211 35.4041 107.211 35.9917 107.29 35.9917H130.905C130.984 35.9917 131.025 35.9402 131.025 35.8441V35.8474ZM179.229 25.0878C179.229 19.1257 175.971 16.9263 170.757 14.5792C165.671 12.3799 163.514 10.4245 163.514 6.90212C163.514 3.57907 165.508 1.08764 168.723 1.08764C172.387 1.08764 175.644 5.24232 175.644 9.88499C175.644 9.98463 176.091 9.98463 176.091 9.88499V0.647768C176.091 0.5 175.644 0.5 175.644 0.647768C175.566 1.18386 175.157 1.8196 173.974 1.8196C171.94 1.8196 170.922 0.5 168.681 0.5C164.607 0.5 160.868 5.14266 160.868 11.4486C160.868 17.2664 163.878 19.6961 167.664 21.3731C173.885 24.1119 176.291 25.2426 176.291 29.9779C176.291 33.1533 174.174 36.2908 169.489 36.2908C164.239 36.2908 161.105 28.7065 161.105 24.7957C161.105 24.6481 160.617 24.6481 160.617 24.7957V36.6825C160.617 36.8303 161.022 36.8303 161.105 36.6825C161.184 35.7959 161.51 34.8166 162.692 34.8166C164.411 34.8166 166.682 36.8303 169.53 36.8303C175.881 36.8303 179.222 30.4659 179.222 25.0878H179.229ZM155.359 25.0878C155.359 19.1257 152.101 16.9263 146.892 14.5792C141.802 12.3799 139.644 10.4245 139.644 6.90212C139.644 3.57907 141.637 1.08764 144.854 1.08764C148.517 1.08764 151.775 5.24232 151.775 9.88499C151.775 9.98463 152.222 9.98463 152.222 9.88499V0.647768C152.222 0.5 151.775 0.5 151.775 0.647768C151.692 1.18386 151.287 1.8196 150.105 1.8196C148.07 1.8196 147.053 0.5 144.812 0.5C140.744 0.5 136.998 5.14266 136.998 11.4486C136.998 17.2664 140.008 19.6961 143.795 21.3731C150.026 24.1223 152.428 25.2356 152.428 29.9642C152.428 33.1395 150.307 36.2771 145.627 36.2771C140.376 36.2771 137.242 28.6928 137.242 24.782C137.242 24.6342 136.754 24.6342 136.754 24.782V36.6688C136.754 36.8166 137.16 36.8166 137.242 36.6688C137.321 35.7822 137.647 34.8027 138.83 34.8027C140.548 34.8027 142.819 36.8166 145.668 36.8166C152.019 36.8166 155.359 30.4522 155.359 25.0741V25.0878ZM18.6051 25.0878C18.6051 19.1257 15.3472 16.9263 10.1376 14.5895C5.04816 12.3799 2.89006 10.4245 2.89006 6.90212C2.89006 3.59281 4.88665 1.08764 8.09974 1.08764C11.7665 1.08764 15.0242 5.24232 15.0242 9.88499C15.0242 9.98463 15.471 9.98463 15.471 9.88499V0.647768C15.471 0.5 15.0242 0.5 15.0242 0.647768C14.9417 1.18729 14.5328 1.8196 13.3541 1.8196C11.3163 1.8196 10.3094 0.5 8.06194 0.5C3.98972 0.5 0.243989 5.14266 0.243989 11.4486C0.243989 17.2664 3.25777 19.6961 7.0413 21.3731C13.2716 24.1223 15.6737 25.2356 15.6737 29.9642C15.6737 33.1395 13.5568 36.2771 8.87638 36.2771C3.62203 36.2771 0.487978 28.6928 0.487978 24.782C0.487978 24.6342 0 24.6342 0 24.782V36.6688C0 36.8166 0.405502 36.8166 0.487978 36.6688C0.570453 35.7822 0.89348 34.8027 2.07563 34.8027C3.79385 34.8027 6.06536 36.8166 8.91761 36.8166C15.2682 36.8166 18.6051 30.4522 18.6051 25.0741V25.0878ZM48.3303 1.50345C48.4129 1.50345 48.4129 0.915812 48.3303 0.915812H40.107C40.0244 0.915812 40.0244 1.50345 40.107 1.50345H43.7702C43.9352 1.50345 44.0141 1.55156 44.0141 1.69933V25.3078C44.0141 31.3216 41.5331 35.4283 35.8321 35.4283C31.2718 35.4283 30.0106 31.8096 30.0106 25.8955V1.69933C30.0106 1.55156 30.093 1.50345 30.2958 1.50345H33.8801C33.9591 1.50345 33.9591 0.915812 33.8801 0.915812H20.5672C20.4848 0.915812 20.4848 1.50345 20.5672 1.50345H24.1481C24.313 1.50345 24.392 1.55156 24.392 1.69933V25.8955C24.392 33.1773 28.7082 36.4145 34.7735 36.4145C41.5744 36.4145 44.5469 32.0537 44.5469 25.3078V1.69933C44.5469 1.55156 44.626 1.50345 44.7497 1.50345H48.3303ZM73.3959 36.7307V23.5243C73.3959 23.428 72.9492 23.428 72.9492 23.5243C72.9492 29.9298 68.9182 36.2908 63.9903 36.2908C62.1588 36.2908 60.5538 35.8441 59.4302 34.4247C57.5607 32.0811 56.8253 27.1428 56.8253 18.6858C56.8253 10.2286 57.5607 5.28356 59.4302 2.94333C60.5712 1.5275 61.956 1.08764 63.7875 1.08764C67.7773 1.08764 72.2139 7.39354 72.2139 12.2321C72.2139 12.3283 72.664 12.3283 72.664 12.2321V0.647768C72.664 0.548111 72.2139 0.548111 72.2139 0.647768C72.1348 1.18386 71.3203 1.8196 70.1794 1.8196C68.3065 1.8196 65.7429 0.5 63.7875 0.5C56.1346 0.5 50.5985 8.95713 50.5985 18.6858C50.5985 28.3628 56.2961 36.8303 64.0007 36.8303C66.2413 36.8303 69.2929 35.2564 71.1244 35.2564C71.5564 35.2403 71.9799 35.3805 72.3169 35.6514C72.6539 35.922 72.8822 36.3053 72.9594 36.7307C73.0007 36.7788 73.4063 36.7788 73.4063 36.7307H73.3959ZM101.95 36.7307V23.5243C101.95 23.428 101.503 23.428 101.503 23.5243C101.503 29.9298 97.4718 36.2908 92.5439 36.2908C90.7122 36.2908 89.1246 35.8441 87.9837 34.4247C86.1108 32.0811 85.379 27.1428 85.379 18.6858C85.379 10.2286 86.1108 5.28356 87.9837 2.94333C89.1246 1.5275 90.5095 1.08764 92.3412 1.08764C96.3309 1.08764 100.767 7.39354 100.767 12.2321C100.767 12.3283 101.218 12.3283 101.218 12.2321V0.647768C101.218 0.548111 100.767 0.548111 100.767 0.647768C100.688 1.18386 99.8739 1.8196 98.733 1.8196C96.8601 1.8196 94.2966 0.5 92.3412 0.5C84.6882 0.5 79.1521 8.95713 79.1521 18.6858C79.1521 28.3628 84.8497 36.8303 92.5542 36.8303C94.7948 36.8303 97.8463 35.2564 99.6781 35.2564C100.11 35.2403 100.533 35.3805 100.871 35.6514C101.208 35.922 101.436 36.3053 101.513 36.7307C101.551 36.7788 101.96 36.7788 101.96 36.7307H101.95Z"
                              fill="#fff"/>
                    </g>
                </svg>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="about-image"
                 style="background-image: url(/wp-content/uploads/705b140729d5d6c377e067a25b819ccf.png)"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="about-text">
                <h4>Жіночий одяг від SUCCESS</h4>
                <p>Український бренд SUCCESS — це про зручність, розслаблені силуети та якісну функціональність. Наша
                    задача
                    — створити
                    зручні й довговічні речі поза часом, які будуть актуальними завжди. Заснували бренд у 2016 році
                    Альбіна
                    й Ігор Красні,
                    сімейна пара.</p>

                <div class="more">
                    <a href="">дізнатись більше</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                        <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="advantages">
                <div class="advantages-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M27.6789 6.43133C27.5554 6.16809 27.2908 6 27 6C26.7092 6 26.4446 6.16809 26.3211 6.43133L20.2335 19.4008L6.63674 21.4782C6.35886 21.5207 6.12805 21.715 6.03881 21.9815C5.94958 22.2481 6.01689 22.5422 6.2132 22.7434L16.0739 32.8498L13.7446 47.1293C13.6984 47.4127 13.8181 47.6977 14.0529 47.8631C14.2877 48.0285 14.5963 48.0453 14.8477 47.9064L27 41.1887L39.1524 47.9064C39.4037 48.0453 39.7124 48.0285 39.9472 47.8631C40.182 47.6977 40.3017 47.4127 40.2554 47.1293L37.9262 32.8498L47.7868 22.7434C47.9831 22.5422 48.0505 22.2481 47.9612 21.9815C47.872 21.715 47.6412 21.5207 47.3633 21.4782L33.7665 19.4008L27.6789 6.43133ZM21.4214 20.4004L27 8.51513L32.5787 20.4004C32.685 20.6269 32.8971 20.7854 33.1443 20.8232L45.6939 22.7406L36.5882 32.0732C36.422 32.2436 36.3465 32.4828 36.3848 32.7177L38.5263 45.8464L27.3629 39.6754C27.1371 39.5506 26.863 39.5506 26.6372 39.6754L15.4737 45.8464L17.6152 32.7177C17.6536 32.4828 17.5781 32.2436 17.4118 32.0732L8.30614 22.7406L20.8557 20.8232C21.1029 20.7854 21.3151 20.6269 21.4214 20.4004Z"
                              fill="#FF0000"/>
                    </svg>

                    <p>ПІДТРИМКА КЛІЄНТІВ</p>

                    <small>Менеджер Анастасія</small>
                </div>
                <div class="advantages-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12 20.25C12 15.3447 13.6939 11.6142 16.3753 9.10663C19.0647 6.59156 22.8088 5.25 27 5.25C31.1894 5.25 34.9337 6.60334 37.624 9.12529C40.3066 11.6401 42 15.3713 42 20.25C42 27.3463 38.1785 34.4978 34.266 39.9409C32.3195 42.6489 30.3717 44.9051 28.9105 46.4842C28.1802 47.2733 27.5725 47.8922 27.1486 48.3126C27.0962 48.3646 27.0466 48.4135 27 48.4593C26.9534 48.4135 26.9038 48.3646 26.8514 48.3126C26.4275 47.8922 25.8198 47.2733 25.0895 46.4842C23.6283 44.9051 21.6805 42.6489 19.734 39.9409C15.8215 34.4978 12 27.3463 12 20.25ZM26.4902 50.0501C26.4904 50.0503 26.4906 50.0505 27 49.5L26.4906 50.0505C26.7781 50.3165 27.2219 50.3165 27.5094 50.0505L27 49.5C27.5094 50.0505 27.5096 50.0503 27.5098 50.0501L27.5106 50.0493L27.5133 50.0468L27.523 50.0378L27.559 50.0041C27.5903 49.9747 27.636 49.9314 27.6953 49.8748C27.8137 49.7615 27.9862 49.5946 28.2049 49.3776C28.6423 48.9438 29.2651 48.3094 30.0114 47.503C31.5033 45.8908 33.493 43.5864 35.484 40.8164C39.4465 35.3036 43.5 27.8301 43.5 20.25C43.5 15.0037 41.6676 10.8599 38.6499 8.03096C35.6398 5.20916 31.509 3.75 27 3.75C22.4927 3.75 18.3618 5.19523 15.3508 8.01106C12.3318 10.8344 10.5 14.9789 10.5 20.25C10.5 27.8301 14.5535 35.3036 18.516 40.8164C20.507 43.5864 22.4967 45.8908 23.9886 47.503C24.7349 48.3094 25.3577 48.9438 25.7951 49.3776C26.0138 49.5946 26.1863 49.7615 26.3047 49.8748C26.364 49.9314 26.4097 49.9747 26.441 50.0041L26.477 50.0378L26.4867 50.0468L26.4894 50.0493L26.4902 50.0501ZM21 20.25C21 16.9363 23.6863 14.25 27 14.25C30.3137 14.25 33 16.9363 33 20.25C33 23.5637 30.3137 26.25 27 26.25C23.6863 26.25 21 23.5637 21 20.25ZM27 12.75C22.8579 12.75 19.5 16.1079 19.5 20.25C19.5 24.3921 22.8579 27.75 27 27.75C31.1421 27.75 34.5 24.3921 34.5 20.25C34.5 16.1079 31.1421 12.75 27 12.75Z"
                              fill="#FF0000"/>
                    </svg>

                    <p>ДОСТАВКА ПО УКРАЇНІ</p>

                    <small>Відправлення Новою поштою</small>
                </div>
                <div class="advantages-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                        <path d="M11.25 27V26.25C10.8358 26.25 10.5 26.5858 10.5 27H11.25ZM42.75 27H43.5C43.5 26.5858 43.1642 26.25 42.75 26.25V27ZM36 27V27.75C36.4142 27.75 36.75 27.4142 36.75 27H36ZM18 27H17.25C17.25 27.4142 17.5858 27.75 18 27.75V27ZM26.25 42.75C26.25 43.1642 26.5858 43.5 27 43.5C27.4142 43.5 27.75 43.1642 27.75 42.75H26.25ZM11.25 27.75H42.75V26.25H11.25V27.75ZM42 27V43.875H43.5V27H42ZM42 43.875C42 45.3247 40.8247 46.5 39.375 46.5V48C41.6532 48 43.5 46.1532 43.5 43.875H42ZM39.375 46.5H14.625V48H39.375V46.5ZM14.625 46.5C13.1753 46.5 12 45.3247 12 43.875H10.5C10.5 46.1532 12.3468 48 14.625 48V46.5ZM12 43.875V27H10.5V43.875H12ZM27 7.5C31.5563 7.5 35.25 11.1937 35.25 15.75H36.75C36.75 10.3652 32.3848 6 27 6V7.5ZM35.25 15.75V27H36.75V15.75H35.25ZM36 26.25H18V27.75H36V26.25ZM18.75 27V15.75H17.25V27H18.75ZM18.75 15.75C18.75 11.1937 22.4437 7.5 27 7.5V6C21.6152 6 17.25 10.3652 17.25 15.75H18.75ZM27 32.25C28.4497 32.25 29.625 33.4253 29.625 34.875H31.125C31.125 32.5968 29.2782 30.75 27 30.75V32.25ZM29.625 34.875C29.625 36.3247 28.4497 37.5 27 37.5V39C29.2782 39 31.125 37.1532 31.125 34.875H29.625ZM27 37.5C25.5503 37.5 24.375 36.3247 24.375 34.875H22.875C22.875 37.1532 24.7218 39 27 39V37.5ZM24.375 34.875C24.375 33.4253 25.5503 32.25 27 32.25V30.75C24.7218 30.75 22.875 32.5968 22.875 34.875H24.375ZM26.25 38.25V42.75H27.75V38.25H26.25Z"
                              fill="#FF0000"/>
                    </svg>

                    <p>БЕЗПЕКА ОПЛАТИ</p>

                    <small>Безпечна оплата онлайн</small>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-separator">
    <hr/>
</div>

<div class="section" id="our-stores">
    <div class="section-head">
        <h4>Наші магазини</h4>
    </div>

    <div class="section-content">
        <div class="stores-carousel">
            <div class="store-carousel-item">
                <figure>
                    <img alt="store" src="/wp-content/uploads/e69230184773839.jpg"/>
                </figure>

                <p class="address">Київ, Дніпровська набережна, 12 ТРЦ River Mall, поверх 2</p>

                <a class="phone" href="tel:+380933335086">Тел. +38 093 333-50-86</a>

                <div class="d-flex schedule">
                    <span>9:00 - 17:00</span>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="store-carousel-item">
                <figure>
                    <img alt="store" src="/wp-content/uploads/e69230184773839.jpg"/>
                </figure>

                <p class="address">Київ, Дніпровська набережна, 12 ТРЦ River Mall, поверх 2</p>

                <a class="phone" href="tel:+380933335086">Тел. +38 093 333-50-86</a>

                <div class="d-flex schedule">
                    <span>9:00 - 17:00</span>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="store-carousel-item">
                <figure>
                    <img alt="store" src="/wp-content/uploads/e69230184773839.jpg"/>
                </figure>

                <p class="address">Київ, Дніпровська набережна, 12 ТРЦ River Mall, поверх 2</p>

                <a class="phone" href="tel:+380933335086">Тел. +38 093 333-50-86</a>

                <div class="d-flex schedule">
                    <span>9:00 - 17:00</span>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="store-carousel-item">
                <figure>
                    <img alt="store" src="/wp-content/uploads/e69230184773839.jpg"/>
                </figure>

                <p class="address">Київ, Дніпровська набережна, 12 ТРЦ River Mall, поверх 2</p>

                <a class="phone" href="tel:+380933335086">Тел. +38 093 333-50-86</a>

                <div class="d-flex schedule">
                    <span>9:00 - 17:00</span>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013" stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center d-lg-none">
            <svg style="margin-top: 43px; margin-bottom: 30px;" xmlns="http://www.w3.org/2000/svg" width="100"
                 height="3" viewBox="0 0 100 3" fill="none">
                <rect width="33.3333" height="2" fill="#EAEAEA"/>
                <rect x="33.3335" width="33.3333" height="3" fill="black"/>
                <rect x="66.6665" width="33.3333" height="2" fill="#EAEAEA"/>
            </svg>
        </div>
    </div>
</div>

<div class="section-separator">
    <hr/>
</div>

<div class="section" id="home-blog">
    <div class="section-head">
        <h4>БЛОГ / ОГЛЯД НОВИНОК</h4>
    </div>

    <div class="section-content">
        <div class="article-card">
            <div class="article-details">
                <h4 class="article-title">Чому варто обрати одяг з льону</h4>

                <p class="article-brief">Стебла льону виривають з землі з корінням. Після їх вимочують і
                    обробляють
                    на тіпальних машинах,
                    щоб отримати волокно. До поширення машин стебла льону м'яли і тіпали за допомогою ручного
                    приладу — терлиці. Отримане волокно обробляють чесанням: зараз на чесальних машинах, у
                    старовину
                    — за допомогою чесалок. Отримана сировина називається кужіль, відходами є костриця і
                    клоччя.</p>

                <div class="article-footer">
                    <small class="created-at">08 серпня 2023</small>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10"
                             fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013"
                                  stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-card">
            <figure class="article-image-preview">
                <img alt="store" src="/wp-content/uploads/e69230184773839.jpg"/>
            </figure>

            <div class="article-details">
                <h4 class="article-title">Чому варто обрати одяг з льону</h4>

                <p class="article-brief">Стебла льону виривають з землі з корінням. Після їх вимочують і
                    обробляють
                    на тіпальних машинах,
                    щоб отримати волокно. До поширення машин стебла льону м'яли і тіпали за допомогою ручного
                    приладу — терлиці. Отримане волокно обробляють чесанням: зараз на чесальних машинах, у
                    старовину
                    — за допомогою чесалок. Отримана сировина називається кужіль, відходами є костриця і
                    клоччя.</p>

                <div class="article-footer">
                    <small class="created-at">08 серпня 2023</small>
                    <div class="more">
                        <a href="">дізнатись більше</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10"
                             fill="none">
                            <path d="M7.28568 9L12 4.99998M12 4.99998L7.28568 1M12 4.99998L1 5.00013"
                                  stroke="black"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
