<?php

/**
 * Adtrak Class Functions for Specific Internals
 *
 * @version 1.0.0
 */
class Adtrak
{
    public function __construct()
    {
        add_filter('timber/twig', [$this, 'addFunctionsToTwig']);
    }

    /**
     * Get Adtrak Logo
     *
     * @param  mixed $colour
     * @param  mixed $icon
     * @return void
     */
    public static function getLogo($colour = null, $icon = false)
    {
        $end = ($icon === true) ? '-icon.svg' : '-logo.svg';

        switch ($colour) {
            case 'white':
                $logo = 'adtrak-white';
                $company = 'Adtrak';
                break;
            case 'navy':
                $logo = 'adtrak-navy';
                $company = 'Adtrak';
                break;
            case 'breeez-navy':
                $logo = 'breeez-navy';
                $company = 'Breeez';
                break;
            case 'breeez-white':
                $logo = 'breeez-white';
                $company = 'Breeez';
                break;
            default:
                $logo = 'adtrak';
                $company = 'Adtrak';
                break;
        }

        $logo = get_theme_file_uri('_resources/images/' . $logo . $end);

        return sprintf('<img class="lazyload" data-src="%s" alt="'. $company .' Logo">', $logo);
    }

    /**
     * Add the Adtrak Class functions to Timber
     *
     * @param  mixed $twig
     * @return void
     */
    public function addFunctionsToTwig($twig)
    {
        $twig->addFunction(new \Timber\Twig_Function('get_adtrak_logo', [$this, 'getLogo']));

        return $twig;
    }
}
