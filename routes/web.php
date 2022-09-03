<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\student_registration;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\projectDetailController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FypCommitteeController;
use App\Models\department;
use App\Http\Controllers\AllocateTeacherController;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\FypParposalController;
use App\Http\Controllers\notifiycontroller;
use App\Http\Controllers\AnnouncementController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\SetTaskController;

Route::get('/', [LoginAuth::class,'index']);
Route::post('/', [LoginAuth::class,'login']);
Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/student_login', [LoginAuth::class,'student']);
    Route::get('/superviser', [LoginAuth::class,'superviser']);
    Route::get('/admin_dashboard', [LoginAuth::class,'admin']);
    Route::get('/admin-profile', [LoginAuth::class,'admin_profile']);
    Route::get('/superviser-profile', [LoginAuth::class,'superviser_profile']);
    Route::get('/student-profile', [LoginAuth::class,'student_profile']);
    // Route::get();
});
Route::get('/index',function(){
   return view('index1');
});
Route::get('forgot_password',[LoginAuth::class,'forgotPassword']);
Route::get('password_reset/{token}',[LoginAuth::class,'showresetform'])->name('reset.password.form');
Route::post('forgot_password',[LoginAuth::class,'sendlink']);
Route::post('/reset_password',[LoginAuth::class,'passwordReset']);

Route::get('markread/{id}',[LoginAuth::class,'markread']);
Route::get('adminmarkread/{id}',[LoginAuth::class,'adminmarkread']);
// Route::get('markread/{id}',function($id)
// {
//     $user=session()->get('user');
//     $user->unreadNotifications->where('id',$id)->markAsRead();
//     return redirect()->back();
// });

//student_registration

Route::get('/student-register',[student_registration::class,'index']);
Route::get('/send_requst',[student_registration::class,'send_request']);
Route::post('/send_requst',[student_registration::class,'save_request']);
Route::post('/student-register',[student_registration::class,'store']);
Route::get('/student-register-view',[student_registration::class,'view']);
Route::get('/student-register/{id}',[student_registration::class,'edit']);
Route::get('/student-status/{id}/{s}',[student_registration::class,'status']);
Route::get('/student-register_delete/{id}',[student_registration::class,'delete']);
Route::post('/student-register_update/{id}',[student_registration::class,'update']);

// department
Route::get('/department',[DepartmentController::class,'index']);
Route::post('add',[DepartmentController::class,'addData']);
Route::get('/add/view',[DepartmentController::class,'view']);
Route::get('department_edit/{id}',[DepartmentController::class,'edit']);
Route::post('department_update/{id}' ,[DepartmentController::class,'update']);
Route::get('/Department/status/{id}/{s}',[DepartmentController::class,'status']);
Route::get('/department_delete/{id}',[DepartmentController::class,'delete']);

// Session Registration
Route::get('/session',[SessionController::class,'index']);
Route::post('/session',[SessionController::class,'insert']);
Route::get('/session/view',[SessionController::class,'show']);
Route::get('/session/edit/{id}',[SessionController::class,'edit']);
Route::post('/session/update/{id}',[SessionController::class,'update']);
Route::get('/session/status/{id}/{s}',[SessionController::class,'change_status']);
Route::get('/session/delete/{id}',[SessionController::class,'delete']);

// ProgramController
Route::get('/program', function () {
    $url="/program";
    $program=department::all();
    return view('Program')->with(compact('url','program'));
});
Route::post('/program',[ProgramController::class,'store']);
Route::get('/program_view',[ProgramController::class,'view']);
Route::get('/program_edit/{id}',[ProgramController::class,'edit']);
Route::get('/program/status/{id}/{s}',[ProgramController::class,'status']);
Route::post('/program_update/{id}',[ProgramController::class,'update']);
Route::get('/program_delete/{id}',[ProgramController::class,'delete']);

