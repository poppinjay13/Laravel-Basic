<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     /**
     * Get the fees payment details for a student
     */
    public function fees()
    {
        return $this->hasMany('App\Fees','student_no','student_no');
    }
}
