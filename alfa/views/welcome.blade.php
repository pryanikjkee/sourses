<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alfa Bank </title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/css/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/css/main.css">
    <link rel="stylesheet" href="{{url('/')}}/css/media.css">
    <script src="{{url('/')}}/js/app.js"></script>
</head>

<body>

    <div id="main__wrapper">
        <header class="header">
            <div class="container header__box">
                <div class="row">
                    <div class="col-lg-3 col-6 logo">
                        <a href="">

                            <img src="{{url('/')}}/assets/logoweb.png" alt="" class="img-fluid d-lg-block d-none">
                            <img src="{{url('/')}}/assets/logomobile.png" alt="" class="img-fluid d-lg-none d-block">
                        </a>

                    </div>
                    <div class="col-lg-6 order-3 order-lg-2 col-12 text-lg-center header heading">
                        <h1>Календар подій</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus odio non, magnam adipisci illum dolore eius provident voluptatibus
                            autem nostrum quo aliquid et, blanditiis repellendus inventore iure corrupti, nobis aperiam.
                        </p>
                    </div>
                    <div class="col-lg-3 order-2 order-lg-3 col-6 text-right header info-link">
                        <div class="filter__mounth-button mt-3 mr-3">
                            <i class="ti-filter"></i>
                        </div>



                    </div>
                </div>
            </div>
            <div class="filter__mounth">
                <!-- month filters choose -->
                <div class="container px-5 pt-4 pb-4">
                    <form name="filter">
                        @foreach ($mounths as $mounth) @if(count($mounth->discount) and $mounth->number >= $now->month)
                        <p class="clickfilter">
                            <input type="checkbox" class="filterlist" value="{{ $mounth->id}}" name="filter{{ $mounth->id}}" aria-label="Checkbox for following text input">{{ $mounth->name}}
                        </p>
                        @endif @endforeach
                    </form>
                </div>

            </div>

        </header>
        <div class="action__list__wrapper">
            <div class="container p-0">
           
                @foreach ($mounths as $mounth) @if(count($mounth->discount) and $mounth->visible)
        
                <div class="action__item filter{{$mounth->id}} @if($now->month == $mounth->number) mounth__active @endif  @if($now->month < $mounth->number) mounth__future__locked locked__mounth @endif "
                    data-month="filter{{$mounth->id}}">
                    <div class="col-12 month__name text-lg-right p-0">
                        <div class="col-lg-6 col-12 action__mounth text-left offset-lg-6 p-0">{{$mounth->name}} {{$now->year}}</div>
                    </div>

                    @foreach ($mounth->discount as $key => $disc) @if($disc->active) @if($now->month
                    < $mounth->number)
                        <div class="lock text-center col-12">
                            <img src="{{url('/')}}/assets/lock.png" alt="" class="img-fluid mx-auto">
                        </div>
                        @endif
                        <div class="row no-gutters mobile__row mt-2">
                            <div class="col-6 d-lg-block d-none " style="background-image: url('{{$disc->image}}');background-repeat:no-repeat!important;background-size:cover!important;">



                            </div>
                            <div class="col-lg-6 col-12 action @if($now->month == $mounth->number && $disc->time_status == 2) active   @else future @endif">
                                <div class="action__desc">
                                    <h2>
                                        {{ $disc->discount_title }}
                                    </h2>
                                    <p>
                                        {!! \Illuminate\Support\Str::limit ($disc->discount_description, 300) !!}
                                    </p>
                                </div>

                                <button type="button" id="info__button" class="btn click{{$disc->id}} btn-primary btn-sm">Детальніше</button>


                            </div>
                        </div>
                        @endif @endforeach
                </div>
                @endif @endforeach



            </div>


        </div>


        <footer>
            <div class="container px-0 footer__container">
                <div class="row mx-0">
                    <div class="col-lg-7 col-12">
                        <a href="">Депозити</a>
                        <a href="">Кредити</a>
                        <a href="">Партнерська программа</a>
                        <a href="">Малому бізнесу</a>
                        <a href="">Вакансії</a>
                        <a href="">Тендерний комітет</a>
                        <a href="">Служба підтримки</a>
                    </div>
                    <div class="col-lg-4 col-8 social__icons pt-2 text-center">
                        <a href="">
                            <i class="ti-instagram"></i>
                        </a>
                        <a href="">
                            <i class="ti-twitter-alt"></i>
                        </a>
                        <a href="">
                            <i class="ti-facebook"></i>
                        </a>
                    </div>
                    <div class="col-lg-1 col-4 text-lg-right text-left">
                        <div class="to__top__btn ">
                            <i class="ti-angle-up"></i>
                        </div>
                    </div>
                    <script>
                        $(function () {
                            $('.to__top__btn').click(function () {
                                $('body,html').animate({
                                    scrollTop: 0
                                }, 400);
                                return false;
                            });
                        })

                    </script>
                </div>
            </div>
        </footer>

    </div>



    @foreach ($mounths as $mounth) @if(count($mounth->discount)) @foreach ($mounth->discount as $key => $disc)

    <div class="action__item__expand cur-modal cur-modal{{$disc->id}} ">
        <div class="action__bg" style="background-image: url('{{$disc->image}}')"></div>
        <div class="container-fluid">




            <div class="col-lg-6 col-12 offset-lg-6 pt-5 p-lg-5 p-0">
                <h2>
                    {{ $disc->discount_title }}
                </h2>
                <div class="action__bg__mobile col-10 offset-1">
                    <img src="{{$disc->image}}" class="img-fluid d-lg-none d-block " alt="">
                </div>
                <div class="close__expand">
                    <i class="ti-angle-down"></i>
                </div>
                <div class="content">
                    {!! $disc->discount_description !!}
                </div>

                <div class="close__expand infooter">
                    <i class="ti-angle-down"></i>
                </div>
            </div>
            <script>
                $(function () {

                    $(".click{{$disc->id}}").click(function () {
                        $(".cur-modal{{$disc->id}}").addClass("show");
                        $('body').addClass('modal__open');
                    });
                    $('.cur-modal .close__expand').click(function () {
                        $(".cur-modal").removeClass("show");
                        $('body').removeClass('modal__open');
                    });

                })

            </script>

        </div>

    </div>
    @endforeach @endif @endforeach
    <!-- modal for 1 item future-modal-->

    <script>
        $(function () {
            var $menu = $('.filter__mounth');
            $('.filter__mounth-button').click(function () {
                $menu.toggle(200, "linear");
                event.stopPropagation();

            })

            $('body').on('click', '*:not(.filter__mounth)', function (e) {
                if ($(e.target).closest('.filter__mounth').length === 0) {
                    // hide menu here
                    $(".filter__mounth").fadeOut();
                    console.log("hide not");
                }
            });



        })

    </script>
</body>

</html>
