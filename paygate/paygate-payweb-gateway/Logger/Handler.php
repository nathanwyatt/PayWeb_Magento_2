<?php
/** @noinspection PhpMissingFieldTypeInspection */

/** @noinspection PhpUndefinedNamespaceInspection */

/** @noinspection PhpUnused */

namespace PayGate\PayWeb\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/paygate-payweb.log';
}
