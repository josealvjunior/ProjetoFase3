<?php

namespace project\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use project\Entities\ProjectMembers;

/**
 * Class ProjectMembersRepositoryEloquent
 * @package namespace project\Repositories;
 */
class ProjectMembersRepositoryEloquent extends BaseRepository implements ProjectMembersRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProjectMembers::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}