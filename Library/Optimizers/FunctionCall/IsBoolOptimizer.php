<?php

/**
 * This file is part of the Zephir package.
 *
 * (c) Zephir Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephir\Optimizers\FunctionCall;

use Zephir\Optimizers\IsTypeOptimizerAbstract;

/**
 * IsBoolOptimizer
 *
 * Optimizes calls to 'is_bool' using internal function
 */
class IsBoolOptimizer extends IsTypeOptimizerAbstract
{
    protected function getType()
    {
        return 'IS_BOOL';
    }
}