//Project
Route::get('/project',[ProjectController::class,'index']);
Route::post('/project',[ProjectController::class,'store']);
Route::get('/project_view/{id}',[ProjectController::class,'view']);
Route::get('/project_edit/{id}',[ProjectController::class,'edit']);
Route::post('/project_update/{id}',[ProjectController::class,'update']);
Route::get('/project_delete/{id}',[ProjectController::class,'delete']);

// project deials:
Route::get('/projectdetail',[projectDetailController::class,'index']);
Route::post('/projectdetail',[projectDetailController::class,'insert']);
Route::get('/projectdetail/view',[projectDetailController::class,'show']);
Route::get('/projectdetail/edit/{id}',[projectDetailController::class,'edit']);
Route::post('/projectdetail/update/{id}',[projectDetailController::class,'update']);
Route::get('/projectdetail/delete/{id}',[projectDetailController::class,'delete']);

//Teacher Crud Operation
Route::get('/teacher',[TeacherController::class,'index']);
Route::get('/teacherAddByAdmin',[TeacherController::class,'teacherAddByAdmin']);
Route::post('/teacherAdd_admin',[TeacherController::class,'teacherAdd_admin']);
Route::post('/teacher',[TeacherController::class,'insert']);
Route::get('/teacher/view',[TeacherController::class,'show']);
Route::get('/teacher/edit/{id}',[TeacherController::class,'edit']);
Route::get('/teacher/status/{id}/{s}',[TeacherController::class,'status']);
Route::get('/Notification/{id?}',[TeacherController::class,'notification']);
Route::get('/fyp_proposal/{id?}',[TeacherController::class,'fyp_proposal']);
Route::post('/teacher/update/{id}',[TeacherController::class,'update']);
Route::get('/teacher/delete/{id}',[TeacherController::class,'delete']);

//admin Crud operations
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin',[AdminController::class,'insert']);
Route::get('/admin/view',[AdminController::class,'show']);
Route::get('/admin/edit/{id}',[AdminController::class,'edit']);
Route::post('/admin/update/{id}',[AdminController::class,'update']);
Route::get('/admin/delete/{id}',[AdminController::class,'delete']);



//FypCommitteeController
Route::get('/fypcommittee',[FypCommitteeController::class,'index']);
Route::post('/fypcommittee',[FypCommitteeController::class,'store']);
Route::get('/fypcommittee_view',[FypCommitteeController::class,'view']);
Route::get('/fypcommittee_edit/{id}',[FypCommitteeController::class,'edit']);
Route::post('/fypcommittee_update/{id}',[FypCommitteeController::class,'update']);
Route::get('/fypcommittee_status/{id}/{s}',[FypCommitteeController::class,'status']);
Route::get('/fypcommittee_delete/{id}',[FypCommitteeController::class,'delete']);

Route::get('/user/register', function () {
    return view('userRegister');
});

// AllocateTeacherController
Route::get('AllocateTeacher',[AllocateTeacherController::class,'index']);
Route::post('AllocateTeacher',[AllocateTeacherController::class,'insert']);
Route::get('/Allocate/view',[AllocateTeacherController::class,'show']);
Route::get('/Allocate/view/teacher',[AllocateTeacherController::class,'show_teacher']);
Route::get('/Allocate/view/std',[AllocateTeacherController::class,'show_std']);
Route::get('/Allocate/status/{id}/{n}',[AllocateTeacherController::class,'status']);
Route::get('/Allocate/edit/{id}',[AllocateTeacherController::class,'edit']);
Route::post('/Allocate/update/{id}',[AllocateTeacherController::class,'update']);
Route::get('/Allocate/delete/{id}',[AllocateTeacherController::class,'delete']);

