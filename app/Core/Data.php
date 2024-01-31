<?php

namespace App\Core;

use function PHPSTORM_META\map;

class Data {
    public static function getCountriesList() {
        return array(
            'AF' => array('name' => 'Afghanistan', 'flag' => 'flags/afghanistan.svg'),
            'AX' => array('name' => 'Aland Islands', 'flag' => 'flags/aland-islands.svg'),
            'AL' => array('name' => 'Albania', 'flag' => 'flags/albania.svg'),
            'DZ' => array('name' => 'Algeria', 'flag' => 'flags/algeria.svg'),
            'AS' => array('name' => 'American Samoa', 'flag' => 'flags/american-samoa.svg'),
            'AD' => array('name' => 'Andorra', 'flag' => 'flags/andorra.svg'),
            'AO' => array('name' => 'Angola', 'flag' => 'flags/angola.svg'),
            'AI' => array('name' => 'Anguilla', 'flag' => 'flags/anguilla.svg'),
            'AG' => array('name' => 'Antigua and Barbuda', 'flag' => 'flags/antigua-and-barbuda.svg'),
            'AR' => array('name' => 'Argentina', 'flag' => 'flags/argentina.svg'),
            'AM' => array('name' => 'Armenia', 'flag' => 'flags/armenia.svg'),
            'AW' => array('name' => 'Aruba', 'flag' => 'flags/aruba.svg'),
            'AU' => array('name' => 'Australia', 'flag' => 'flags/australia.svg'),
            'AT' => array('name' => 'Austria', 'flag' => 'flags/austria.svg'),
            'AZ' => array('name' => 'Azerbaijan', 'flag' => 'flags/azerbaijan.svg'),
            'BS' => array('name' => 'Bahamas', 'flag' => 'flags/bahamas.svg'),
            'BH' => array('name' => 'Bahrain', 'flag' => 'flags/bahrain.svg'),
            'BD' => array('name' => 'Bangladesh', 'flag' => 'flags/bangladesh.svg'),
            'BB' => array('name' => 'Barbados', 'flag' => 'flags/barbados.svg'),
            'BY' => array('name' => 'Belarus', 'flag' => 'flags/belarus.svg'),
            'BE' => array('name' => 'Belgium', 'flag' => 'flags/belgium.svg'),
            'BZ' => array('name' => 'Belize', 'flag' => 'flags/belize.svg'),
            'BJ' => array('name' => 'Benin', 'flag' => 'flags/benin.svg'),
            'BM' => array('name' => 'Bermuda', 'flag' => 'flags/bermuda.svg'),
            'BT' => array('name' => 'Bhutan', 'flag' => 'flags/bhutan.svg'),
            'BO' => array('name' => 'Bolivia, Plurinational State of', 'flag' => 'flags/bolivia.svg'),
            'BQ' => array('name' => 'Bonaire, Sint Eustatius and Saba', 'flag' => 'flags/bonaire.svg'),
            'BA' => array('name' => 'Bosnia and Herzegovina', 'flag' => 'flags/bosnia-and-herzegovina.svg'),
            'BW' => array('name' => 'Botswana', 'flag' => 'flags/botswana.svg'),
            'BR' => array('name' => 'Brazil', 'flag' => 'flags/brazil.svg'),
            'IO' => array('name' => 'British Indian Ocean Territory', 'flag' => 'flags/british-indian-ocean-territory.svg'),
            'BN' => array('name' => 'Brunei Darussalam', 'flag' => 'flags/brunei.svg'),
            'BG' => array('name' => 'Bulgaria', 'flag' => 'flags/bulgaria.svg'),
            'BF' => array('name' => 'Burkina Faso', 'flag' => 'flags/burkina-faso.svg'),
            'BI' => array('name' => 'Burundi', 'flag' => 'flags/burundi.svg'),
            'KH' => array('name' => 'Cambodia', 'flag' => 'flags/cambodia.svg'),
            'CM' => array('name' => 'Cameroon', 'flag' => 'flags/cameroon.svg'),
            'CA' => array('name' => 'Canada', 'flag' => 'flags/canada.svg'),
            'CV' => array('name' => 'Cape Verde', 'flag' => 'flags/cape-verde.svg'),
            'KY' => array('name' => 'Cayman Islands', 'flag' => 'flags/cayman-islands.svg'),
            'CF' => array('name' => 'Central African Republic', 'flag' => 'flags/central-african-republic.svg'),
            'TD' => array('name' => 'Chad', 'flag' => 'flags/chad.svg'),
            'CL' => array('name' => 'Chile', 'flag' => 'flags/chile.svg'),
            'CN' => array('name' => 'China', 'flag' => 'flags/china.svg'),
            'CX' => array('name' => 'Christmas Island', 'flag' => 'flags/christmas-island.svg'),
            'CC' => array('name' => 'Cocos (Keeling) Islands', 'flag' => 'flags/cocos-island.svg'),
            'CO' => array('name' => 'Colombia', 'flag' => 'flags/colombia.svg'),
            'KM' => array('name' => 'Comoros', 'flag' => 'flags/comoros.svg'),
            'CK' => array('name' => 'Cook Islands', 'flag' => 'flags/cook-islands.svg'),
            'CR' => array('name' => 'Costa Rica', 'flag' => 'flags/costa-rica.svg'),
            'CI' => array('name' => 'Côte d\'Ivoire', 'flag' => 'flags/ivory-coast.svg'),
            'HR' => array('name' => 'Croatia', 'flag' => 'flags/croatia.svg'),
            'CU' => array('name' => 'Cuba', 'flag' => 'flags/cuba.svg'),
            'CW' => array('name' => 'Curaçao', 'flag' => 'flags/curacao.svg'),
            'CZ' => array('name' => 'Czech Republic', 'flag' => 'flags/czech-republic.svg'),
            'DK' => array('name' => 'Denmark', 'flag' => 'flags/denmark.svg'),
            'DJ' => array('name' => 'Djibouti', 'flag' => 'flags/djibouti.svg'),
            'DM' => array('name' => 'Dominica', 'flag' => 'flags/dominica.svg'),
            'DO' => array('name' => 'Dominican Republic', 'flag' => 'flags/dominican-republic.svg'),
            'EC' => array('name' => 'Ecuador', 'flag' => 'flags/ecuador.svg'),
            'EG' => array('name' => 'Egypt', 'flag' => 'flags/egypt.svg'),
            'SV' => array('name' => 'El Salvador', 'flag' => 'flags/el-salvador.svg'),
            'GQ' => array('name' => 'Equatorial Guinea', 'flag' => 'flags/equatorial-guinea.svg'),
            'ER' => array('name' => 'Eritrea', 'flag' => 'flags/eritrea.svg'),
            'EE' => array('name' => 'Estonia', 'flag' => 'flags/estonia.svg'),
            'ET' => array('name' => 'Ethiopia', 'flag' => 'flags/ethiopia.svg'),
            'FK' => array('name' => 'Falkland Islands (Malvinas)', 'flag' => 'flags/falkland-islands.svg'),
            'FJ' => array('name' => 'Fiji', 'flag' => 'flags/fiji.svg'),
            'FI' => array('name' => 'Finland', 'flag' => 'flags/finland.svg'),
            'FR' => array('name' => 'France', 'flag' => 'flags/france.svg'),
            'PF' => array('name' => 'French Polynesia', 'flag' => 'flags/french-polynesia.svg'),
            'GA' => array('name' => 'Gabon', 'flag' => 'flags/gabon.svg'),
            'GM' => array('name' => 'Gambia', 'flag' => 'flags/gambia.svg'),
            'GE' => array('name' => 'Georgia', 'flag' => 'flags/georgia.svg'),
            'DE' => array('name' => 'Germany', 'flag' => 'flags/germany.svg'),
            'GH' => array('name' => 'Ghana', 'flag' => 'flags/ghana.svg'),
            'GI' => array('name' => 'Gibraltar', 'flag' => 'flags/gibraltar.svg'),
            'GR' => array('name' => 'Greece', 'flag' => 'flags/greece.svg'),
            'GL' => array('name' => 'Greenland', 'flag' => 'flags/greenland.svg'),
            'GD' => array('name' => 'Grenada', 'flag' => 'flags/grenada.svg'),
            'GU' => array('name' => 'Guam', 'flag' => 'flags/guam.svg'),
            'GT' => array('name' => 'Guatemala', 'flag' => 'flags/guatemala.svg'),
            'GG' => array('name' => 'Guernsey', 'flag' => 'flags/guernsey.svg'),
            'GN' => array('name' => 'Guinea', 'flag' => 'flags/guinea.svg'),
            'GW' => array('name' => 'Guinea-Bissau', 'flag' => 'flags/guinea-bissau.svg'),
            'HT' => array('name' => 'Haiti', 'flag' => 'flags/haiti.svg'),
            'VA' => array('name' => 'Holy See (Vatican City State)', 'flag' => 'flags/vatican-city.svg'),
            'HN' => array('name' => 'Honduras', 'flag' => 'flags/honduras.svg'),
            'HK' => array('name' => 'Hong Kong', 'flag' => 'flags/hong-kong.svg'),
            'HU' => array('name' => 'Hungary', 'flag' => 'flags/hungary.svg'),
            'IS' => array('name' => 'Iceland', 'flag' => 'flags/iceland.svg'),
            'IN' => array('name' => 'India', 'flag' => 'flags/india.svg'),
            'ID' => array('name' => 'Indonesia', 'flag' => 'flags/indonesia.svg'),
            'IR' => array('name' => 'Iran, Islamic Republic of', 'flag' => 'flags/iran.svg'),
            'IQ' => array('name' => 'Iraq', 'flag' => 'flags/iraq.svg'),
            'IE' => array('name' => 'Ireland', 'flag' => 'flags/ireland.svg'),
            'IM' => array('name' => 'Isle of Man', 'flag' => 'flags/isle-of-man.svg'),
            'IL' => array('name' => 'Israel', 'flag' => 'flags/israel.svg'),
            'IT' => array('name' => 'Italy', 'flag' => 'flags/italy.svg'),
            'JM' => array('name' => 'Jamaica', 'flag' => 'flags/jamaica.svg'),
            'JP' => array('name' => 'Japan', 'flag' => 'flags/japan.svg'),
            'JE' => array('name' => 'Jersey', 'flag' => 'flags/jersey.svg'),
            'JO' => array('name' => 'Jordan', 'flag' => 'flags/jordan.svg'),
            'KZ' => array('name' => 'Kazakhstan', 'flag' => 'flags/kazakhstan.svg'),
            'KE' => array('name' => 'Kenya', 'flag' => 'flags/kenya.svg'),
            'KI' => array('name' => 'Kiribati', 'flag' => 'flags/kiribati.svg'),
            'KP' => array('name' => 'Korea, Democratic People\'s Republic of', 'flag' => 'flags/north-korea.svg'),
            'KW' => array('name' => 'Kuwait', 'flag' => 'flags/kuwait.svg'),
            'KG' => array('name' => 'Kyrgyzstan', 'flag' => 'flags/kyrgyzstan.svg'),
            'LA' => array('name' => 'Lao People\'s Democratic Republic', 'flag' => 'flags/laos.svg'),
            'LV' => array('name' => 'Latvia', 'flag' => 'flags/latvia.svg'),
            'LB' => array('name' => 'Lebanon', 'flag' => 'flags/lebanon.svg'),
            'LS' => array('name' => 'Lesotho', 'flag' => 'flags/lesotho.svg'),
            'LR' => array('name' => 'Liberia', 'flag' => 'flags/liberia.svg'),
            'LY' => array('name' => 'Libya', 'flag' => 'flags/libya.svg'),
            'LI' => array('name' => 'Liechtenstein', 'flag' => 'flags/liechtenstein.svg'),
            'LT' => array('name' => 'Lithuania', 'flag' => 'flags/lithuania.svg'),
            'LU' => array('name' => 'Luxembourg', 'flag' => 'flags/luxembourg.svg'),
            'MO' => array('name' => 'Macao', 'flag' => 'flags/macao.svg'),
            'MG' => array('name' => 'Madagascar', 'flag' => 'flags/madagascar.svg'),
            'MW' => array('name' => 'Malawi', 'flag' => 'flags/malawi.svg'),
            'MY' => array('name' => 'Malaysia', 'flag' => 'flags/malaysia.svg'),
            'MV' => array('name' => 'Maldives', 'flag' => 'flags/maldives.svg'),
            'ML' => array('name' => 'Mali', 'flag' => 'flags/mali.svg'),
            'MT' => array('name' => 'Malta', 'flag' => 'flags/malta.svg'),
            'MH' => array('name' => 'Marshall Islands', 'flag' => 'flags/marshall-island.svg'),
            'MQ' => array('name' => 'Martinique', 'flag' => 'flags/martinique.svg'),
            'MR' => array('name' => 'Mauritania', 'flag' => 'flags/mauritania.svg'),
            'MU' => array('name' => 'Mauritius', 'flag' => 'flags/mauritius.svg'),
            'MX' => array('name' => 'Mexico', 'flag' => 'flags/mexico.svg'),
            'FM' => array('name' => 'Micronesia, Federated States of', 'flag' => 'flags/micronesia.svg'),
            'MD' => array('name' => 'Moldova, Republic of', 'flag' => 'flags/moldova.svg'),
            'MC' => array('name' => 'Monaco', 'flag' => 'flags/monaco.svg'),
            'MN' => array('name' => 'Mongolia', 'flag' => 'flags/mongolia.svg'),
            'ME' => array('name' => 'Montenegro', 'flag' => 'flags/montenegro.svg'),
            'MS' => array('name' => 'Montserrat', 'flag' => 'flags/montserrat.svg'),
            'MA' => array('name' => 'Morocco', 'flag' => 'flags/morocco.svg'),
            'MZ' => array('name' => 'Mozambique', 'flag' => 'flags/mozambique.svg'),
            'MM' => array('name' => 'Myanmar', 'flag' => 'flags/myanmar.svg'),
            'NA' => array('name' => 'Namibia', 'flag' => 'flags/namibia.svg'),
            'NR' => array('name' => 'Nauru', 'flag' => 'flags/nauru.svg'),
            'NP' => array('name' => 'Nepal', 'flag' => 'flags/nepal.svg'),
            'NL' => array('name' => 'Netherlands', 'flag' => 'flags/netherlands.svg'),
            'NZ' => array('name' => 'New Zealand', 'flag' => 'flags/new-zealand.svg'),
            'NI' => array('name' => 'Nicaragua', 'flag' => 'flags/nicaragua.svg'),
            'NE' => array('name' => 'Niger', 'flag' => 'flags/niger.svg'),
            'NG' => array('name' => 'Nigeria', 'flag' => 'flags/nigeria.svg'),
            'NU' => array('name' => 'Niue', 'flag' => 'flags/niue.svg'),
            'NF' => array('name' => 'Norfolk Island', 'flag' => 'flags/norfolk-island.svg'),
            'MP' => array('name' => 'Northern Mariana Islands', 'flag' => 'flags/northern-mariana-islands.svg'),
            'NO' => array('name' => 'Norway', 'flag' => 'flags/norway.svg'),
            'OM' => array('name' => 'Oman', 'flag' => 'flags/oman.svg'),
            'PK' => array('name' => 'Pakistan', 'flag' => 'flags/pakistan.svg'),
            'PW' => array('name' => 'Palau', 'flag' => 'flags/palau.svg'),
            'PS' => array('name' => 'Palestinian Territory, Occupied', 'flag' => 'flags/palestine.svg'),
            'PA' => array('name' => 'Panama', 'flag' => 'flags/panama.svg'),
            'PG' => array('name' => 'Papua New Guinea', 'flag' => 'flags/papua-new-guinea.svg'),
            'PY' => array('name' => 'Paraguay', 'flag' => 'flags/paraguay.svg'),
            'PE' => array('name' => 'Peru', 'flag' => 'flags/peru.svg'),
            'PH' => array('name' => 'Philippines', 'flag' => 'flags/philippines.svg'),
            'PL' => array('name' => 'Poland', 'flag' => 'flags/poland.svg'),
            'PT' => array('name' => 'Portugal', 'flag' => 'flags/portugal.svg'),
            'PR' => array('name' => 'Puerto Rico', 'flag' => 'flags/puerto-rico.svg'),
            'QA' => array('name' => 'Qatar', 'flag' => 'flags/qatar.svg'),
            'RO' => array('name' => 'Romania', 'flag' => 'flags/romania.svg'),
            'RU' => array('name' => 'Russian Federation', 'flag' => 'flags/russia.svg'),
            'RW' => array('name' => 'Rwanda', 'flag' => 'flags/rwanda.svg'),
            'BL' => array('name' => 'Saint Barthélemy', 'flag' => 'flags/st-barts.svg'),
            'KN' => array('name' => 'Saint Kitts and Nevis', 'flag' => 'flags/saint-kitts-and-nevis.svg'),
            'LC' => array('name' => 'Saint Lucia', 'flag' => 'flags/st-lucia.svg'),
            'MF' => array('name' => 'Saint Martin (French part)', 'flag' => 'flags/sint-maarten.svg'),
            // 'PM' => array('name' => 'Saint Pierre and Miquelon', 'flag' => 'flags/saint-pierre.svg'),
            'VC' => array('name' => 'Saint Vincent and the Grenadines', 'flag' => 'flags/st-vincent-and-the-grenadines.svg'),
            'WS' => array('name' => 'Samoa', 'flag' => 'flags/samoa.svg'),
            'SM' => array('name' => 'San Marino', 'flag' => 'flags/san-marino.svg'),
            'ST' => array('name' => 'Sao Tome and Principe', 'flag' => 'flags/sao-tome-and-prince.svg'),
            'SA' => array('name' => 'Saudi Arabia', 'flag' => 'flags/saudi-arabia.svg'),
            'SN' => array('name' => 'Senegal', 'flag' => 'flags/senegal.svg'),
            'RS' => array('name' => 'Serbia', 'flag' => 'flags/serbia.svg'),
            'SC' => array('name' => 'Seychelles', 'flag' => 'flags/seychelles.svg'),
            'SL' => array('name' => 'Sierra Leone', 'flag' => 'flags/sierra-leone.svg'),
            'SG' => array('name' => 'Singapore', 'flag' => 'flags/singapore.svg'),
            'SX' => array('name' => 'Sint Maarten (Dutch part)', 'flag' => 'flags/sint-maarten.svg'),
            'SK' => array('name' => 'Slovakia', 'flag' => 'flags/slovakia.svg'),
            'SI' => array('name' => 'Slovenia', 'flag' => 'flags/slovenia.svg'),
            'SB' => array('name' => 'Solomon Islands', 'flag' => 'flags/solomon-islands.svg'),
            'SO' => array('name' => 'Somalia', 'flag' => 'flags/somalia.svg'),
            'ZA' => array('name' => 'South Africa', 'flag' => 'flags/south-africa.svg'),
            'KR' => array('name' => 'South Korea', 'flag' => 'flags/south-korea.svg'),
            'SS' => array('name' => 'South Sudan', 'flag' => 'flags/south-sudan.svg'),
            'ES' => array('name' => 'Spain', 'flag' => 'flags/spain.svg'),
            'LK' => array('name' => 'Sri Lanka', 'flag' => 'flags/sri-lanka.svg'),
            'SD' => array('name' => 'Sudan', 'flag' => 'flags/sudan.svg'),
            'SR' => array('name' => 'Suriname', 'flag' => 'flags/suriname.svg'),
            'SZ' => array('name' => 'Swaziland', 'flag' => 'flags/swaziland.svg'),
            'SE' => array('name' => 'Sweden', 'flag' => 'flags/sweden.svg'),
            'CH' => array('name' => 'Switzerland', 'flag' => 'flags/switzerland.svg'),
            'SY' => array('name' => 'Syrian Arab Republic', 'flag' => 'flags/syria.svg'),
            'TW' => array('name' => 'Taiwan, Province of China', 'flag' => 'flags/taiwan.svg'),
            'TJ' => array('name' => 'Tajikistan', 'flag' => 'flags/tajikistan.svg'),
            'TZ' => array('name' => 'Tanzania, United Republic of', 'flag' => 'flags/tanzania.svg'),
            'TH' => array('name' => 'Thailand', 'flag' => 'flags/thailand.svg'),
            'TG' => array('name' => 'Togo', 'flag' => 'flags/togo.svg'),
            'TK' => array('name' => 'Tokelau', 'flag' => 'flags/tokelau.svg'),
            'TO' => array('name' => 'Tonga', 'flag' => 'flags/tonga.svg'),
            'TT' => array('name' => 'Trinidad and Tobago', 'flag' => 'flags/trinidad-and-tobago.svg'),
            'TN' => array('name' => 'Tunisia', 'flag' => 'flags/tunisia.svg'),
            'TR' => array('name' => 'Turkey', 'flag' => 'flags/turkey.svg'),
            'TM' => array('name' => 'Turkmenistan', 'flag' => 'flags/turkmenistan.svg'),
            'TC' => array('name' => 'Turks and Caicos Islands', 'flag' => 'flags/turks-and-caicos.svg'),
            'TV' => array('name' => 'Tuvalu', 'flag' => 'flags/tuvalu.svg'),
            'UG' => array('name' => 'Uganda', 'flag' => 'flags/uganda.svg'),
            'UA' => array('name' => 'Ukraine', 'flag' => 'flags/ukraine.svg'),
            'AE' => array('name' => 'United Arab Emirates', 'flag' => 'flags/united-arab-emirates.svg'),
            'GB' => array('name' => 'United Kingdom', 'flag' => 'flags/united-kingdom.svg'),
            'US' => array('name' => 'United States', 'flag' => 'flags/united-states.svg'),
            'UY' => array('name' => 'Uruguay', 'flag' => 'flags/uruguay.svg'),
            'UZ' => array('name' => 'Uzbekistan', 'flag' => 'flags/uzbekistan.svg'),
            'VU' => array('name' => 'Vanuatu', 'flag' => 'flags/vanuatu.svg'),
            'VE' => array('name' => 'Venezuela, Bolivarian Republic of', 'flag' => 'flags/venezuela.svg'),
            'VN' => array('name' => 'Vietnam', 'flag' => 'flags/vietnam.svg'),
            'VI' => array('name' => 'Virgin Islands', 'flag' => 'flags/virgin-islands.svg'),
            'YE' => array('name' => 'Yemen', 'flag' => 'flags/yemen.svg'),
            'ZM' => array('name' => 'Zambia', 'flag' => 'flags/zambia.svg'),
            'ZW' => array('name' => 'Zimbabwe', 'flag' => 'flags/zimbabwe.svg')
        );
    }

