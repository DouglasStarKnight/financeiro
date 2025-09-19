<?php

namespace App\Modules\Descricao;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DescricaoModel extends Model
{
 use HasFactory;


 protected $table = 'solicitacao';
 protected $fillable = [
   'descricao',
   'imagens',
   'problema_id',
 ];
}
