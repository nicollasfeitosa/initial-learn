<?php

/*
 * This file is part of the Stash package.
 *
 * (c) Robert Hafner <tedivm@tedivm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stash\Interfaces;

use \Psr\Cache\CacheItemPoolInterface;
use \Psr\Cache\CacheItemInterface;

/**
 *
 *
 * @package Stash
 * @author  Robert Hafner <tedivm@tedivm.com>
 */
interface PoolInterface extends CacheItemPoolInterface
{
    /**
     * Changes the specific Item class generated by the Pool object.
     *
     * Using this function developers can have the pool class generate custom Item objects.
     *
     * @param  string                    $class
     * @return bool
     * @throws \InvalidArgumentException When passed invalid or nonexistant classes.
     */
    public function setItemClass($class);

    /**
     * Returns an initialized Item for a given Key.
     *
     * Keys can be presented in a few ways:
     *
     * * Simple keys are alphanumeric and map to single Items with no nesting.
     *
     * * Nested keys use the slash mark as delimiters to organize Items into groups.
     *
     * * Nested keys can be passed as Arrays, with each additional element being a level deeper.
     *
     * * As a shorthand Nested keys can be passed as additional arguments.
     *
     * Each component of a key should only contain alphanumeric characters and the symbols "_" and ".".
     *
     *
     * @example $item = $pool->getItem('sitejavascript');
     * @example $item = $pool->getItem('permissions/user/4/2');
     * @example $item = $pool->getItem(array('permissions', 'user', '4', '2'));
     * @example $item = $pool->getItem('permissions', 'user', '4', '2');
     *
     * @param  string              $key
     * @return ItemInterface
     * @throws \InvalidArgumentException
     */
    public function getItem($key);

    /**
     * Returns a group of cache objects in an \Iterator
     *
     * Bulk operations can often by streamlined by backend cache systems. The returned iterator will contain a Item for
     * each key passed, but is not required to maintain an order.
     *
     * @param  array     $keys
     * @return array|\Traversable
     */
    public function getItems(array $keys = array());

    /**
     * Empties the entire cache pool of all Items.
     *
     * If no namespace is defined everything is cleared, otherwise just the namespace itself gets emptied.
     *
     * @return bool True on success
     */
    public function clear();

    /**
     * The Purge function allows drivers to perform basic maintenance tasks, such as removing stale or expired items
     * from storage. Not all drivers need this, as many interact with systems that handle them automatically.
     *
     * It's important that this function is not called from inside a normal request, as the maintenance tasks this
     * allows can occasionally take some time to run.
     *
     * @return bool success
     */
    public function purge();

    /**
     * Sets the driver for use by the caching system. This driver handles the direct interfaceion with the caching
     * backends, keeping the system specific development abstracted out.
     *
     * @param DriverInterface $driver
     */
    public function setDriver(\Stash\Interfaces\DriverInterface $driver);

    /**
     * Returns the current driver used by the Pool.
     *
     * @return DriverInterface
     */
    public function getDriver();

    /**
     * Places the Pool inside of a "namespace". All Items inside a specific namespace should be completely segmented
     * from all other Items.
     *
     * @param  string                    $namespace Namespaces must be alphanumeric
     * @return bool
     * @throws \InvalidArgumentException Namespaces must be alphanumeric
     */
    public function setNamespace($namespace = null);

    /**
     * Returns the current namespace, or false if no namespace was set.
     *
     * @return string|false
     */
    public function getNamespace();

    /**
     * Sets a PSR\Logger style logging client to enable the tracking of errors.
     *
     * @param  \PSR\Log\LoggerInterface $logger
     * @return bool
     */
    public function setLogger($logger);

    /**
    * Forces any save-deferred objects to get flushed to the backend drivers.
    *
    * @return bool
    */
    public function commit();

    /**
    * Sets an Item to be saved at some point. This allows buffering for
    * multi-save events.
    *
    * @param CacheItemInterface $item
    * @return static The invoked object.
    */
    public function saveDeferred(CacheItemInterface $item);

    /**
    * Sets an Item to be saved immediately.
    *
    * @param CacheItemInterface $item
    * @return bool
    */
    public function save(CacheItemInterface $item);

    /**
     * Removes multiple items from the pool by their key.
     *
     * @param array $keys
     * @return bool
     */
    public function deleteItems(array $keys);

    /**
     * Removes single item from the pool by its key.
     *
     * @param string $key
     * @return bool
     */
    public function deleteItem($key);

    /**
    * Checks for the existance of an item in the cache.
    *
    * @param  string $key
    * @return boolean True if item exists in the cache, false otherwise.
    */
    public function hasItem($key);
}
