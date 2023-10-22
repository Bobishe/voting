<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\applicants;
use Illuminate\Support\Facades\DB;


class golos extends Controller
{
    public function insert(Request $request)
    {

        $personal = personal::all();
        $applicants = applicants::all();




        $data = $request->only(['department', 'fio', 'number']);

        foreach ($personal as $key) {
            if ($key['department'] == $data['department'] and $key['fio'] == $data['fio'] and $key['number'] == $data['number']) {
                if ($key['golos'] == 0 /*or $key['golos'] == null*/) {
                    $id = $key['id'];
                    $personal = personal::find($id);
                    $personal->golos = $personal->golos + 1;
                    $personal->save();

                    return view('golosovanie', [
                        "department" => $data['department'],
                        "applicants" => $applicants,
                        "id" => $id,
                    ]);
                } else {
                    return view('error');
                }
            }
        }
        return view('welcome', [
            "error" => "1"
        ]);
    }


    public function golos(Request $request)
    {


        $id = $request['formDoor'];
        $department = $request['department'];
        $id_personal = $request['id'];

        $personal = personal::find($id_personal);


        /*if ($personal['golos'] == 1) {*/
            if ($department == 'Начальные классы') {
                /*$personal->golos = $personal->golos + 1;*/
                /*$personal->save();*/
                for ($i = 0; $i <= 4; $i++) {

                    $applicants = applicants::find($id[$i]);

                    $applicants->voice = $applicants->voice + 1;


                    $applicants->save();
                }
            } else {
                /*$personal->golos = $personal->golos + 1;*/
//                $personal->save();
                for ($i = 0; $i <= 2; $i++) {

                    $applicants = applicants::find($id[$i]);

                    $applicants->voice = $applicants->voice + 1;

                    $applicants->save();
                }
            }
            /*return view('ok');*/
            return redirect('/ok');

        /*} else {
            return redirect('/error');
        }*/


    }

    public function error()
    {
        return view('error');
    }


    public function ok()
    {
        return view('ok');
    }


    public function results()
    {


        $applicants = applicants::all();
        $sorted = $applicants->sortByDesc('voice');


        $countNACHtotal = DB::table('personals')->where('department', 'Начальные классы')->count();
        $countDOSHtotal = DB::table('personals')->where('department', 'Дошкольное образование')->count();
        $countINFtotal = DB::table('personals')->where('department', 'Информационные системы и программирование')->count();

        $countNACH = DB::table('personals')->where('department', 'Начальные классы')->where("golos", 1)->count();
        $countNACH += DB::table('personals')->where('department', 'Начальные классы')->where("golos", 2)->count();

        $countDOSH = DB::table('personals')->where('department', 'Дошкольное образование')->where("golos", 1)->count();
        $countDOSH += DB::table('personals')->where('department', 'Дошкольное образование')->where("golos", 2)->count();

        $countINF = DB::table('personals')->where('department', 'Информационные системы и программирование')->where("golos", 1)->count();
        $countINF += DB::table('personals')->where('department', 'Информационные системы и программирование')->where("golos", 2)->count();



        return view('results', [
            "applicants" => $sorted,

            "countNACHtotal" => $countNACHtotal,
            "countDOSHtotal" => $countDOSHtotal,
            "countINFtotal" => $countINFtotal,

            "countNACH" => $countNACH,
            "countDOSH" => $countDOSH,
            "countINF" => $countINF,



        ]);
    }


    /*UPDATE `applicants` SET `voice`= NULL */


    public function test()
    {

        $applicants = applicants::all();


        return view('test', [
            "department" => 'Начальные классы',
            "applicants" => $applicants
        ]);
    }

}
