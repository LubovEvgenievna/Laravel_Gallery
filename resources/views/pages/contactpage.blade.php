<!-- Contact Section -->
<div id="contact" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Обратная связь</h2>
                    <h3 class="title-description">Есть вопросы? Пишите!</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Contact Form -->
        <div class="row">
            <div class="span9">

                <form id="contact-form" class="contact-form" action="#">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="Имя" value="" name="name" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="Email" value="" name="email" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="Введите текст" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p class="contact-submit">
                        <a id="contact-submit" class="submit" href="#">Отправить</a>
                    </p>

                    <div id="response">

                    </div>
                </form>

            </div>

            <div class="span3">
                <div class="contact-details">
                    @foreach($bodydata as $info)
                    <h3>Контакты</h3>
                    <ul>
                        <li><a href="#">{{ $info -> email }}</a></li>
                        <li>{{ $info -> phone }}</li>
                        <li>{{ $info -> address }}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</div>
<!-- End Contact Section -->