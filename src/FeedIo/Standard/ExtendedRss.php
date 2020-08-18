<?php declare(strict_types=1);

namespace FeedIo\Standard;

use FeedIo\Rule\Author;
use FeedIo\Rule\PublicId;
use FeedIo\Rule\Media;
use FeedIo\RuleSet;

class ExtendedRss extends Rss
{

    /**
     * @return \FeedIo\RuleSet
     */
    public function buildItemRuleSet() : RuleSet
    {
        $ruleSet = $this->buildBaseRuleSet();
        $ruleSet
            ->add(new Author(), ['dc:creator'])
            ->add(new PublicId())
            ->add($this->getModifiedSinceRule(static::DATE_NODE_TAGNAME), ['lastBuildDate', 'lastPubDate'])
            ->add(new Media(), ['media:group'])
            ->add(new Media(), ['media:content'])
        ;

        return $ruleSet;
    }

}