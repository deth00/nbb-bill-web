<div>
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left d-flex align-items-center">
                    <h3 class="f_s_25 f_w_700 dark_text mr_30">ຂໍ້ມູນໃບໂອນ</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບໂອນ</li>
                    </ol>
                </div>
                <div class="page_title_right">
                    <div class="page_date_button d-flex align-items-center">
                        <img src="{{asset('backend/img/icon/calender_icon.svg')}}" alt>
                        {{now()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content_iner ">
        <div class="container-fluid p-0">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_body">
                            <div class="col-2">
                                <button class="btn btn-info text-white mt-3">
                                    ເພີ່ມຂໍ້ມູນ
                                </button>
                                <button type="button" class="btn btn-primary" wire:click="print">
                                        <i class="fa fa-print"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <!-- <div class="box_header m-0"> -->
                            <div class="row">

                                <div class="col-3">
                                    <table width="100%">
                                        <tr>
                                            <td style="vertical-align: center; text-align: right;">ສະແດງ &emsp;</td>
                                            <td>
                                                <select wire:model="dataQ" wire:click="dataQS" name="Q" id="Q"
                                                    class="form-control">
                                                    <option value="15">15</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="999999999">ທັງໝົດ</option>
                                                </select>
                                                <!-- <input type="number" wire:model="dataQ" name="dataQ" id="dataQ" class="form-control col-12"> -->
                                            </td>
                                            <td style="vertical-align: center;"><span>&emsp; ລາຍການ</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-2">
                                    <input type="date" name="date" id="date" wire:model="dateS" class="form-control">
                                </div>
                                <div class="col-2">
                                    <input type="text" name="search" id="search" wire:model="search"
                                        class="form-control" placeholder="ຄົ້ນຫາ">
                                </div>
                                <div class="col-1 ">
                                    <button type="button" class="btn btn-primary" wire:click="searchData">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" wire:click="exportExcel">
                                        <i class="fa fa-file-excel"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="white_card_body">
                            <div class="table-responsive">
                                <table border="2" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th> ລຳດັບ </th>
                                            <th> ເລກທີ </th>
                                            <th> ວັນທີ </th>
                                            <th> ສຳນັກງານສົ່ງ </th>
                                            <th> ຜູ້ໂອນ </th>
                                            <th> ຈຳນວນເງິນ </th>
                                            <th> ຜູ້ເຮັດທຸລະກຳ </th>
                                            <th> ປະເພດ </th>
                                            <th> ສະຖານະ </th>
                                            <th> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span><br> ລວມຜູ້ໃຊ້ທັງໝົດ <span class="text-danger">1</span> ຄົນ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>