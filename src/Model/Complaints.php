
<?php

class Complaints extends Model
{
    protected $table = 'complaints';

    protected $fillable = [
    	'complaintID',
        'complaintTitle',
        'complaintCategory',
        'complaintDescription',
        'createdBy',
        'createdDate',
        'status'
    ];
?>