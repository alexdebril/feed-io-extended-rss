<?php declare(strict_types=1);

namespace FeedIo\Standard;

use FeedIo\Rule\DateTimeBuilder;

class ExtendedLoader
{

    /**
     * @param DateTimeBuilder $builder
     * @return array
     */
    public function getCommonStandards(DateTimeBuilder $builder) : array
    {
        return [
            'json' => new Json($builder),
            'atom' => new Atom($builder),
            'rss' => new ExtendedRss($builder),
            'rdf' => new Rdf($builder),
        ];
    }
}
