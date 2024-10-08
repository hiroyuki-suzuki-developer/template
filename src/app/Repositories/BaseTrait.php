<?php

namespace App\Repositories;

trait BaseTrait
{
    /**
     * IDによる取得の関数
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * 詳細取得の関数
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * 条件にあうデータの１件目を取得する関数
     */
    public function first(array $params)
    {
        $model = $this->model;
        foreach ($params as $key => $value) {
            if (gettype($value) === 'array') {
                $model = $model->whereIn($key, $value);
            } else {
                $model = $model->where($key, $value);
            }
        }
        return $model->first();
    }

    /**
     * 詳細の関数
     */
    public function firstOrFail(array $params)
    {
        $model = $this->model;
        foreach ($params as $key => $value) {
            if (gettype($value) === 'array') {
                $model = $model->whereIn($key, $value);
            } else {
                $model = $model->where($key, $value);
            }
        }
        return $model->firstOrFail();
    }

    /**
     * 検索用の関数
     */
    public function search(array $params = [])
    {
        $model = $this->model;
        foreach ($params as $key => $value) {
            if (gettype($value) === 'array') {
                $model = $model->whereIn($key, $value);
            } else {
                $model = $model->where($key, $value);
            }
        }
        return $model->get();
    }

    /**
     * 検索用の関数
     */
    public function searchLike(array $params = [])
    {
        $model = $this->model;
        foreach ($params as $key => $value) {
            if (gettype($value) === 'array') {
                $model = $model->whereIn($key, $value);
            } else {
                $model = $model->where($key, 'LIKE', "%{$value}%");
            }
        }
        return $model->get();
    }

    /**
     * 新規作成の関数
     */
    public function create(array $params)
    {
        return $this->model->create($params);
    }

    /**
     * 更新の関数
     */
    public function update(int $id, array $params)
    {
        $model = $this->model->findOrFail($id);
        $model->fill($params)->save();
        return $model;
    }

    /**
     * 削除の関数
     */
    public function delete(array $params)
    {
        $model = $this->model;
        foreach ($params as $key => $value) {
            if (gettype($value) === 'array') {
                $model = $model->whereIn($key, $value);
            } else {
                $model = $model->where($key, 'LIKE', "%{$value}%");
            }
        }
        return $model->delete();
    }

    /**
     * 複数削除の関数
     */
    public function destory(int $id)
    {
        return $this->model->destory($id);
    }
}
