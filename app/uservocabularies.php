<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uservocabularies extends Model
{
    //
    protected $table = "uservocabularies"; //指定資料表名稱
    public $timestamps = false; //若要取消時間戳記
    protected $fillable = [ //新增的欄位名稱
        'svdate',
        'uid',
        'num',
        'vocabularies_id',
    ];

        /*public function user()
        {
            return $this->belongsTo(User::class);
        }*/


    }