//FypParposalController
Route::get('view_requst',[FypParposalController::class,'show']);
Route::get('view_requst',[FypParposalController::class,'show']);
//SetTaskController
Route::resource('task',SetTaskController::class);
Route::get('marked/{id}',[SetTaskController::class,'marked']);
Route::get('send_again/{id}',[SetTaskController::class,'send_again']);
Route::get('accepted/{id}',[notifiycontroller::class,'accepted']);
Route::get('accepted_task/{id}',[notifiycontroller::class,'acceptedTask']);
Route::get('supervisor_acceptTask/{id}',[notifiycontroller::class,'acceptedTask']);
Route::get('accepted_Proposal/{id}',[SetTaskController::class,'acceptedProposalStd']);
Route::get('cancle_notification/{id}',[SetTaskController::class,'cancle_noti']);
Route::get('all_notification/{id?}',[SetTaskController::class,'all_noti']);
Route::get('all_teacher_notification/{id}',[SetTaskController::class,'all_notify']);
Route::get('task/show/{id?}',[SetTaskController::class,'show'])->name('task.showall');
Route::get('task/open/{id}',[SetTaskController::class,'openTask'])->name('task.open');
Route::post('task/save/{id}',[SetTaskController::class,'submitTask'])->name('task.save');
//all task for student

Route::get('try_again',function(){
    // return $user=session()->get('user');
    return view('send_again');
});
Route::get('Cancel_request/{id}',function($id){
    $user=session()->get('user');
    $id=$user->notifications[0]->id;
return view('cancel_request',compact('id'));
});
Route::post('cancle/{id}',[notifiycontroller::class,'delete']);
Route::post('send_again/{id}',[notifiycontroller::class,'send_again']);
Route::get('std_marked/{id}',[notifiycontroller::class,'mark']);
Route::get('delete_notifiction/{id}',[notifiycontroller::class,'destory']);
Route::get('send_again_byStudent/{id}',[notifiycontroller::class,'send_again_byStudent']);
Route::get('getaccess/{id}',[notifiycontroller::class,'getaccess']);
Route::get('login_access/{id}',[notifiycontroller::class,'login_access']);
Route::get('login_access_allow/{id}',[notifiycontroller::class,'access_allow']);
Route::get('accepted_access/{id}',[notifiycontroller::class,'accepted_access']);
Route::get('Cancel_access/{id}',[notifiycontroller::class,'Cancel_access']);
Route::get('Cancel_access_byAdmin/{id}',[notifiycontroller::class,'CancelaccessbyAdmin']);
Route::get('/give_teacher_loginAccess/{id}',[notifiycontroller::class,'teacherLoginAccess']);
Route::post('send_again_byStudent',[notifiycontroller::class,'sendagainByStuent']);
//AnnouncementController
Route::resource('Announcement',AnnouncementController::class);
Route::get('adminannocement_std/{id}',[AnnouncementController::class,'adminannocement_std']);
Route::get('adminannocement_teacher/{id}',[AnnouncementController::class,'adminannocement_teacher']);

//chat
Route::get('chatpage_teacher',[ChatController::class,'chatApp_teacher']);
Route::get('chatpage_std',[ChatController::class,'chatApp_std']);
Route::get('chatpage',[ChatController::class,'chatApp']);
Route::post('/sendmessage',[ChatController::class,'sendmessage']);
Route::post('/sendmessage_teacher',[ChatController::class,'sendmessageTeacher']);
Route::post('/sendmessage_teacherTostd',[ChatController::class,'sendmessageTeachertostd']);
Route::post('/sendmessage_StdToteacher',[ChatController::class,'sendmessagestdtoTeacher']);


Route::get('/chatpagetwo/{sender_id}',[ChatController::class,'chatApptwo']);
Route::get('/chatpagetwo_teacher/{sender_id}',[ChatController::class,'chatApptwo_tch']);
Route::get('/chatpageteachertowstd/{sender_id}',[ChatController::class,'chatApptwo_tchTostd']);
Route::get('/chatpageStdToteacher/{sender_id}',[ChatController::class,'chatApptwo_stdTotch']);
// Route::get('/select-teacher', function () {
//    echo "hali";
// });

// Route::get('/teacher', function () {
//     return view('teacher');
// });



