<?php

namespace Waspmax1\ObjectsDocumentsWorkflow\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Objects
 * @package Waspmax1\ObjectsDocumentsWorkflow\Models
 * @property int $id
 * @property string $name
 */
class Objects extends Model
{
    protected $table = 'objects';

    protected $fillable = ['name'];
}
