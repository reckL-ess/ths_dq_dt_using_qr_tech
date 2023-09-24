<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'recipient',
        'subject',
        'description',
        'prioritization',
        'attachments',
        'attachment_description',
        // Add other fields as needed
    ];

    // Define relationships here if applicable
    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
