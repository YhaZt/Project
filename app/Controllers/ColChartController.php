<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class ColChartController extends Controller
{


    public function index() {

        $db = \Config\Database::connect();
        $col = $db->table('client');

        $query = $col->select("COUNT(id) as count, town as s, MONTHNAME(created_at) as month");
        $query = $col->orderBy("s ASC, month ASC");
        $query = $col->where("MONTH(created_at) GROUP BY MONTHNAME(created_at), s")->get();
        $record = $query->getResult();

        $usersData = [];

        foreach($record as $row) {
            $usersData[] = array(
                'month'   => $row->month,
                'town' => floatval($row->s)
            );
        }

        $data['usersData'] = ($usersData);
        return view('FirstDistrict/Analytics/ColumnChart', $data);
    }
}
