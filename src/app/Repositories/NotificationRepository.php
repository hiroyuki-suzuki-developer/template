<?php

namespace App\Repositories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NotificationRepository
{
    use BaseTrait;

    /**
     * @var Notification
     */
    private $model;

    /**
     * constract
     *
     * @param Notification $model
     * @return void
     */
    public function __construct(Notification $model)
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
