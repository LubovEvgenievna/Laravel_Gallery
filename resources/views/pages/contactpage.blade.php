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

                {!! Form::open(['id' => 'contact-form'], ['class' => 'contact-form']) !!}
                <p class="contact-name">
                    {!! Form::text('name', null, ['placeholder' => 'Имя:'], ['id' => 'contact_name']) !!}
                </p>
                <p class="contact-name">
                    {!! Form::text('email', null, ['placeholder' => 'E-mail:'], ['id' => 'contact_email']) !!}
                </p>
                <p class="contact-name">
                    {!! Form::textarea('message', null, ['placeholder' => 'Сообщение:'], ['id' => 'contact_message']) !!}
                </p>
                    {!! Form::submit('Отправить', ['class' => 'submit']) !!}
                {!! Form::close() !!}

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