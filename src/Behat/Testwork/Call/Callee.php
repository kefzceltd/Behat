<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Call;

use ReflectionFunction;
use ReflectionMethod;

/**
 * Represents callable object.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface Callee
{
    /**
     * Returns callee definition path.
     *
     * @return string
     */
    public function getPath();

    /**
     * Returns callee description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Returns true if callee is a method, false otherwise.
     *
     * @return Boolean
     */
    public function isAMethod();

    /**
     * Returns true if callee is an instance (non-static) method, false otherwise.
     *
     * @return Boolean
     */
    public function isAnInstanceMethod();

    /**
     * Returns callable.
     *
     * @return callable
     */
    public function getCallable();

    /**
     * Returns callable reflection.
     *
     * @return ReflectionFunction|ReflectionMethod
     */
    public function getReflection();
}
