<?php

namespace CyberDuck\PardotApi\Query;

use CyberDuck\PardotApi\Traits\CanCreate;
use CyberDuck\PardotApi\Traits\CanQuery;
use CyberDuck\PardotApi\Traits\CanRead;
use CyberDuck\PardotApi\Traits\CanUpdate;
use CyberDuck\PardotApi\Traits\CanDelete;

/**
 * List Membership object representation
 *
 * @category   PardotApi
 * @package    PardotApi
 * @author     Andrew Mc Cormack <andy@cyber-duck.co.uk>
 * @copyright  Copyright (c) 2018, Andrew Mc Cormack
 * @license    https://github.com/cyber-duck/pardot-api/license
 * @version    1.0.0
 * @link       https://github.com/cyber-duck/pardot-api
 * @since      1.0.0
 */
class ListMembershipsQuery extends Query
{
    use CanRead, CanCreate, CanUpdate, CanDelete, CanQuery;

    protected $object = 'listMembership';

    public function addToList($list_id, $prospect_id):? array
    {
        return $this->setOperator(sprintf('create/list_id/%s/prospect_id/%s', $list_id, $prospect_id))
            ->request($this->object);
    }

}
