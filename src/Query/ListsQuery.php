<?php

namespace CyberDuck\PardotApi\Query;

use CyberDuck\PardotApi\Traits\CanCreate;
use CyberDuck\PardotApi\Traits\CanDelete;
use CyberDuck\PardotApi\Traits\CanQuery;
use CyberDuck\PardotApi\Traits\CanRead;
use CyberDuck\PardotApi\Traits\CanUpdate;

/**
 * List Query object representation
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
class ListsQuery extends Query
{
    use CanRead, CanQuery, CanCreate, CanUpdate, CanDelete;

    protected $object = 'list';

}
