<?php

namespace Keihi\Repositories;

use Keihi\Repositories\KeihiInterface;
use Keihi\Keihi;

/**
 * Class KeihiRepository
 * @package Keihi\Repositories
 */
class KeihiRepository implements KeihiInterface
{
    /**
     * @var Keihi
     */
    protected $keihi;

    /**
     * @param Keihi $keihi
     */
    public function __construct(Keihi $keihi)
    {
        $this->keihi = $keihi;
    }

    /**
     * 取得
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->keihi->find($id);
    }

    /**
     * 一覧取得
     * @return mixed
     */
    public function getList()
    {
        return $this->keihi->all();
    }

    /**
     * 更新
     * @param $id
     * @param $data
     * @return $id
     */
    public function update($id, $data)
    {
        if ($this->keihi->find($id)->update($data)) {
            return $id;
        }
        return null;
    }

    /**
     * 新規登録
     * @param $data
     * @return $id
     */
    public function create($data)
    {
        $model = $this->keihi->create($data);
        if (isset($model->id)) {
            return $model->id;
        }
        return null;
    }

    /**
     * 削除
     * @param $id
     * @return $id
     */
    public function delete($id)
    {
        return $this->keihi->find($id)->delete();
    }

    /**
     * エンティティ作成
     * @return mixed
     */
    public function createEntity()
    {
        return $this->keihi->newInstance();
    }

}