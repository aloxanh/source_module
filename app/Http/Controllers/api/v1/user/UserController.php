<?php

namespace App\Http\Controllers\api\v1\user;

use App\Http\Controllers\BaseController\BaseController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SoapClient;
use SoapHeader;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Exception;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource. - hiện tại mục đích test
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = array();
        $result['data'] =  array();
        $result['data']  =  User::all();
        return json_encode($result, JSON_UNESCAPED_UNICODE); //Response($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // try {
        //     $opts = array(
        //         'http' => array(
        //             'user_agent' => 'PHPSoapClient'
        //         )
        //     );
        //     $context = stream_context_create($opts);
        //     $wsdlUrl = 'http://localhost/FirstWebService/service.php?wsdl';
        //     $soapClientOptions = array(
        //         'stream_context' => $context,
        //         'cache_wsdl' => WSDL_CACHE_NONE
        //     );
        //     $client = new SoapClient($wsdlUrl, $soapClientOptions);
        //     $checkVatParameters = array(
        //         'a' => '1',
        //         'b' => '2'
        //     );

        //     $result = $client->__soapCall("TongHaiSo", $checkVatParameters);


        //     print_r($result);
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }
        // $url = 'http://dev.tlg.lca:8000/sap/bc/srt/wsdl/flv_10002A101AD1/srvc_url/sap/bc/srt/rfc/sap/zwsfy/110/zsfight/binding?sap-client=110';

        // $login = 'hungnn';

        // $pass = 'namgioiphapthien';

        // //Call the client

        // $client = new SoapClient($url, array('login' => $login, 'password' => $pass, 'trace'  => true, 'exceptions' => true));
        // try {

        //     $air = 'AF';

        //     $flight = $client->ZSflight(array('Carrid' => $air));
        //     //$value = get_object_vars($flight);
        //     // $array = get_object_vars($flight);
        //     $array = json_decode(json_encode($flight), true);
        //     print_r($array['TSflight']['item']['Carrid']);
        //     // foreach ($flight as $key => $value) {
        //     //     $stdArray[$key] = (array) $value;
        //     //     print_r($stdArray[$key] . '<br>');
        //     // }
        //     /*** show the results ***/
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }

        return json_encode('OK');
    }

    public function demo()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
