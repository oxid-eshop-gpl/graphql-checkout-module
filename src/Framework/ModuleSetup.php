<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\GraphQL\Checkout\Framework;

use OxidEsales\DoctrineMigrationWrapper\Migrations;
use OxidEsales\DoctrineMigrationWrapper\MigrationsBuilder;

class ModuleSetup
{
    public static function onActivate(): void
    {
        $migrations = (new MigrationsBuilder())->build();

        $migrations->execute(Migrations::MIGRATE_COMMAND, 'oe/graphql-checkout');
    }
}
