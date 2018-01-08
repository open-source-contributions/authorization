<?php
namespace TestApp\Policy;

use Authorization\IdentityInterface;

class ArticlesTablePolicy
{
    public function canEdit(IdentityInterface $identity)
    {
        return $identity['can_edit'];
    }

    public function canModify(IdentityInterface $identity)
    {
        return $identity['can_edit'];
    }
}
