<?php
namespace App\ModulesAPI\Payment\Controllers;

use App\Http\Controllers\Controller;
use App\Models\payment\Contract;
use Request;

class ContractController extends Controller
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
        $result = array();
        $result['data'] =  array();
        $result['data'] = "Danh sách Hợp đồng";
        // $result['data']['item'] = $value->items();


        return json_encode($result, JSON_UNESCAPED_UNICODE); //Response($result);
    }
    public function show($id)
    {
        return Contract::findOrFail($id);
    }
    public function store(Request $request)
    {
        return Contract::create($request->all());
    }
    public function update($id, Request $request)
    {
        return Contract::where('id', $id)->update($request->all());
    }
    public function destroy($id)
    {
        return contract::where('id', $id)->delete();
    }
}
