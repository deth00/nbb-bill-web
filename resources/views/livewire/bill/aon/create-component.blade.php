<div>
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left d-flex align-items-center">
                    <h3 class="f_s_25 f_w_700 dark_text mr_30">ເພີ່ມຂໍ້ມູນໃບໂອນ</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນໃບໂອນ</li>
                    </ol>
                </div>
                <!-- <a href="" target="_bank" class="white_btn3"><i class="fa fa-print"></i></a> -->
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 QA_section">
            <div class="card QA_table ">
                <div class="card-header">
                    <b>ເພີ່ມຂໍ້ມູນໃບໂອນ</b>
                    <span class="float-end"> ວັນທີ :
                        <strong>{{now()}}</strong></span>
                </div>
                <div class="card-body">
                    <div class="row mb-4">

                        <div class="col-4" style="border-left-color: #33cc99;">
                            <div class="form-group">
                                <p>ປະເພດໃບໂອນ</p>
                                <select name="type" id="type" class="form-control">
                                    <option value="0">ໃບໂອນຕ່າງແຂວງ</option>
                                    <option value="1">ໃບໂອນພາຍໃນ</option>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <p>ຈຳນວນເງິນ</p>
                                <input type="text" name="moneyn" wire:keydown.enter="generate" id="money" class="form-control money"
                                    placeholder="ຈຳນວນເງິນ" wire:model="money">
                            </div>
                            <div class="form-group">
                                <p>ຈຳນວນເງິນຂຽນເປັນໂຕໜັງສື</p>
                                <input type="text" name="moneyname" id="moneyname" class="form-control"
                                    placeholder="ຈຳນວນເງິນຂຽນເປັນໂຕໜັງສື" wire:model="money_name">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">ບັນທຶກ</button>
                    <a href="{{route('bill-aon')}}" class="btn btn-danger">ກັບຄືນ</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
         $('.money').simpleMoneyFormat();
    </script>
@endpush