<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('employee') //table name
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('eemail', 'like', '%'.$query.'%')
         ->orWhere('epass', 'like', '%'.$query.'%')
         ->orWhere('ename', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc') //conflict
         ->get();
         
      }
      else
      {
       $data = DB::table('employee') //table name
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->eemail.'</td>
         <td>'.$row->epass.'</td>
         <td>'.$row->ename.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
