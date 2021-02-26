<?php
namespace App\Services\Business;
use App\Services\Models\UserModel;
class UserBusinessService
{
    public function index($user)
    {
        $createNew = new UserDAO();
        $isInserted = $createNew->create($user);
        return $isInserted;
    }
     }

    


