<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\TestSuite\Stub;

use Cake\Http\Response as Base;

/**
 * A response class intended for test cases.
 */
class Response extends Base
{
    /**
     * Stub the send() method so headers and output are not sent.
     *
     * @return $this
     */
    public function send()
    {
        if ($this->hasHeader('Location') && $this->_status === 200) {
            $this->statusCode(302);
        }
        $this->_setContentType();

        return $this;
    }
}