    public static function getLanguagesList() {
        $countryArr = Data::getCountriesList();

        return array(
            'ar' => array('name' => 'العربية - Arabic', 'country' => $countryArr['AR']),
            'en' => array('name' => 'English', 'country' => $countryArr['GB'])
        );
    }

    public static function getCurrencyList() {
        $countryArr = Data::getCountriesList();

        return array(
            'SAR' => array('name' => 'الريال السعودي', 'country' => $countryArr['SA']),
            'USD' => array('name' => 'USA dollar', 'country' => $countryArr['US']),
            'GBP' => array('name' => 'British pound', 'country' => $countryArr['GB']),
            'CHF' => array('name' => 'Swiss franc', 'country' => $countryArr['CH'])
        );
    }

    public static function getTimeZonesList() {
        return array(
            'International Date Line West' => array('name' => '(GMT-11:00) International Date Line West', 'offset' => '-39600'),
            'UTC' => array('name' => '(GMT) UTC', 'offset' => '0'),
            'Kuwait' => array('name' => '(GMT+03:00) Kuwait', 'offset' => '10800'),
            'Riyadh' => array('name' => '(GMT+03:00) Riyadh', 'offset' => '10800'),

        );
    }

    public static function getSampleUserInfo($index = -1) {
        $users = array(
            array(
                'name' => 'Emma Smith',
                'avatar' => 'avatars/300-6.jpg',
                'email' => 'e.smith@kpmg.com.au',
                'position' => 'Art Director',
                "online" => false
            ),
            array(
                'name' => 'Melody Macy',
                'initials' => array('label' => 'M', 'state' => 'danger'),
                'email' => 'melody@altbox.com',
                'position' => 'Marketing Analytic',
                "online" => true
            ),
            array(
                'name' => 'Max Smith',
                'avatar' => 'avatars/300-1.jpg',
                'email' => 'max@kt.com',
                'position' => 'Software Enginer',
                "online" => false
            ),
            array(
                'name' => 'Sean Bean',
                'avatar' => 'avatars/300-5.jpg',
                'email' => 'sean@dellito.com',
                'position' => 'Web Developer',
                "online" => false
            ),
            array(
                'name' => 'Brian Cox',
                'avatar' => 'avatars/300-25.jpg',
                'email' => 'brian@exchange.com',
                'position' => 'UI/UX Designer',
                "online" => false
            ),
            array(
                'name' => 'Mikaela Collins',
                'initials' => array('label' => 'C', 'state' => 'warning'),
                'email' => 'mikaela@pexcom.com',
                'position' => 'Head Of Marketing',
                "online" => true
            ),
            array(
                'name' => 'Francis Mitcham',
                'avatar' => 'avatars/300-9.jpg',
                'email' => 'f.mitcham@kpmg.com.au',
                'position' => 'Software Arcitect',
                "online" => false
            ),

            array(
                'name' => 'Olivia Wild',
                'initials' => array('label' => 'O', 'state' => 'danger'),
                'email' => 'olivia@corpmail.com',
                'position' => 'System Admin',
                "online" => true
            ),
            array(
                'name' => 'Neil Owen',
                'initials' => array('label' => 'N', 'state' => 'primary'),
                'email' => 'owen.neil@gmail.com',
                'position' => 'Account Manager',
                "online" => true
            ),
            array(
                'name' => 'Dan Wilson',
                'avatar' => 'avatars/300-23.jpg',
                'email' => 'dam@consilting.com',
                'position' => 'Web Desinger',
                "online" => false
            ),
            array(
                'name' => 'Emma Bold',
                'initials' => array('label' => 'E', 'state' => 'danger'),
                'email' => 'emma@intenso.com',
                'position' => 'Corporate Finance',
                "online" => true
            ),
            array(
                'name' => 'Ana Crown',
                'avatar' => 'avatars/300-12.jpg',
                'email' => 'ana.cf@limtel.com',
                'position' => 'Customer Relationship',
                "online" => false
            ),
            array(
                'name' => 'Robert Doe',
                'initials' => array('label' => 'A', 'state' => 'info'),
                'email' => 'robert@benko.com',
                'position' => 'Marketing Executive',
                "online" => true
            ),
            array(
                'name' => 'John Miller',
                'avatar' => 'avatars/300-13.jpg',
                'email' => 'miller@mapple.com',
                'position' => 'Project Manager',
                "online" => false
            ),
            array(
                'name' => 'Lucy Kunic',
                'initials' => array('label' => 'L', 'state' => 'success'),
                'email' => 'lucy.m@fentech.com',
                'position' => 'SEO Master',
                "online" => true
            ),
            array(
                'name' => 'Ethan Wilder',
                'avatar' => 'avatars/300-21.jpg',
                'email' => 'ethan@loop.com.au',
                'position' => 'Accountant',
                "online" => true
            )
        );

        $total = count($users);

        if ($index === -1 || isset($users[$index]) === false) {
           $index = rand(0, $total - 1);
        }

        return $users[$index];
    }

