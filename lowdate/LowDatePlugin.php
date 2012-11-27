<?php
namespace Blocks;

class LowDatePlugin extends BasePlugin
{
    function getName()
    {
        return Blocks::t('Low Date');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Low';
    }

    function getDeveloperUrl()
    {
        return 'http://gotolow.com';
    }
}