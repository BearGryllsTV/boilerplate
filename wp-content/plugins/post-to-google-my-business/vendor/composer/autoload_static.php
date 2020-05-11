<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eb86d5c7b4ded1a45988ae4f3b2025b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'R' => 
        array (
            'Rarst\\WordPress\\DateTime\\' => 25,
        ),
        'P' => 
        array (
            'PGMB\\Tests\\' => 11,
            'PGMB\\' => 5,
        ),
        'H' => 
        array (
            'Html2Text\\' => 10,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'Rarst\\WordPress\\DateTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/rarst/wpdatetime/src',
        ),
        'PGMB\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/PGMB',
        ),
        'PGMB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Html2Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/html2text/html2text/src',
            1 => __DIR__ . '/..' . '/html2text/html2text/test',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
    );

    public static $classMap = array (
        'PGMB\\API\\APIInterface' => __DIR__ . '/../..' . '/src/API/APIInterface.php',
        'PGMB\\API\\GoogleAPIError' => __DIR__ . '/../..' . '/src/API/GoogleAPIError.php',
        'PGMB\\BackgroundProcessing\\BackgroundProcess' => __DIR__ . '/../..' . '/src/BackgroundProcessing/BackgroundProcess.php',
        'PGMB\\BackgroundProcessing\\GooglePostManager' => __DIR__ . '/../..' . '/src/BackgroundProcessing/GooglePostManager.php',
        'PGMB\\BackgroundProcessing\\PostPublishProcess' => __DIR__ . '/../..' . '/src/BackgroundProcessing/PostPublishProcess.php',
        'PGMB\\Calendar\\Feed' => __DIR__ . '/../..' . '/src/Calendar/Feed.php',
        'PGMB\\Components\\BusinessSelector' => __DIR__ . '/../..' . '/src/Components/BusinessSelector.php',
        'PGMB\\Components\\PostEditor' => __DIR__ . '/../..' . '/src/Components/PostEditor.php',
        'PGMB\\Epitrove' => __DIR__ . '/../..' . '/src/Epitrove.php',
        'PGMB\\FormFields' => __DIR__ . '/../..' . '/src/FormFields.php',
        'PGMB\\Google\\AbstractGoogleJsonObject' => __DIR__ . '/../..' . '/src/Google/AbstractGoogleJsonObject.php',
        'PGMB\\Google\\CallToAction' => __DIR__ . '/../..' . '/src/Google/CallToAction.php',
        'PGMB\\Google\\Date' => __DIR__ . '/../..' . '/src/Google/Date.php',
        'PGMB\\Google\\LocalPost' => __DIR__ . '/../..' . '/src/Google/LocalPost.php',
        'PGMB\\Google\\LocalPostEditMask' => __DIR__ . '/../..' . '/src/Google/LocalPostEditMask.php',
        'PGMB\\Google\\LocalPostEvent' => __DIR__ . '/../..' . '/src/Google/LocalPostEvent.php',
        'PGMB\\Google\\LocalPostJsonDeserializeInterface' => __DIR__ . '/../..' . '/src/Google/LocalPostJsonDeserializeInterface.php',
        'PGMB\\Google\\LocalPostOffer' => __DIR__ . '/../..' . '/src/Google/LocalPostOffer.php',
        'PGMB\\Google\\LocalPostProduct' => __DIR__ . '/../..' . '/src/Google/LocalPostProduct.php',
        'PGMB\\Google\\MediaItem' => __DIR__ . '/../..' . '/src/Google/MediaItem.php',
        'PGMB\\Google\\Money' => __DIR__ . '/../..' . '/src/Google/Money.php',
        'PGMB\\Google\\PublishedLocalPost' => __DIR__ . '/../..' . '/src/Google/PublishedLocalPost.php',
        'PGMB\\Google\\TimeInterval' => __DIR__ . '/../..' . '/src/Google/TimeInterval.php',
        'PGMB\\Google\\TimeOfDay' => __DIR__ . '/../..' . '/src/Google/TimeOfDay.php',
        'PGMB\\Notifications\\BasicNotification' => __DIR__ . '/../..' . '/src/Notifications/BasicNotification.php',
        'PGMB\\Notifications\\FeatureNotification' => __DIR__ . '/../..' . '/src/Notifications/FeatureNotification.php',
        'PGMB\\Notifications\\Notification' => __DIR__ . '/../..' . '/src/Notifications/Notification.php',
        'PGMB\\Notifications\\NotificationManager' => __DIR__ . '/../..' . '/src/Notifications/NotificationManager.php',
        'PGMB\\ParseFormFields' => __DIR__ . '/../..' . '/src/ParseFormFields.php',
        'PGMB\\Placeholders\\LocationVariables' => __DIR__ . '/../..' . '/src/Placeholders/LocationVariables.php',
        'PGMB\\Placeholders\\PostPermalink' => __DIR__ . '/../..' . '/src/Placeholders/PostPermalink.php',
        'PGMB\\Placeholders\\PostVariables' => __DIR__ . '/../..' . '/src/Placeholders/PostVariables.php',
        'PGMB\\Placeholders\\SiteVariables' => __DIR__ . '/../..' . '/src/Placeholders/SiteVariables.php',
        'PGMB\\Placeholders\\UserVariables' => __DIR__ . '/../..' . '/src/Placeholders/UserVariables.php',
        'PGMB\\Placeholders\\VariableInterface' => __DIR__ . '/../..' . '/src/Placeholders/VariableInterface.php',
        'PGMB\\PostTypes\\AbstractPostType' => __DIR__ . '/../..' . '/src/PostTypes/AbstractPostType.php',
        'PGMB\\PostTypes\\PostTypeDefinition' => __DIR__ . '/../..' . '/src/PostTypes/PostTypeDefinition.php',
        'PGMB\\PostTypes\\PostTypeItem' => __DIR__ . '/../..' . '/src/PostTypes/PostTypeItem.php',
        'PGMB\\PostTypes\\SubPost' => __DIR__ . '/../..' . '/src/PostTypes/SubPost.php',
        'PGMB\\Taxonomy\\ListedTaxonomyField' => __DIR__ . '/../..' . '/src/Taxonomy/ListedTaxonomyField.php',
        'PGMB\\Taxonomy\\TaxonomyField' => __DIR__ . '/../..' . '/src/Taxonomy/TaxonomyField.php',
        'PGMB\\Taxonomy\\TaxonomyMeta' => __DIR__ . '/../..' . '/src/Taxonomy/TaxonomyMeta.php',
        'PGMB\\Tests\\Google\\CallToActionTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/CallToActionTest.php',
        'PGMB\\Tests\\Google\\DateTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/DateTest.php',
        'PGMB\\Tests\\Google\\LocalPostEditMaskTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/LocalPostEditMaskTest.php',
        'PGMB\\Tests\\Google\\LocalPostOfferTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/LocalPostOfferTest.php',
        'PGMB\\Tests\\Google\\LocalPostTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/LocalPostTest.php',
        'PGMB\\Tests\\Google\\TimeIntervalTest' => __DIR__ . '/../..' . '/tests/PGMB/Google/TimeIntervalTest.php',
        'PGMB\\Upgrader\\DistributedUpgrade' => __DIR__ . '/../..' . '/src/Upgrader/DistributedUpgrade.php',
        'PGMB\\Upgrader\\Upgrade' => __DIR__ . '/../..' . '/src/Upgrader/Upgrade.php',
        'PGMB\\Upgrader\\Upgrade_2_2_11' => __DIR__ . '/../..' . '/src/Upgrader/Upgrade_2_2_11.php',
        'PGMB\\Upgrader\\Upgrade_2_2_3' => __DIR__ . '/../..' . '/src/Upgrader/Upgrade_2_2_3.php',
        'PGMB\\Upgrader\\Upgrader' => __DIR__ . '/../..' . '/src/Upgrader/Upgrader.php',
        'PGMB\\Vendor\\Cron\\AbstractField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/AbstractField.php',
        'PGMB\\Vendor\\Cron\\CronExpression' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/CronExpression.php',
        'PGMB\\Vendor\\Cron\\DayOfMonthField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/DayOfMonthField.php',
        'PGMB\\Vendor\\Cron\\DayOfWeekField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/DayOfWeekField.php',
        'PGMB\\Vendor\\Cron\\FieldFactory' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/FieldFactory.php',
        'PGMB\\Vendor\\Cron\\FieldInterface' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/FieldInterface.php',
        'PGMB\\Vendor\\Cron\\HoursField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/HoursField.php',
        'PGMB\\Vendor\\Cron\\MinutesField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/MinutesField.php',
        'PGMB\\Vendor\\Cron\\MonthField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/MonthField.php',
        'PGMB\\Vendor\\Cron\\YearField' => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron/YearField.php',
        'PGMB\\Vendor\\Html2Text\\BasicTest' => __DIR__ . '/..' . '/html2text/html2text/test/BasicTest.php',
        'PGMB\\Vendor\\Html2Text\\BlockquoteTest' => __DIR__ . '/..' . '/html2text/html2text/test/BlockquoteTest.php',
        'PGMB\\Vendor\\Html2Text\\ConstructorTest' => __DIR__ . '/..' . '/html2text/html2text/test/ConstructorTest.php',
        'PGMB\\Vendor\\Html2Text\\DefinitionListTest' => __DIR__ . '/..' . '/html2text/html2text/test/DefinitionListTest.php',
        'PGMB\\Vendor\\Html2Text\\DelTest' => __DIR__ . '/..' . '/html2text/html2text/test/DelTest.php',
        'PGMB\\Vendor\\Html2Text\\Html2Text' => __DIR__ . '/..' . '/html2text/html2text/src/Html2Text.php',
        'PGMB\\Vendor\\Html2Text\\HtmlCharsTest' => __DIR__ . '/..' . '/html2text/html2text/test/HtmlCharsTest.php',
        'PGMB\\Vendor\\Html2Text\\ImageTest' => __DIR__ . '/..' . '/html2text/html2text/test/ImageTest.php',
        'PGMB\\Vendor\\Html2Text\\InsTest' => __DIR__ . '/..' . '/html2text/html2text/test/InsTest.php',
        'PGMB\\Vendor\\Html2Text\\LinkTest' => __DIR__ . '/..' . '/html2text/html2text/test/LinkTest.php',
        'PGMB\\Vendor\\Html2Text\\ListTest' => __DIR__ . '/..' . '/html2text/html2text/test/ListTest.php',
        'PGMB\\Vendor\\Html2Text\\PreTest' => __DIR__ . '/..' . '/html2text/html2text/test/PreTest.php',
        'PGMB\\Vendor\\Html2Text\\PrintTest' => __DIR__ . '/..' . '/html2text/html2text/test/PrintTest.php',
        'PGMB\\Vendor\\Html2Text\\SearchReplaceTest' => __DIR__ . '/..' . '/html2text/html2text/test/SearchReplaceTest.php',
        'PGMB\\Vendor\\Html2Text\\SpanTest' => __DIR__ . '/..' . '/html2text/html2text/test/SpanTest.php',
        'PGMB\\Vendor\\Html2Text\\StrToUpperTest' => __DIR__ . '/..' . '/html2text/html2text/test/StrToUpperTest.php',
        'PGMB\\Vendor\\Html2Text\\TableTest' => __DIR__ . '/..' . '/html2text/html2text/test/TableTest.php',
        'PGMB\\Vendor\\Rarst\\WordPress\\DateTime\\WpDateTime' => __DIR__ . '/..' . '/rarst/wpdatetime/src/WpDateTime.php',
        'PGMB\\Vendor\\Rarst\\WordPress\\DateTime\\WpDateTimeImmutable' => __DIR__ . '/..' . '/rarst/wpdatetime/src/WpDateTimeImmutable.php',
        'PGMB\\Vendor\\Rarst\\WordPress\\DateTime\\WpDateTimeInterface' => __DIR__ . '/..' . '/rarst/wpdatetime/src/WpDateTimeInterface.php',
        'PGMB\\Vendor\\Rarst\\WordPress\\DateTime\\WpDateTimeTrait' => __DIR__ . '/..' . '/rarst/wpdatetime/src/WpDateTimeTrait.php',
        'PGMB\\Vendor\\Rarst\\WordPress\\DateTime\\WpDateTimeZone' => __DIR__ . '/..' . '/rarst/wpdatetime/src/WpDateTimeZone.php',
        'PGMB\\WeDevsSettingsAPI' => __DIR__ . '/../..' . '/src/WeDevsSettingsAPI.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\AutoloadMerger' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/AutoloadMerger.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\Plugin\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Transformer.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4eb86d5c7b4ded1a45988ae4f3b2025b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4eb86d5c7b4ded1a45988ae4f3b2025b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4eb86d5c7b4ded1a45988ae4f3b2025b::$classMap;

        }, null, ClassLoader::class);
    }
}
