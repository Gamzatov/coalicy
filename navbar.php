<head>
    <link rel="stylesheet" media="all" href="./assets/style.css" data-turbolinks-track="reload" />
    <script src="./packs/js/script.js" data-turbolinks-track="reload"></script>
    <title>Благодійний фонд "Народна Коаліція"</title>
</head>
<nav class="navbar navbar-expand-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="./assets/nav_logo.png" alt="" class="header_logo"></a>
        <div class="nav-item mobile">
            <a class="main-btn mobile-btn" href="./support_page.php">Підтримати</a>
        </div>
        <div aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="ico-btn" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"> <span class="ico-btn__burger"></span></div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item active"><a class="nav-link hover" href="./index.php">Головна</a></li>
                <li class="nav-item"><a class="nav-link hover" href="./support_army.php">Допомога Армії</a>
                </li>
                <li class="nav-item"><a class="nav-link hover" href="./common_questions.php">Часті
                        Запитання</a></li>
                <li class="nav-item lg-btn"><a class="main-btn" href="./support_page.php">Підтримати</a></li>
                <li class="nav-item d-flex align-items-center">
                    <div class="nav-link">Гаряча Лінія</div>
                    <div class="d-flex flex-column"><a class="phone" href="../tel +3806348734">+38 64 327823</a></div>
                </li>
                <!-- <li class="dropdown nav-item languages"><a class="nav-link px-2 dropdown-toggle d-flex" data-bs-toggle="dropdown" href="../uk"><img class="globe-icon" src="./assets/globe-3b01e087c5f45f3f8c441fb9b1807933d902c6547518ed59d8240f5ea79f634c.svg" />UA</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../en">ENG</a></li>
                        <li><span class="dropdown-item">UA</span></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<style>
    .ico-btn {
        display: none !important;
    }

    @media(max-width:1100px) {
        .ico-btn {
            display: flex !important;
        }
    }

    .ico-btn {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        color: #a5c0c4;
        cursor: pointer;
        transition: all .20s ease-in;
        border-radius: 50%;
    }

    .ico-btn:hover {
        background-color: rgba(255, 255, 255, 0.14);
    }

    .ico-btn__burger,
    .ico-btn__burger::before,
    .ico-btn__burger::after {
        width: 20px;
        height: 2px;
        background: currentColor;
        border-radius: 2px;
        transition: all .25s cubic-bezier(0.4, 0.0, 0.2, 1);
        ;
    }

    .ico-btn__burger::before {
        content: '';
        position: absolute;
        transform: translateY(-6px);
    }

    .ico-btn__burger::after {
        content: '';
        position: absolute;
        transform: translateY(6px);
    }

    /* -------------------------------------------
**  ANIMATION 
============================================= */
    .ico-btn.is-active .ico-btn__burger {
        background: transparent;
    }

    .ico-btn.is-active .ico-btn__burger::before {
        transform: rotate(-45deg);
    }

    .ico-btn.is-active .ico-btn__burger::after {
        transform: rotate(45deg);
    }

    .ico-btn.is-active {
        transform: rotate(360deg);
    }
</style>
<script>
    //  Initial values
    let isMenuOpen = false;

    // Selectors
    const $btnBurger = document.querySelector('.ico-btn');

    // Event Listeners
    $btnBurger.addEventListener('click', onBtnBurgerClicked)

    // Functions
    function onBtnBurgerClicked(e) {
        isMenuOpen = !isMenuOpen;
        $btnBurger.classList.toggle('is-active');
    }
</script>