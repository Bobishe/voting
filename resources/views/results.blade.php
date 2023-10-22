@extends('layouts.app')

@section('content')

    <div class="container my-block ">
        <div class="row " style="padding-left: 30px; padding-right: 30px;">
            <h2 style="font-size: 2rem;text-align: center">Начальные классы</h2>
            <h4 style="text-align: center">{{$countNACH}} из {{$countNACHtotal}} или {{round($countNACH/$countNACHtotal*100, 1)}} %</h4>

            <table class="table table-hover table-light table-bordered mt-5">
                <thead>
                <tr>
                    <th scope="col">ФИО конурсанта</th>
                    <th scope="col" style="text-align: center">Номер группы</th>
                    <th scope="col" style="text-align: center">Проголосовало</th>
                </tr>
                </thead>
                <tbody>


                @foreach($applicants as $key)
                    <tr>
                        @if($key['department'] == 'Начальные классы')
                            <td >{{$key['fio']}}</td>
                            <td style="text-align: center">{{$key['number_group']}}</td>
                            <td style="text-align: center">
                                {{$key['voice']}}
                            </td>


                        @endif

                    </tr>
                @endforeach

                </tbody>
            </table>

            <h2 style="font-size: 2rem;text-align: center" class="mt-5">Дошкольное образование</h2>
            <h4 style="text-align: center">{{$countDOSH}} из {{$countDOSHtotal}} или {{round($countDOSH/$countDOSHtotal*100, 1)}} %</h4>

            <table class="table table-hover table-light table-bordered mt-5">
                <thead>
                <tr>
                    <th scope="col">ФИО конурсанта</th>
                    <th scope="col" style="text-align: center">Номер группы</th>
                    <th scope="col" style="text-align: center">Проголосовало</th>
                </tr>
                </thead>
                <tbody>


                @foreach($applicants as $key)
                    <tr>
                        @if($key['department'] == 'Дошкольное образование')
                            <td >{{$key['fio']}}</td>
                            <td style="text-align: center">{{$key['number_group']}}</td>
                            <td style="text-align: center">
                                {{$key['voice']}}
                            </td>


                        @endif

                    </tr>
                @endforeach

                </tbody>
            </table>


            <h2 style=" font-size: 2rem;text-align: center" class="mt-5">Информационные системы и программирование</h2>
            <h4 style="text-align: center">{{$countINF}} из {{$countINFtotal}} или {{round($countINF/$countINFtotal*100, 1)}} %</h4>

            <table class="table table-hover table-light table-bordered mt-5">
                <thead>
                <tr>
                    <th scope="col">ФИО конурсанта</th>
                    <th scope="col" style="text-align: center">Номер группы</th>
                    <th scope="col" style="text-align: center">Проголосовало</th>
                </tr>
                </thead>
                <tbody>


                @foreach($applicants as $key)
                    <tr>
                        @if($key['department'] == 'Информационные системы и программирование')
                            <td >{{$key['fio']}}</td>
                            <td style="text-align: center">{{$key['number_group']}}</td>
                            <td style="text-align: center">
                                {{$key['voice']}}
                            </td>


                        @endif

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
