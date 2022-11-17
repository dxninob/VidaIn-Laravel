<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Module;
use App\Models\UserModule;
use App\Models\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["questions1-3"] = Question::whereBetween('id', [1, 3])->get();

        return view('patient.prueba.index1')->with("viewData", $viewData);
    }

    public function save()
    {
        $questionsAnwered = UserQuestion::where("user_id", Auth::id())->get();
        $questionCount = $questionsAnwered->count();
        $viewData = [];
        $viewData["questions1-3"] = Question::whereBetween('id', [1, 3])->get();
        $viewData["questions4-6"] = Question::whereBetween('id', [4, 6])->get();
        $viewData["questions7-9"] = Question::whereBetween('id', [7, 9])->get();
        $viewData["questions10-12"] = Question::whereBetween('id', [10, 12])->get();
        $viewData["questions13-15"] = Question::whereBetween('id', [13, 15])->get();
        $viewData["questions16-18"] = Question::whereBetween('id', [16, 18])->get();
        $viewData["questions19-21"] = Question::whereBetween('id', [19, 21])->get();
        $viewData["questions22-24"] = Question::whereBetween('id', [22, 24])->get();
        $viewData["questions25-27"] = Question::whereBetween('id', [25, 27])->get();
        $viewData["questions28-30"] = Question::whereBetween('id', [28, 30])->get();
        $viewData["questions31-33"] = Question::whereBetween('id', [31, 33])->get();
        $viewData["questions34-36"] = Question::whereBetween('id', [34, 36])->get();
        $viewData["questions37-39"] = Question::whereBetween('id', [37, 39])->get();

        if (request("index1") == "1") {
            UserQuestion::where("user_id", Auth::id())->delete();
            foreach ($viewData["questions1-3"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index2')->with("viewData", $viewData);;
        }

        if (request("index2") == "2") {
            foreach ($viewData["questions4-6"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index3')->with("viewData", $viewData);;
        }

        if (request("index3") == "3") {
            foreach ($viewData["questions7-9"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index4')->with("viewData", $viewData);;
        }

        if (request("index4") == "4") {
            foreach ($viewData["questions10-12"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index5')->with("viewData", $viewData);;
        }

        if (request("index5") == "5") {
            foreach ($viewData["questions13-15"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index6')->with("viewData", $viewData);;
        }

        if (request("index6") == "6") {
            foreach ($viewData["questions16-18"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index7')->with("viewData", $viewData);;
        }

        if (request("index7") == "7") {
            foreach ($viewData["questions19-21"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index8')->with("viewData", $viewData);;
        }

        if (request("index8") == "8") {
            foreach ($viewData["questions22-24"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index9')->with("viewData", $viewData);;
        }

        if (request("index9") == "9") {
            foreach ($viewData["questions25-27"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index10')->with("viewData", $viewData);;
        }

        if (request("index10") == "10") {
            foreach ($viewData["questions28-30"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index11')->with("viewData", $viewData);;
        }

        if (request("index11") == "11") {
            foreach ($viewData["questions31-33"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index12')->with("viewData", $viewData);;
        }

        if (request("index12") == "12") {
            foreach ($viewData["questions34-36"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }
            return view('patient.prueba.index13')->with("viewData", $viewData);;
        } else {
            foreach ($viewData["questions37-39"] as $question) {
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->question_id = $question->id;
                $userQuestion->question_score = request(strval($question->id));
                $userQuestion->save();
            }

            $scoreModule1 = 0;
            $scoreModule2 = 0;
            $scoreModule3 = 0;
            $scoreModule4 = 0;
            $scoreModule5 = 0;

            $questionsModule1 = Question::where('module', 1)->get('id');
            $questionsModule2 = Question::where('module', 2)->get('id');
            $questionsModule3 = Question::where('module', 3)->get('id');
            $questionsModule4 = Question::where('module', 4)->get('id');
            $questionsModule5 = Question::where('module', 5)->get('id');

            foreach ($questionsModule1 as $question) {
                $userQuestionsModule1 = UserQuestion::where('question_id', $question->id)->where('user_id', Auth::id())->get('question_score');

                foreach ($userQuestionsModule1 as $questionScore) {
                    $scoreModule1 += $questionScore->question_score;
                }
            }

            foreach ($questionsModule2 as $question) {
                $userQuestionsModule2 = UserQuestion::where('question_id', $question->id)->where('user_id', Auth::id())->get('question_score');

                foreach ($userQuestionsModule2 as $questionScore) {
                    $scoreModule2 += $questionScore->question_score;
                }
            }

            foreach ($questionsModule3 as $question) {
                $userQuestionsModule3 = UserQuestion::where('question_id', $question->id)->where('user_id', Auth::id())->get('question_score');

                foreach ($userQuestionsModule3 as $questionScore) {
                    $scoreModule3 += $questionScore->question_score;
                }
            }

            foreach ($questionsModule4 as $question) {
                $userQuestionsModule4 = UserQuestion::where('question_id', $question->id)->where('user_id', Auth::id())->get('question_score');

                foreach ($userQuestionsModule4 as $questionScore) {
                    $scoreModule4 += $questionScore->question_score;
                }
            }

            foreach ($questionsModule5 as $question) {
                $userQuestionsModule5 = UserQuestion::where('question_id', $question->id)->where('user_id', Auth::id())->get('question_score');

                foreach ($userQuestionsModule5 as $questionScore) {
                    $scoreModule5 += $questionScore->question_score;
                }
            }


            $scoreArray[0] = $scoreModule1;
            $scoreArray[1] = $scoreModule2;
            $scoreArray[2] = $scoreModule3;
            $scoreArray[3] = $scoreModule4;
            $scoreArray[4] = $scoreModule5;

            $modules = Module::all();
            $cont = 0;
            foreach ($modules as $module) {

                $usermod = new UserModule();
                $usermod->module_id = $module->id;
                $usermod->user_id = Auth::id();
                $usermod->score = $scoreArray[$cont];
                $usermod->save();
                $cont++;
            }

            return redirect('/paciente/test/resultados');
        }
    }

    // public function graphics()
    // {
    //     $scores = [];
    //     $datos = UserModule::where('user_id', Auth::id())->get();
    //     foreach ($datos as $dato) {
    //         array_push($scores, $dato->score);
    //     }

    //     $viewData = [];
    //     $totals = [30, 30, 30, 40, 65];
    //     for ($i = 0; $i < 5; $i++) {
    //         $p = $scores[$i] / $totals[$i];
    //         array_push($viewData, $p * 100);
    //     }
    //     return view('test.graphics')->with("viewData", $viewData);
    // }
}
