<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\SheetTwo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Throwable;
use Illuminate\Support\Facades\Mail;

class SheetTwoExport implements WithHeadings, FromQuery, ShouldQueue, WithMapping
{
    use Exportable;
    private $Filters;

    public function __construct($Filters)
    {
        $this->Filters = $Filters;
    }

    public function headings(): array
    {
        return [

            'Sr. No.',
            'Code',
            'Code Id',
            'Zone',
            'State',
            'Brand',
            'Category',
            'Primary Category',
            'Secondary Category',
            'Third Category',
            'vendor Part Code',
            'Maple Part Code',
            'Part Description',
            'Stock In Hand Unit',
            'Stock In Hand Value',
            'Serial No',
            'IMEI No',
            'Store Ageing',
            'Company Ageing (Days)',
            'Created At',
            'Updated At',    
        ];
    }

    public function map($row): array
    {
        $row = (object)$row;
        static $counter = 1;
        return [
            $counter++,
            $row->code,
            $row->code_id,
            $row->zone,
            $row->state,
            $row->brand,
            $row->category,
            $row->primary_category,
            $row->secondary_category,
            $row->third_category,
            $row->vendor_part_code,
            $row->maple_part_code,
            $row->part_description,
            $row->stock_in_hand_unit,
            $row->stock_in_hand_value,
            $row->serial_no,
            $row->imei_no,
            $row->store_ageing,
            $row->c_age,
            $row->created_at,
            $row->updated_at,
           
        ];
    }

    public function failed(Throwable $exception): void
    {
        Mail::send([], [], function ($message) {
            $message->to('sachin@aquilmdia.in');
            $message->subject('Verify Error');
            $message->setBody('$This is the email content');
        });
    }

    public function query()
    {
        $query = $this->getQuery();
        return $query;
    }

    public function getQuery()
    {
        $Filters = (object)$this->Filters;
        ini_set('memory_limit', -1);
        ini_set('max_execution_time', -1);

        $data =  SheetTwo::query()->where('slod_unsold',0);

        if (isset($Filters->vendor_part_code)) {
           $data->where('vendor_part_code',$Filters->vendor_part_code);
        }
        if (isset($Filters->maple_part_code)) {
            $data->where('maple_part_code',$Filters->maple_part_code);
         }
         if (isset($Filters->brand)) {
            $data->where('brand',$Filters->brand);
         }
         if (isset($Filters->category)) {
            $data->where('category',$Filters->category);
         }
         if (isset($Filters->primary_category)) {
            $data->where('primary_category',$Filters->primary_category);
         }
         if (isset($Filters->secondary_category)) {
            $data->where('secondary_category',$Filters->secondary_category);
         }
         if (isset($Filters->third_category)) {
            $data->where('third_category',$Filters->third_category);
         }
        if (isset($Filters->company_ageing)) {
            $data->selectRaw('*,company_ageing  as c_age, company_ageing + DATEDIFF(NOW(), created_at) as company_ageing')
            ->whereRaw('DATEDIFF(NOW(), created_at) <= company_ageing');
        }else{
            $data->selectRaw('*,company_ageing  as c_age');
        }
        return $data;
    }

}