<ul class="side-nav fixed z-depth-2">
    <li class="center no-padding">
        <div class="indigo darken-2 white-text" style="height: 180px;">
            <div class="row">
                <div style="margin-top: -13%;  padding-top: 40%">
                    <a class=" white-text" href="/admin">Админ панель</a>
                </div>
            </div>
        </div>
    </li>

    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header waves-effect messages-div"><b>Сообщения</b></div>
            @if($count_mail)
            <div class="new-messages-div">
                <div class="new-messages">{{ $count_mail }}</div>
            </div>
            @endif
            <div class="collapsible-body">
                <ul>
                    <li>
                        <a class="waves-effect" style="text-decoration: none;" href="/incoming">Входящие</a>
                    </li>

                    <li>
                        <a class="waves-effect" style="text-decoration: none;" href="/outgoing">Исходящие</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <div class="collapsible-header waves-effect"><b>Категории портфолио</b></div>
            <div class="collapsible-body">
                <ul>
                    <lI>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Редактировать</a>
                    </lI>

                    <li>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Добавить категорию</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <div class="collapsible-header waves-effect"><b>Портфолио</b></div>
            <div class="collapsible-body">
                <ul>
                    <lI>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Редактировать</a>
                    </lI>

                    <li>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Добавить фото</a>
                    </li>
                </ul>
            </div>
        </li>


        <li>
            <div class="collapsible-header waves-effect"><b>Настройки страницы</b></div>
        </li>


    </ul>
</ul>

<header>
    <ul class="dropdown-content" id="user_dropdown">
        <li><a class="indigo-text" href="#!">Профиль</a></li>
        <li><a class="indigo-text" href="#!">Выход</a></li>
    </ul>

    <nav class="indigo" role="navigation">
        <div class="nav-wrapper">

            <ul class="right hide-on-med-and-down">
                <li>
                    <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
                </li>
            </ul>

        </div>
    </nav>

    <nav>
        <div class="nav-wrapper indigo darken-2">
            <a style="margin-left: 20px;" class="breadcrumb" href="#!">Админ</a>
            <a class="breadcrumb" href="#!">Панель</a>

            <div style="margin-right: 20px;" id="timestamp" class="right"></div>
        </div>
    </nav>
</header>