<?php

namespace Doctrine\ODM\MongoDB\Tools\Console\Command;

use Doctrine\ODM\MongoDB\SchemaManager;

/**
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class SchemaCreateCommand extends AbstractSchemaCommand
{
    protected $_commandName = 'create';

    protected function processDocumentCollection(SchemaManager $sm, $document)
    {
        $sm->createDocumentCollection($document);
    }

    protected function processCollections(SchemaManager $sm)
    {
        $sm->createCollections();
    }

    protected function processDocumentDB(SchemaManager $sm, $document)
    {
        $sm->createDocumentDatabase($document);
    }

    protected function processDBs(SchemaManager $sm)
    {
        $sm->createDatabases();
    }

}