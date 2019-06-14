<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    /**
     * Get the student that paid the fees.
     */
    public function students()
    {
        return $this->belongsTo('App\Students','student_no','student_no');
    }

}
