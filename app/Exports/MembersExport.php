<?php

namespace App\Exports;

use App\Models\Members\Member;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class MembersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('backend.exports.members', [
            'members' => Member::all()
        ]);
    }
}
