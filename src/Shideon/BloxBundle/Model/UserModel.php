<?php
/**
 * @package blox
 * @copyright (c) 2014-2015 John Pancoast
 * @author John Pancoast <shideon@gmail.com>
 * @license MIT
 */

namespace Shideon\BloxBundle\Model;
use Shideon\BloxBundle\ModelResponse;
use Shideon\BloxBundle\ModelState;

/**
 * UserModel
 *
 * @package blox
 * @copyright (c) 2014-2015 John Pancoast
 * @author John Pancoast <shideon@gmail.com>
 */
class UserModel
{
    public function test()
    {
        return new ModelResponse(ModelState::SUCCESS, 'Success');
    }
}