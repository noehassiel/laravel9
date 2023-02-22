<?php

namespace App\Imports;

use App\Models\Order;
use Str;
use Carbon\Carbon;

//Importación por medio de Colección
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrderImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $mal = $row['Malfunct. Start'];
            $description = $row['Description'];
            $equipment = $row['Equipment'];
            $notification = $row['Notification'];
            $type = $row['Notifictn Type'];
            $no = $row['Order'];
            $comment = $row['Description'];


            $data = Order::create([
                'order_no' => $no,
                'malfunction' => $mal,
                'description' => $description,
                'equipment' => $equipment,
                'notification' => $notification,
                'type' => $type,
                'comments' => $comment,
            ]);
        }
    }

    public function headingRow(): int
    {
        return 1;
    }
}
