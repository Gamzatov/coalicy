<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>Благодійний фонд "Народна Коаліція"</title>
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" media="all" href="./assets/style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon-6a50c028edd9d4d530422b261209de3cab047500b89b03d596884c27a1943be0.svg" />
    <link rel="stylesheet" href="./assets/carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

</head>

<body>
    <? include './navbar.php' ?>
    <div class="sticky-footer">
        <div class="intro">

        </div>
        <div class="head_text">
            <h1>
                Допомагаємо дітям <br> і їхнім родинам під час війни
            </h1>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: #111;">Допомогти дітям</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="main-btn" style="width: 112px;" data-toggle="modal" data-target="#exampleModal">
                Допомогти
            </button>

        </div>

        <div class="about_us">
            <div class="about_us-inner">

                <div class="about_us-block2">
                    <div class="about_us-wrapper">
                        <div class="about_us-title main-title">Що для вас означає «благодійність»?</div>
                        <div class="about_us-text">

                            Для нас благодійність –

                            це насамперед уміння почути чужий біль. Це вміння поділити чужий біль.

                            Це системна боротьба із системними проблемами. Це відкритість і, звичайно, націленість на
                            результат.</div>
                    </div>
                    <!-- <div class="about_us-image">
                      
                    </div> -->
                    <div class="video_about">
                        <div class="video">
                            <video src="./assets/about.mp4" autoplay muted controls></video>
                        </div>
                        <div class="about_text">
                            <b> 24 лютого</b>, ми досі пам’ятаємо як все почалось. Важко повірити, але це відбувається з нами і з нашою країною. Є відчуття, що наші життя на паузі, але ми розуміємо, що треба жити та допомагати жити іншим! Народна коаліція - благодійна організація, створена ще в 2015 році. Ми не могли залишитися в стороні. На нашу думку благодійність - це вміння відчувати чужий біль, тому ми об’єднали наші зусилля з небайдужими та допомагаємо в такі скрутні часи. Ця війна стосується кожного, наш фронт - волонтерський і разом ми сила! Все буде Україна!
                        </div>

                    </div>
                    <div class="what_we_do">
                        <div class="item_we_do">
                            <div class="we_do_img">
                                <img src="./assets/gum.png" alt="">
                            </div>
                            <div class="we_do_text">
                                <p class="we_do_title">
                                    Надаємо гуманітарну допомогу
                                </p>
                                <p>
                                    Допомагаємо дитячим лікарням, біженцям і родинам, що потерпають від цієї війни. Передаємо медикаменти, продукти харчування, одяг, засоби захисту та інші нагально потрібні для життя речі.
                                </p>
                            </div>
                        </div>
                        <div class="item_we_do">
                            <div class="we_do_img">
                                <img src="./assets/prod.jpg" alt="">
                            </div>
                            <div class="we_do_text">
                                <p class="we_do_title">
                                    Передаємо продуктові набори
                                </p>
                                <p>
                                    Пакуємо та доставляємо набори з продуктами харчування для тих, кому вони зараз життєво необхідні. Співпрацюємо з гуманітарними штабами, адміністраціями, волонтерськими організаціями.
                                </p>
                            </div>
                        </div>
                        <div class="item_we_do">
                            <div class="we_do_img">
                                <img src="./assets/war.png" alt="">
                            </div>
                            <div class="we_do_text">
                                <p class="we_do_title">
                                    Допомагаємо нашим воїнам
                                </p>
                                <p>
                                    Допомагаємо у збору коштів та закупівлі спорядження, автомобілів та ліків для наших воїнів.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- <div class="about_us-block3">

                </div> -->
            </div>
        </div>
    </div>
    <div class="max_widtsh">

        <div class="container title">
            <h1 style="text-align: center;">Наші Партнери</h1>
            <section class="customer-logos slider">
                <div class="slide"><img src="./assets/partners/2.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/1.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/3.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/4.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/5.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/6.jpg">
                </div>

                <div class="slide"><img src="./assets/partners/7.jpg">
                </div>

                <!-- <div class="slide"><img src="https://pbs.twimg.com/profile_images/992492815039918080/vRhwA-5Y_400x400.jpg"> -->
                <!-- </div> -->
            </section>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".customer-logos").slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });
    </script>
    <? @include './footer.php' ?>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Open modal on page load
            $("#myModal").modal('show');

            // Close modal on button click
            $(".btn").click(function() {
                $("#myModal").modal('hide');
            });
        });
    </script>
</body>

</html>