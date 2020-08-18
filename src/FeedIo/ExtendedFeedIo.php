<?php


namespace FeedIo;


use FeedIo\Standard\ExtendedLoader;

class ExtendedFeedIo extends FeedIo
{

    /**
     * Returns main standards
     *
     * @return array
     */
    public function getCommonStandards() : array
    {
        $loader = new ExtendedLoader();

        return $loader->getCommonStandards($this->getDateTimeBuilder());
    }

}