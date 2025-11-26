<?php

namespace App\Livewire\Report;

use Livewire\Component;
use App\Models\BhaiMorp;
use App\Models\LogBhai;
use App\Exports\MopExport;

class ReportMopComponent extends Component
{
    public $data = [];
    public $data_log = [];
    public $start, $end, $starts, $ends;
    public $show = 'none';

    public function render()
    {
        return view('livewire.report.report-mop-component');
    }
    
    public function searchData(){
        $this->validate([
            'start'=>'required',
            'end'=>'required',
        ],[
            'start.required'=>'ກະລຸນາເລືອກ ວັນທີເລີ່ມຕົ້ນ ກ່ອນ!',
            'end.required'=>'ກະລຸນາປເລືອກ ວັນທີສິ້ນສຸດ ກ່ອນ!',
        ]);
            $this->show = 'show';
            $this->starts = $this->start . ' 00:00:00';
            $this->ends = $this->end . ' 23:59:59';
            // Join tables and group by BhaiMorp id
            $this->data = BhaiMorp::whereBetween('bhaimops.valuedt',[$this->starts, $this->ends])
            // ->where('bhaimops.user_id',auth()->user()->id)
            ->with(['logBhai' => function($query) {
                $query->whereBetween('valuedt', [$this->starts, $this->ends])
                      ->whereNotNull('bhaimops_id');
            }])
            ->orderBy('bhaimops.id','desc')
            ->get()
            ->map(function($item) {
                return [
                    'id' => $item->id,
                    'valuedt' => $item->valuedt,
                    'name_mop' => $item->name_mop,
                    'address' => $item->address,
                    'tel' => $item->tel,
                    'money' => $item->money,
                    'name_hub' => $item->name_hub,
                    'address_hub' => $item->address_hub,
                    'user_id' => $item->user_id,
                    'log_data' => $item->logBhai->map(function($log) {
                        return [
                            'log_id' => $log->id,
                            'user_id' => $log->name->emp_name,
                            'valuedt' => $log->valuedt,
                            'stt' => $log->stt,
                            'created_at' => $log->created_at,
                            'updated_at' => $log->updated_at,
                        ];
                    })->toArray()
                ];
            });
            
            // dd($this->data);

    }

    public function exportExcel()
    {
        return (new MopExport($this->data))->download('excel-mop.xlsx');
    }
}
