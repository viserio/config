<?php

declare(strict_types=1);

/**
 * This file is part of Narrowspark Framework.
 *
 * (c) Daniel Bannert <d.bannert@anolilab.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Viserio\Component\Config\Tests\Fixture;

use Viserio\Contract\Config\RequiresConfig as RequiresConfigContract;
use Viserio\Contract\Config\RequiresMandatoryConfig as RequiresMandatoryConfigContract;
use Viserio\Contract\Config\RequiresValidatedConfig as RequiresValidatedConfigContract;

class ConnectionDefaultOptionsWithMandatoryNullValueConfigurationAndStringValidator implements RequiresConfigContract,
    RequiresMandatoryConfigContract,
    RequiresValidatedConfigContract
{
    public static function getMandatoryConfig(): iterable
    {
        return ['driverClass'];
    }

    public static function getConfigValidators(): iterable
    {
        return [
            'driverClass' => ['string'],
        ];
    }
}
