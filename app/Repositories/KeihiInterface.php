<?php

namespace Keihi\Repositories;

/**
 * Interface KeihiInterface
 */
interface KeihiInterface
{
    /**
     * 取得
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * 一覧取得
     * @return mixed
     */
    public function getList();

    /**
     * 更新
     * @param $id
     * @param $data
     * @return $id
     */
    public function update($id, $data);

    /**
     * 新規登録
     * @param $data
     * @return $id
     */
    public function create($data);

    /**
     * 削除
     * @param $id
     * @return mixed
     */
    public function delete($id);
    /**
     * エンティティ作成
     * @return $entity
     */
    public function createEntity();
}