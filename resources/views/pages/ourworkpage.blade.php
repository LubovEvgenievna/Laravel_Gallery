<!-- Header -->
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
            <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>

        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="#home-slider">Главная</a></li>
                <li><a href="#work">Наши работы</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Наши работы</h2>
                    <h3 class="title-description">Описание описание описание</a>.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Portfolio Projects -->
        <div class="row">
            <div class="span3">
                <!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Выберите категорию</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Все работы</a></li>
                        @foreach($worktypedata as $type)
                        <li><a href="#filter" data-option-value=".{{ $type -> sort_id }}">{{ $type -> title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="span9">
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs">

                            @foreach($workdata as $work)

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 {{ $work -> worktype_sort_id }}">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $work -> title }}" href="{{ asset('img/work/full/image-01-full.jpg') }}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{ asset('img/work/thumbs/image-01.jpg') }}" alt="{{ $work -> description }}">
                            </li>
                            <!-- End Item Project -->

                            @endforeach
                        </ul>
                    </section>

                </div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->