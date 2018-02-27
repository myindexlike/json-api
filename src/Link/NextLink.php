<?php declare(strict_types=1);

namespace JsonApiPhp\JsonApi\Link;

use JsonApiPhp\JsonApi\DataDocumentMember;
use JsonApiPhp\JsonApi\PrimaryData\ResourceMember;
use JsonApiPhp\JsonApi\RelationshipMember;

final class NextLink extends AttachableLink implements DataDocumentMember, ResourceMember, RelationshipMember
{
    public function __construct(Link $link)
    {
        parent::__construct('next', $link);
    }
}