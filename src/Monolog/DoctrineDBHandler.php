<?php

declare(strict_types=1);

namespace App\Monolog;

use Doctrine\ORM\EntityManagerInterface;
use Monolog\Handler\AbstractProcessingHandler;

class DoctrineDBHandler extends AbstractProcessingHandler
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;


    /**
     * MonologDBHandler constructor.
     *
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->entityManager = $em;
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array $record
     */
    protected function write(array $record): void
    {
        //
    }
}
