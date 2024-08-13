<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    use BaseTrait;

    /**
     * @var User
     */
    private $model;

    /**
     * constract
     *
     * @param User $model
     * @return void
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * 検索条件
     *
     * @param array $params
     * @return Illuminate\Database\Eloquent\Builder
     */
    private function condition(array $params = []):Builder
    {
        $query = $this->model->query();
        // $query->when(strlen($params[''] ?? null) > 0, function ($query) use ($params) {
        //     return $query->where('', $params['']);
        // });
        return $query;
    }

    /**
     * 検索
     *
     * @param array $params
     * @return Collection
     */
    public function searchForFront(array $params = []): Collection
    {
        return $this->model->get();
    }
}
