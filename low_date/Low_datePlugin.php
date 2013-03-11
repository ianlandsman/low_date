<?php
namespace Craft;

class Low_datePlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Low Date');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Lodewijk Schutte';
    }

    function getDeveloperUrl()
    {
        return 'http://gotolow.com';
    }
}