<!-- About Section -->
<div id="about" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">О нас</h2>
                    @foreach($bodydata as $info)
                    <p class="title-description">{{ $info -> description }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- People -->
        <div class="row">

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">CTO/Founder</span>
                    </div>
                    <img src="{{ asset('img/profile/profile-01.jpg') }}" alt="John Doe">
                </div>
                <h3 class="profile-name text-center">Текст</h3>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Creative Director</span>
                    </div>
                    <img src="{{ asset('img/profile/profile-02.jpg') }}" alt="Jane Helf">
                </div>
                <h3 class="profile-name text-center">Текст</h3>

            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Lead Designer</span>
                    </div>
                    <img src="{{ asset('img/profile/profile-03.jpg') }}" alt="Joshua Insanus">
                </div>
                <h3 class="profile-name text-center">Текст</h3>

            </div>
            <!-- End Profile -->

        </div>
        <!-- End People -->
    </div>
</div>
<!-- End About Section -->