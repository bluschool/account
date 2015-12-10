
<?php

class ComplaintsCategory extends Model
{
    protected $table = 'complaintsCategory';

    protected $fillable = [
    	'complaintCategoryID',
        'complaintCategory',
        'createdDate'
    ];
?>