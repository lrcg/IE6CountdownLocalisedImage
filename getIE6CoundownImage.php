<?php

/**
 * Copyright © 2012 Myq Larson
 * http://copyfree.org/licenses/gnu_all_permissive/license.txt
 *
 * Function to get the proper localised version of the ie6countdown image
 *
 * This is based only on user's location. A better approach would be to
 * use this combined with user's browser language settings. Languages are
 * based on the most commonly understood/spoken language in each country.
 * No offense intended if one language was selected over another. See @todo
 * below for a way to improve the situation for multilingual countries.
 *
 * Images can be found at http://www.ie6countdown.com/join-us.aspx
 * Country codes can be found by using a geolocation service or database
 * such as http://dev.maxmind.com/geoip/
 *
 * @param string $location ISO 3166-1 Country Code
 * @return string localised image filename for ie6countdown
 * @todo Combine this with user's browser language settings
 */

function getIE6CountdownImgSrc($location) {
    $img = 'warning_bar_';

    switch ($location) {

        case 'FI':  // Finland
            $img .= '0001_finnish';  // Finnish
            break;

        case 'IT':  // Italy
        case 'SM':  // San Marino
        case 'VA':  // Holy See (Vatican City State)
            $img .= '0002_italian';  // Italian
            break;

        case 'NO':  // Norway
            $img .= '0003_norwegian';  // Norwegian
            break;

        case 'SE':  // Sweden
            $img .= '0004_swedish';  // Swedish
            break;

        case 'AW':  // Aruba
        case 'BE':  // Belgium
        case 'CW':  // Curacao
        case 'NL':  // Netherlands
        case 'SR':  // Suriname
        case 'SX':  // Sint Maarten
            $img .= '0005_dutch';  // Dutch
            break;

        case 'ES':  // Spain
            $img .= '0006_spanish_spain';  // Spanish (Spain)
            break;

        case 'DK':  // Denmark
        case 'FO':  // Faroe Islands
            $img .= '0007_danish';  // Danish
            break;

        // Difficult decision here
        // $img .= '0008_french_belgium';  // French (Belgium)
        // break;

        case 'TR':  // Turkey
        case 'CY':  // Cyprus
            $img .= '0009_turkish';  // Turkish
            break;

        case 'AO':  // Angola
        case 'BR':  // Brazil
        case 'CV':  // Cape Verde
        case 'GW':  // Guinea-Bissau
        case 'MZ':  // Mozambique
        case 'PT':  // Portugal
        case 'ST':  // Sao Tome and Principe
        case 'TL':  // Timor-Leste
            $img .= '0010_portuguese';  // Portuguese
            break;

        case 'DZ':  // Algeria
        case 'BH':  // Bahrain
        case 'TD':  // Chad
        case 'DJ':  // Djibouti
        case 'EG':  // Egypt
        case 'ER':  // Eritrea
        case 'IQ':  // Iraq
        case 'IL':  // Israel
        case 'JO':  // Jordan
        case 'KW':  // Kuwait
        case 'LB':  // Lebanon
        case 'LY':  // Libyan Arab Jamahiriya
        case 'MR':  // Mauritania
        case 'MA':  // Morocco
        case 'OM':  // Oman
        case 'PS':  // Palestinian Territory
        case 'QA':  // Qatar
        case 'SA':  // Saudi Arabia
        case 'SO':  // Somalia
        case 'SY':  // Syrian Arab Republic
        case 'TN':  // Tunisia
        case 'AE':  // United Arab Emirates
        case 'EH':  // Western Sahara
        case 'YE':  // Yemen
            $img .= '0011_arabic';  // Arabic
            break;

        case 'AR':  // Argentina
        case 'BO':  // Bolivia
        case 'CL':  // Chile
        case 'CO':  // Colombia
        case 'CR':  // Costa Rica
        case 'CU':  // Cuba
        case 'DO':  // Dominican Republic
        case 'GQ':  // Equatorial Guinea
        case 'EC':  // Ecuador
        case 'GT':  // Guatemala
        case 'HN':  // Honduras
        case 'MX':  // Mexico
        case 'NI':  // Nicaragua
        case 'PA':  // Panama
        case 'PY':  // Paraguay
        case 'PE':  // Peru
        case 'PR':  // Puerto Rico
        case 'SV':  // El Salvador
        case 'UY':  // Uruguay
        case 'VE':  // Venezuela
            $img .= '0012_spanish_LATAM';  // Spanish (Latin America)
            break;

        case 'JP':  // Japan
            $img .= '0013_japanese';  // Japanese
            break;

        case 'AT':  // Austria
        case 'DE':  // Germany
        case 'CH':  // Switzerland
        case 'LI':  // Liechtenstein
        case 'LU':  // Luxembourg
            $img .= '0014_german';  // German
            break;

        case 'UA':  // Ukraine
            $img .= '0015_ukrainian';  // Ukrainian
            break;

        case 'BY':  // Belarus
        case 'RU':  // Russian Federation
        case 'KZ':  // Kazakhstan
        case 'KG':  // Kyrgyzstan
        case 'TJ':  // Tajikistan
        case 'MD':  // Moldova, Republic of
        case 'RO':  // Romania
            $img .= '0016_russian';  // Russian
            break;

        case 'PL':  // Poland
            $img .= '0017_polish';  // Polish
            break;

        case 'CZ':  // Czech Republic
        case 'SK':  // Slovakia
            $img .= '0018_czech';  // Czech
            break;

        case 'PH':  // Philippines
            $img .= '0019_filipino';  // Filipino
            break;

        case 'MY':  // Malaysia
        case 'CC':  // Cocos (Keeling) Islands
        case 'BN':  // Brunei Darussalam
            $img .= '0020_malay';  // Malay
            break;

        case 'ID':  // Indonesia
            $img .= '0021_indonesian';  // Indonesian
            break;

        case 'KP':  // Korea, Democratic People's Republic of
        case 'KR':  // Korea, Republic of
            $img .= '0022_korean';  // Korean
            break;

        case 'VN':  // Vietnam
            $img .= '0023_vietnamese';  // Vietnamese
            break;

        case 'BJ':  // Benin
        case 'BF':  // Burkina Faso
        case 'BI':  // Burundi
        case 'CM':  // Cameroon
        case 'CF':  // Central African Republic
        case 'KM':  // Comoros
        case 'CI':  // Cote d'Ivoire
        case 'CD':  // Congo, The Democratic Republic of the
        case 'FR':  // France
        case 'GA':  // Gabon
        case 'GN':  // Guinea
        case 'HT':  // Haiti
        case 'MG':  // Madagascar
        case 'ML':  // Mali
        case 'MC':  // Monaco
        case 'NE':  // Niger
        case 'CG':  // Congo
        case 'SN':  // Senegal
        case 'SC':  // Seychelles
        case 'TG':  // Togo
        case 'PF':  // French Polynesia
        case 'TF':  // French Southern Territories
        case 'GF':  // French Guiana
            $img .= '0024_french';  // French
            break;

        case 'CN':  // China
            $img .= '0027_Simplified Chinese';  // Simplified Chinese
            break;

        case 'HK':  // Hong Kong
        case 'TW':  // Taiwan
            $img .= '0025_chinese_hong_kong';  // Chinese
            break;

        case 'TH':  // Thailand
            $img .= '0026_thai';  // Thai
            break;

        case 'AU':  // Australia
        case 'AG':  // Antigua and Barbuda
        case 'BS':  // Bahamas
        case 'BB':  // Barbados
        case 'BZ':  // Belize
        case 'BW':  // Botswana
        case 'CA':  // Canada
        case 'DM':  // Dominica
        case 'ET':  // Ethiopia
        case 'GU':  // Guam
        case 'GB':  // United Kingdom
        case 'IE':  // Ireland
        case 'FM':  // Micronesia, Federated States of
        case 'NA':  // Namibia
        case 'NR':  // Nauru
        case 'NG':  // Nigeria
        case 'PK':  // Pakistan
        case 'PW':  // Palau
        case 'PG':  // Papua New Guinea
        case 'KN':  // Saint Kitts and Nevis
        case 'IM':  // Isle of Man
        case 'JE':  // Jersey
        case 'FJ':  // Fiji
        case 'GM':  // Gambia
        case 'GH':  // Ghana
        case 'GD':  // Grenada
        case 'GY':  // Guyana
        case 'IN':  // India
        case 'IO':  // British Indian Ocean Territory
        case 'JM':  // Jamaica
        case 'KE':  // Kenya
        case 'KI':  // Kiribati
        case 'LS':  // Lesotho
        case 'LR':  // Liberia
        case 'MW':  // Malawi
        case 'MT':  // Malta
        case 'MH':  // Marshall Islands
        case 'MU':  // Mauritius
        case 'NZ':  // New Zealand
        case 'LC':  // Saint Lucia
        case 'VC':  // Saint Vincent and the Grenadines
        case 'WS':  // Samoa
        case 'SL':  // Sierra Leone
        case 'SG':  // Singapore
        case 'SB':  // Solomon Islands
        case 'ZA':  // South Africa
        case 'UM':  // United States Minor Outlying Islands
        case 'US':  // United States
        case 'VG':  // Virgin Islands, British
        case 'VI':  // Virgin Islands, U.S.
        case 'RW':  // Rwanda
        case 'SD':  // Sudan
        case 'SZ':  // Swaziland
        case 'TZ':  // Tanzania, United Republic of
        case 'TO':  // Tonga
        case 'TT':  // Trinidad and Tobago
        case 'TV':  // Tuvalu
        case 'UG':  // Uganda
        case 'VU':  // Vanuatu
        case 'ZM':  // Zambia
        case 'ZW':  // Zimbabwe
        case 'XX':
            $img .= '0000_us';  // English
            break;

        case 'A1':  // Anonymous Proxy
        case 'A2':  // Satellite Provider
        case 'O1':  // Other Country
        case 'AD':  // Andorra
        case 'AF':  // Afghanistan
        case 'AI':  // Anguilla
        case 'AL':  // Albania
        case 'AM':  // Armenia
        case 'AP':  // Asia/Pacific Region
        case 'AQ':  // Antarctica
        case 'AS':  // American Samoa
        case 'AX':  // Aland Islands
        case 'AZ':  // Azerbaijan
        case 'BA':  // Bosnia and Herzegovina
        case 'BD':  // Bangladesh
        case 'BG':  // Bulgaria
        case 'BL':  // Saint Bartelemey
        case 'BM':  // Bermuda
        case 'BQ':  // Bonaire, Saint Eustatius and Saba
        case 'BT':  // Bhutan
        case 'BV':  // Bouvet Island
        case 'CK':  // Cook Islands
        case 'CX':  // Christmas Island
        case 'EE':  // Estonia
        case 'EU':  // Europe
        case 'FK':  // Falkland Islands (Malvinas)
        case 'GE':  // Georgia
        case 'GG':  // Guernsey
        case 'GI':  // Gibraltar
        case 'GL':  // Greenland
        case 'GP':  // Guadeloupe
        case 'GR':  // Greece
        case 'GS':  // South Georgia and the South Sandwich Islands
        case 'HM':  // Heard Island and McDonald Islands
        case 'HR':  // Croatia
        case 'HU':  // Hungary
        case 'IR':  // Iran, Islamic Republic of
        case 'IS':  // Iceland
        case 'KH':  // Cambodia
        case 'KY':  // Cayman Islands
        case 'LA':  // Lao People's Democratic Republic
        case 'LK':  // Sri Lanka
        case 'LT':  // Lithuania
        case 'LV':  // Latvia
        case 'ME':  // Montenegro
        case 'MF':  // Saint Martin
        case 'MK':  // Macedonia
        case 'MM':  // Myanmar
        case 'MN':  // Mongolia
        case 'MO':  // Macao
        case 'MP':  // Northern Mariana Islands
        case 'MQ':  // Martinique
        case 'MS':  // Montserrat
        case 'MV':  // Maldives
        case 'NC':  // New Caledonia
        case 'NF':  // Norfolk Island
        case 'NP':  // Nepal
        case 'NU':  // Niue
        case 'PM':  // Saint Pierre and Miquelon
        case 'PN':  // Pitcairn
        case 'RE':  // Reunion
        case 'RS':  // Serbia
        case 'SH':  // Saint Helena
        case 'SI':  // Slovenia
        case 'SJ':  // Svalbard and Jan Mayen
        case 'TC':  // Turks and Caicos Islands
        case 'TK':  // Tokelau
        case 'TM':  // Turkmenistan
        case 'UZ':  // Uzbekistan
        case 'WF':  // Wallis and Futuna
        case 'YT':  // Mayotte
        default:
            $img .= '0000_us';  // English
            break;
    }
    return $img .= '.jpg';
}
?>