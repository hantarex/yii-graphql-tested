<?php

namespace app\modules\graphql\query;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use yii\graphql\base\GraphQLQuery;

class UserQuery extends GraphQLQuery
{
    public function type() {
        die("aaa");
        return Type::string();
    }

    public function resolve($value, $args, $context, ResolveInfo $info) {
        die("aaa");
        return "test";
    }
}
