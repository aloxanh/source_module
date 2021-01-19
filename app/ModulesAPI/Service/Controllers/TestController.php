<?php
namespace App\ModulesAPI\Service\Controllers;

use App\Http\Controllers\Controller;

use Request;
use App\Models\service\Ticket;
use App\Models\shared\Comment;
use App\Models\shared\Company;
use App\Models\shared\Department;
class TestController extends Controller
{

    // API DEMO
    // GET (SELECT): Lấy những thông tin từ URIs (resource).
    // Ví dụ: http://localhost/api/v1/contracts (trả về danh sách hợp đồng)
    // GET (SELECT): Lấy những thông tin từ URIs (resource).
    // Ví dụ: http://localhost/api/v1/contract/1 (trả về hợp đồng với id là 1)
    // POST (CREATE): Tạo mới một Resource.
    // Ví dụ: http://localhost/api/v1/contract (trả tạo một hợp đồng mới)
    // PUT (UPDATE): Cập nhật thông tin cho Resource.
    // Ví dụ: http://localhost/api/v1/contract/1 (cập nhập hợp đồng với id là 1)
    // DELETE (DELETE): Xoá một Resource.
    // Ví dụ: http://localhost/api/v1/contract/1 (Xóa hợp đồng với id là 1)
    public function index()
    {
        // $dataTicket =Ticket::find(1);
        // $comment = new Comment();
        // $comment->content = "xinchao Tương tự như quan hệ OneToMany bình thường" ;
        // $comment->user_id = Auth()->user()->id;
        // $comment->parent_id  = 0;
        // $dataTicket->comments()->save($comment);
        $result = array();
        $result['data'] =  array();
        // $result['data'] =$dataTicket;

        // $comment = Comment::find(1);
        // $tk = new Ticket();
        // $tk=  $comment->commentable;
        // dd($comment->commentable->id);


        $company = Company::find('6000');
        dd($company->departments );
        // foreach ($dataTicket->comments as $key => $value) {
        //         dd($value);
        // }
        // $result['data']['item'] = $value->items();


        return json_encode($result, JSON_UNESCAPED_UNICODE); //Response($result);
    }

}
