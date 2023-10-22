@extends('layouts.app')

@section('content')

    <?php



    ?>
    <div class="container my-block">



        <div class="alert alert-primary" role="alert" style="text-align: center">
            В отделении "{{$department}}" вам необходимо выбрать @if($department == 'Начальные классы') пятерых @else
                трех @endif лучших по вашему мнению студентов
        </div>

        <form method="post" action="/golos" name="Form">
            @csrf

            <table class="table table-hover table-light">
                <thead>
                <tr>
                    <th scope="col">ФИО конурсанта</th>
                    <th scope="col" style="text-align: center">Номер группы</th>
                    <th scope="col">Проголосовать</th>
                </tr>
                </thead>
                <tbody>


                @foreach($applicants as $key)
                    <tr>
                        @if($key['department'] == $department)
                            <td>{{$key['fio']}}</td>
                            <td style="text-align: center">{{$key['number_group']}}</td>
                            <td>

                                <div class="form-check">
                                    <input class="first-group form-check-input" type="checkbox" value="{{$key['id']}}"
                                           id="{{$key['id']}}" name="formDoor[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Выбрать
                                    </label>
                                </div>

                            </td>


                        @endif

                    </tr>
                @endforeach

                </tbody>
            </table>
            <input type="hidden" name="department" value="{{$department}}">
            <input type="hidden" name="id" value="{{$id}}">
            <button type="submit" id="myBtn"
                    class="btn disabled btn-primary position-relative top-50 start-50 translate-middle mt-5">
                Проголосовать
            </button>

        </form>
    </div>




    @if($department == 'Начальные классы')
        <script>
            const button = document.getElementById('myBtn');


            document.forms.Form.addEventListener('change', () => {
                let check = document.querySelectorAll('.first-group:checked');
                let notCheck = document.querySelectorAll('.first-group:not(:checked)');


                if (check.length >= 5) {
                    for (e of notCheck) e.disabled = true;
                    button.disabled = false;
                    button.classList.remove("disabled");
                    c
                } else {
                    for (e of notCheck) e.disabled = false;
                    button.classList.add("disabled");
                }
            });
        </script>
    @else
        <script>
            const button = document.getElementById('myBtn');

            document.forms.Form.addEventListener('change', () => {
                let check = document.querySelectorAll('.first-group:checked');
                let notCheck = document.querySelectorAll('.first-group:not(:checked)');


                if (check.length >= 3) {
                    for (e of notCheck) e.disabled = true;
                    button.disabled = false;
                    button.classList.remove("disabled");
                } else {
                    for (e of notCheck) e.disabled = false;
                    button.classList.add("disabled");
                }
            });
        </script>
    @endif

@endsection
