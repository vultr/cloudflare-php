<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0)
	->withSets([
		PHPUnitSetList::PHPUNIT_60,
		PHPUnitSetList::PHPUNIT_70,
		PHPUnitSetList::PHPUNIT_80,
		PHPUnitSetList::PHPUNIT_90,
		PHPUnitSetList::PHPUNIT_100,
	])
	->withPhpSets(php84: true)
	->withImportNames(removeUnusedImports: true)
	;
