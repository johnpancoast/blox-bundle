<?php
/**
 * @package blox
 * @copyright (c) 2014-2015 John Pancoast
 * @author John Pancoast <shideon@gmail.com>
 * @license MIT
 */

namespace Shideon\BloxBundle;

/**
 * ApplicationInterface 
 *
 * @package blox
 * @copyright (c) 2014-2015 John Pancoast
 * @author John Pancoast <shideon@gmail.com>
 */
interface ApplicationInterface
{
    /**
     * Set request
     * @param RequestInterface $request
     * @return self
     */
    public function setRequest(RequestInterface $request);

    /**
     * Process request
     *
     * This is the application's core logic which should execute
     * the passed model action and setting state along the way and
     * setting a response for retrieval later.
     *
     * @param callable $modelAction The model action to invoke
     * @return void
     */
    public function process(callable $modelAction);

    /**
     * Get application response
     * @return ImmutableResponseInterface A response whose internals cannot change.
     */
    public function getResponse();

    /**
     * Get application state
     * @return mixed See constants in {@see State} (can be bit logic)
     */
    public function getState();
}