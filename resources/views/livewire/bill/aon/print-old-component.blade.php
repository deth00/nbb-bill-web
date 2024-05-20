<div>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບໂອນ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນໃບໂອນ</h4>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                        <a href="{{route('bill-aon')}}" class="btn btn-danger float-end">ກັບຄືນ</a>
                            <a href="{{route('pdf-aon',$hidId)}}" target="_bank"
                                class="btn btn-primary float-end mx-2">ພິມບິນ</a>
                            
                        </div>
                        <div class="col-3 text-right">
                        ວັນທີ :
                            <strong>{{date('d/m/Y H:i:s', strtotime($data['created_at']))}}</strong>
                            <span class="float-end"> <strong>ສະຖານະ:</strong> <span class="text-dark">@if($data['del']
                                    == 1)
                                    ລໍຖ້າປິ່ນ @elseif($data['del'] == 2) ປິ່ນສຳເລັດ @else ຍົກເລີກ @endif</span></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">

                            <div class="row px-0">
                                <div class="col-4">
                                    <table width="100%">
                                        <tr>
                                            <td class="text-center px-0">
                                                <img src="{{asset('backend/img/logo-nbb.png')}}" alt width="100px">
                                            </td>
                                            <td>
                                                <h4 class="text-black"><b>ທະນາຄານນະໂຍບາຍ</b></h4>
                                                <h4 class="text-black">ສາຂາ {{$data['branch_send']}}</h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-4 text-center" style="padding-top: 25px;">
                                    <h1 class="text-black"><b>ໃບໂອນບັນຊີເງິນ</b></h1>
                                    <p style="font-size: 22px;color: black;padding-top: 25px;">ວັນທີ
                                        {{date('d',strtotime($data['valuedt']))}} ເດືອນ
                                        {{date('m',strtotime($data['valuedt']))}} ປີ
                                        {{date('Y',strtotime($data['valuedt']))}}</p>
                                </div>
                                <div class="col-4" style="padding-top: 25px;">
                                    <table width="100%">
                                        <tr>
                                            <td colspan="2" class="text-right">
                                                <p class="float-end" style="font-size: 22px;color: black;">
                                                    ເລກທີ:..............................</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="font-size: 22px;padding-left: 220px;color: black;">ສະບັບທີ 1
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <div class="circle">ໜີ້</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="font-size: 22px;padding-left: 220px;color: black;">ຫຼັກຖານຈົດ
                                                </p>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                            <div class="row px-0">
                                <div class="col-12">
                                    <table width="100%" border="2">
                                        <tr>
                                            <td class="td-border2 text-center" width="10%">
                                                <p class="text-black" style="font-size:22px">ບັນຊີເງິນ</p>
                                            </td>
                                            <td class="td-border2 text-center" width="30%">
                                                <p class="text-black" style="font-size:22px">ເລກໝາຍບັນຊີ</p>
                                            </td>
                                            <td class="td-border2 text-center" width="35%" colspan="3">
                                                <p class="text-black" style="font-size:22px">ຊື່ບັນຊີ</p>
                                            </td>
                                            <td class="td-border2 text-center" width="25%" colspan="5">
                                                <p class="text-black" style="font-size:22px">ຈຳນວນເງິນ</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-border2 text-center" width="10%">
                                                <p class="text-black bold" style="font-size:22px">ໜີ້</p>
                                            </td>
                                            <td class="td-border2 text-center" width="30%">
                                                <p class="text-black" style="font-size:22px">{{$data['acno_nee']}}</p>
                                            </td>
                                            <td class="td-border2 text-center" width="35%" colspan="3">
                                                <p class="text-black" style="font-size:22px">
                                                    ..........................................................</p>
                                            </td>
                                            <td class="td-border2 text-center" width="25%" colspan="5">
                                                <p class="text-black bold" style="font-size:22px">
                                                    #{{number_format($data['money'],2,'.',',')}}#</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-border2 text-center" width="10%">
                                                <p class="text-black bold" style="font-size:22px">ມີ</p>
                                            </td>
                                            <td class="td-border2 text-center" width="30%">
                                                <p class="text-black" style="font-size:22px">{{$data['acno_mee']}}</p>
                                            </td>
                                            <td class="td-border2 text-center" width="35%" colspan="3">
                                                <p class="text-black" style="font-size:22px">
                                                    ..........................................................</p>
                                            </td>
                                            <td class="td-border2 text-center" width="25%" colspan="5">
                                                <p class="text-black bold" style="font-size:22px">
                                                    #{{number_format($data['money'],2,'.',',')}}#</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-border2 text-center" colspan="4" width="60%">
                                                <p class="text-black" style="font-size:22px">ເນື້ອໃນການໂອນບັນຊີ</p>
                                            </td>
                                            <td class="td-border2 text-center" colspan="2" rowspan="2" width="20%"
                                                style="vertical-align: text-top;">
                                                <p class="text-black" style="font-size:22px;">ບັນຊີສຳຮອງ</p>
                                            </td>
                                            <td class="td-border2 text-center" colspan="4" rowspan="2" width="20%"
                                                style="vertical-align: text-top;">
                                                <p class="text-black" style="font-size:22px">ຫົວໜ້າຄິດໄລ່</p>
                                            </td>
                                        </tr>
                                        <tr height="250px">
                                            <td class="td-border2" colspan="4" width="60%"
                                                style="vertical-align: text-top;">
                                                <p class="text-black px-2" style="font-size:22px">{{$data['note']}}</p>
                                                <p class="text-black px-2" style="padding-bottom: 20px;font-size:22px;">
                                                    ......................................................................................................................
                                                </p>
                                                <p class="text-black bold p-2" style="font-size:22px">
                                                    ຈຳນວນເງິນຂຽນເປັນຕົວໜັງສື:</p>
                                                <p class="text-black"
                                                    style="font-size:22px;padding-left: 300px;">
                                                    {{$data['money_name']}}</p>
                                                <p class="text-black px-2" style="padding-bottom: 20px;font-size:22px;">
                                                    ......................................................................................................................
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>