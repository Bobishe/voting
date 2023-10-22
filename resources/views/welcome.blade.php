@extends('layouts.app')

@section('content')



    <div class="container ">


        <div class="row ">
            <div class="col-lg-4"></div>
            <div class="col-lg-4  my-block">

                {{--<div id="timer" style="text-align: center; padding: 50px;"><h4 style="margin: 0; padding: 0; font-size: 30px;">Голосование завершено!</h4></div>--}}


                {{--<div id="timer" style="text-align: center"><h4 style="margin: 0; padding: 0;">До начала голосования осталось:</h4><br>
                    <h2 style="margin-top: -20px;">
                        <script language="JavaScript">
                            TargetDate = "2023-02-02T09:20:00";
                            BackColor = "white";
                            ForeColor = "";
                            CountActive = true;
                            CountStepper = -1;
                            LeadingZero = true;
                            DisplayFormat = "%%H%% : %%M%% : %%S%% ";
                            FinishMessage = "Голосуем!";
                        </script>
                        <script language="JavaScript" src="https://rhashemian.github.io/js/countdown.js"></script>
                    </h2>
                </div>--}}



                {{--НИЖЕ РАСКОМЕНТИРОВАТЬ!!!!--}}

                @if($error == 0)

                <div class="alert alert-primary" role="alert" style="text-align: center">
                    Просим обратить внимание, что после входа у вас есть только одна возможность проголосовать! Еслы вы
                    зашли, но не проголосовали, то в дальнейшем вы не сможете повторить попытку!
                </div>

                @else

                    <div class="alert alert-danger" role="alert" style="text-align: center">
                        Данные введены неверно!
                    </div>

                @endif





                <form method="post" action="/insert" class="position-relative  start-50 translate-middle" style="top: 35%">
                    @csrf
                    <div class="mb-3">
                        <label for="department" class="form-label">Отделение</label>
                        <select id="department" class="form-select" name="department" required >
                            <option value="" selected="selected"></option>
                            <option value="Начальные классы">Начальные классы</option>
                            <option value="Дошкольное образование">Дошкольное образование</option>
                            <option value="Информационные системы и программирование">Информационные системы и
                                программирование
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fio" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="fio" name="fio" pattern="^(?=.*[А-Яа-я]){5,}$" required minlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Номер студенчиского билета</label>
                        <input type="text" class="form-control" id="number" name="number" pattern="^(?=.*[0-9]){5,}$" required minlength="3" maxlength="4">
                    </div>
                    <button type="submit" class="btn btn-primary position-relative top-50 start-50 translate-middle mt-5">
                        Проголосовать
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

@endsection
