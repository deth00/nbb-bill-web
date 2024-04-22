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
                                <a href="{{route('create-aon')}}" class="btn btn-info text-white mt-3">
                                    ເພີ່ມຂໍ້ມູນ
                                </a>
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
                                    <!-- <button type="button" class="btn btn-success" wire:click="exportExcel">
                                        <i class="fa fa-file-excel"></i>
                                    </button> -->
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="white_card_body">
                            <div class="table-responsive">
                                <table border="2" width="100%" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="td-border2"> ລຳດັບ </th>
                                            <th class="td-border2"> ເລກທີ </th>
                                            <th class="td-border2"> ວັນທີ </th>
                                            <th class="td-border2"> ສຳນັກງານສົ່ງ </th>
                                            <th class="td-border2"> ຜູ້ໂອນ </th>
                                            <th class="td-border2"> ຈຳນວນເງິນ </th>
                                            <th class="td-border2"> ຜູ້ເຮັດທຸລະກຳ </th>
                                            <th class="td-border2"> ປະເພດ </th>
                                            <th class="td-border2"> ສະຖານະ </th>
                                            <th class="td-border2"> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($bhaiaon as $key => $item)
                                        <tr>
                                            <td class="text-center td-border2 my-2">{{$no++}}</td>
                                            <td class="text-center td-border2">{{$item->no}}</td>
                                            <td class="text-center td-border2">
                                                {{date('d/m/Y', strtotime($item->valuedt))}}</td>
                                            <td class="text-center td-border2">{{$item->branch_send}}</td>
                                            <td class="text-center td-border2">{{$item->name_aon}}</td>
                                            <td class="text-right td-border2" style="text-align: right;">
                                                {{number_format($item->money)}}</td>
                                            <td class="text-center td-border2"></td>
                                            <td class="text-center td-border2">
                                                @if ($item->type == 'ISD')
                                                <span class="badge bg-warning">ໂອນພາຍໃນ</span>
                                                @else
                                                <span class="badge bg-info">ໂອນຕ່າງແຂວງ</span>
                                                @endif
                                            </td>
                                            <td class="text-center td-border2">
                                                @if ($item->del == 1)
                                                <span class="badge bg-primary">ຍັງບໍ່ທັນພິມ</span>
                                                @elseif($item->del == 2)
                                                <span class="badge bg-success">ພິມສຳເລັດ</span>
                                                @else
                                                <span class="badge bg-danger">ຍົກເລີກ</span>
                                                @endif
                                            </td>
                                            <td class="text-center td-border2">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span>ຕົວເລືອກ</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-warning"
                                                        href="{{route('edit-aon',$item->id)}}"><i
                                                            class="fas fa-edit"></i> ແກ້ໄຂ</a>
                                                    <a class="dropdown-item text-danger" href="javascript:void(0)"
                                                        wire:click="delete({{$item->id}})"><i class=" fas fa-trash"></i>
                                                        ຍົກເລີກ</a>
                                                        @if ($item->type == 'OSD')
                                                        <a class="dropdown-item text-info"
                                                        href="{{route('print-aon',$item->id)}}"><i
                                                            class="fas fa-eye"></i> ເບິ່ງ</a>
                                                        @else
                                                        <a class="dropdown-item text-info"
                                                        href="{{route('print-aon-old',$item->id)}}"><i
                                                            class="fas fa-eye"></i> ເບິ່ງ</a>
                                                        @endif
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="10" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຜູ້ໃຊ້ງານລະບົບ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span><br> ລວມຜູ້ໃຊ້ທັງໝົດ <span class="text-danger">{{$count}}</span> ຄົນ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.seft class="modal fade" id="modal-delete" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <h2><label>ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ ຫຼື ບໍ່ ?</label></h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດ</button>
                    <button wire:click="destroy" type="button" data-dismiss="modal"
                        class="btn btn-danger">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script>
window.addEventListener('show-modal-delete', event => {
    $('#modal-delete').modal('show');
})
window.addEventListener('hide-modal-delete', event => {
    $('#modal-delete').modal('hide');
})
</script>
@endpush