    public static function getSampleStatus($index = -1) {
        $statuses = array(
            array('label' => 'Approved', 'state' => 'success'),
            array('label' => 'Pending', 'state' => 'warning'),
            array('label' => 'Rejected', 'state' => 'danger'),
            array('label' => 'In progress', 'state' => 'info'),
            array('label' => 'Completed', 'state' => 'primary'),
        );

        $total = count($statuses);

        if ($index === -1 || isset($statuses[$index]) === false) {
           $index = rand(0, $total - 2);
        }

        return $statuses[$index];
    }

    public static function getSampleDate() {
        $dates = array('Feb 21', 'Mar 10', 'Apr 15', 'May 05', 'Jun 20', 'Jun 24', 'Jul 25', 'Aug 19', 'Sep 22', 'Oct 25', 'Nov 10', 'Dec 20');

        $date = $dates[rand(0, count($dates) - 1)] . ", " . date("Y");

        return $date;
    }

    public static function getSampleDatetime() {
        $dates = array('21 Feb', '10 Mar', '15 Apr', '05 May', '20 Jun', '24 Jun', '25 Jul', '19 Aug', '22 Sep', '25 Oct', '10 Nov', '20 Dec');
        $times = array('8:43 pm', '10:30 am', '5:20 pm', '2:40 pm', '11:05 am', '10:10 pm', '6:05 pm', '11:30 am', '5:30 pm', '9:23 pm', '6:43 am');

        $date = $dates[rand(0, count($dates) - 1)] . " " . date("Y") . ", " . $times[rand(0, count($times) - 1)];

        return $date;
    }
}
