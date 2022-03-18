<?php

namespace app\modules\api\query;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use yii\graphql\base\GraphQLQuery;

class UserQuery extends GraphQLQuery
{
    public function type() {
        return Type::string();
    }

    public function resolve($value, $args, $context, ResolveInfo $info) {
        return "test";
    }
}
