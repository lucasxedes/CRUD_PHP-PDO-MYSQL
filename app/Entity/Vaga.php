<?php

namespace App\Entity;

use PDO;
use App\Db\Database;

class Vaga 
{
    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
                                        'titulo' => $this->titulo,
                                        'descricao' => $this->descricao,
                                        'ativo' => $this->ativo,
                                        'data' => $this->data
        ]);
        return true;
    }

    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getVaga($id)
    {
        return (new Database('vagas'))->select('id = ' .$id)
                                      ->fetchObject(self::class);
    }
}