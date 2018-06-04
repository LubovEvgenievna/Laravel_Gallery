@extends('adminpanel.index')

@section('content')
    <main>
        <div class="row">
            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Сообщения</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="/incoming">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">person</i>
                                <span class="card-text-size indigo-text text-lighten-1">Входящие</span>
                            </div>
                        </a>
                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="/outgoing">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">people</i>
                                <span class="card-text-size indigo-text text-lighten-1">Исходящие</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Категории портфолио</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="card-text-size indigo-text text-lighten-1">Редактировать</span>
                            </div>
                        </a>

                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="card-text-size truncate indigo-text text-lighten-1">Добавить категорию</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Фото</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                                <span class="card-text-size indigo-text text-lighten-1">Редактировать</span>
                            </div>
                        </a>

                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">loyalty</i>
                                <span class="card-text-size indigo-text text-lighten-1">Добавить фото</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Настройки</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">store</i>
                                <span class="indigo-text text-lighten-1">Настройки</span>
                            </div>
                        </a>
                        <div class="col s1">&nbsp;</div>
                        <div class="col s1">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop