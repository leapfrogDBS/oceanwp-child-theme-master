<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
// Add custom font to font settings
function ocean_add_custom_fonts() {
	return array( 'Sailec-Regular','Sailec-Medium','Sailec-Bold'); // You can add more then 1 font to the array!
}
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

/**
 * Add the OceanWP Settings metabox in your CPT
 */
function oceanwp_metabox( $types ) {

	// Your custom post type
	$types[] = 'restricted';
	$types[] = 'premium';
	$types[] = 'event';
	// Return
	return $types;

}
add_filter( 'ocean_main_metaboxes_post_types', 'oceanwp_metabox', 20 );

function show_loggedin_function( $atts ) {

	global $current_user, $user_login;
      	get_currentuserinfo();
	add_filter('widget_text', 'do_shortcode');
	if ($user_login) 
		return $current_user->display_name ;
	else
		return '<a href="' . wp_login_url() . ' ">Login</a>';
	
}
add_shortcode( 'show_loggedin_as', 'show_loggedin_function' );

function show_loggedin_function2( $atts ) {

	global $current_user, $user_login;
      	get_currentuserinfo();
	add_filter('widget_text', 'do_shortcode');
	if ($user_login) 
		return $current_user->user_email ;
	else
		return '<a href="' . wp_login_url() . ' ">Login</a>';
	
}
add_shortcode( 'show_loggedin_email', 'show_loggedin_function2' );
add_shortcode( 'pms-subscription-info', 'pmsc_subscription_info_shortcode' );
function pmsc_subscription_info_shortcode( $atts ){
	$atts = shortcode_atts(	array(
			'id'                => get_current_user_id(),
			'subscription_plan' => '',
			'key'               => '',
		), $atts );
 
	if (empty($atts['key']) || empty($atts['id']))
		return;
 
	$args = array( 'user_id' => $atts['id'] );
 
	if( !empty( $atts['subscription_plan'] ) )
		$args['subscription_plan_id'] = $atts['subscription_plan'];
 
	$member = pms_get_member_subscriptions( $args );
 
	if ( empty( $member ) )
		return '';
 
 	$subscription_plan = pms_get_subscription_plan( $member[0]->subscription_plan_id );
 
	$subscription_statuses = pms_get_member_subscription_statuses();
 
	switch ($atts['key']) {
		case 'start_date':
			return ucfirst( date_i18n( 'j F, Y H:i', strtotime( $member[0]->start_date ) ) );
			break;
		case 'expiration_date':
			return ucfirst( date_i18n( 'j F, Y H:i', strtotime( $member[0]->expiration_date ) ) );
			break;
		case 'next_payment':
			return ucfirst( date_i18n( 'j F, Y H:i', strtotime( $member[0]->billing_next_payment ) ) );
			break;
		case 'status':
			return $subscription_statuses[$member[0]->status];
			break;
		case 'plan_name':
			return $subscription_plan->name;
			break;
		case 'plan_price':
			return $subscription_plan->price;
			break;
		case 'plan_duration':
			return $subscription_plan->duration . ' ' . $subscription_plan->duration_unit;
			break;
		case 'default':
			return;
			break;
	}
}
// Showing multiple post types in Posts Widget
add_action( 'elementor/query/free_and_prem', function( $query ) {
	// Here we set the query to fetch posts with
	// post type of 'custom-post-type1' and 'custom-post-type2'
	$query->set( 'post_type', [ 'restricted', 'premium' ] );
} );

		
function my_pmprorh_init( ) {
    // Don't break if Register Helper is not loaded.
    if( ! function_exists ( 'pmprorh_add_registration_field' ) ) {
        return false;
    }

    //define the fields
    $fields = array();

    $fields[] = new PMProRH_Field (
        'first_name',
        'text',
        array(
            'label' => 'First Name',
            'profile' => true,
            'required'  => true,
    ));

    $fields[] = new PMProRH_Field (
        'last_name',
        'text',
        array(
            'label' => 'Last Name',
            'profile' => true,
            'required'  => true,
    ));


    $fields[] = new PMProRH_Field (
        'user_phone_number',
        'text',
        array(
            'label' => 'Phone Number',
            'profile' => true,
    ));


$fields[] = new PMProRH_Field (
        'over_18',
        'checkbox',
        array(
            'label' => 'I am over 18',
            'profile' => true,
          
    ));

$fields[] = new PMProRH_Field (
        'bcountry',
        'select',
        array(
            'label' => 'Country',
            'profile' => true,
"options"=>array('' => 'Please Select',
        'AF' => 'Afghanistan',
	'AX' => 'Aland Islands',
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'American Samoa',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Antarctica',
	'AG' => 'Antigua And Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaijan',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia And Herzegovina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory',
	'BN' => 'Brunei Darussalam',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Cambodia',
	'CM' => 'Cameroon',
	'CA' => 'Canada',
	'CV' => 'Cape Verde',
	'KY' => 'Cayman Islands',
	'CF' => 'Central African Republic',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Christmas Island',
	'CC' => 'Cocos (Keeling) Islands',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CD' => 'Congo, Democratic Republic',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'CI' => 'Cote D\'Ivoire',
	'HR' => 'Croatia',
	'CU' => 'Cuba',
	'CY' => 'Cyprus',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'DJ' => 'Djibouti',
	'DM' => 'Dominica',
	'DO' => 'Dominican Republic',
	'EC' => 'Ecuador',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'GQ' => 'Equatorial Guinea',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Ethiopia',
	'FK' => 'Falkland Islands (Malvinas)',
	'FO' => 'Faroe Islands',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GI' => 'Gibraltar',
	'GR' => 'Greece',
	'GL' => 'Greenland',
	'GD' => 'Grenada',
	'GP' => 'Guadeloupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GG' => 'Guernsey',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Haiti',
	'HM' => 'Heard Island & Mcdonald Islands',
	'VA' => 'Holy See (Vatican City State)',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IS' => 'Iceland',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IR' => 'Iran, Islamic Republic Of',
	'IQ' => 'Iraq',
	'IE' => 'Ireland',
	'IM' => 'Isle Of Man',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'JM' => 'Jamaica',
	'JP' => 'Japan',
	'JE' => 'Jersey',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KE' => 'Kenya',
	'KI' => 'Kiribati',
	'KR' => 'Korea',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyzstan',
	'LA' => 'Lao People\'s Democratic Republic',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libyan Arab Jamahiriya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macao',
	'MK' => 'Macedonia',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malaysia',
	'MV' => 'Maldives',
	'ML' => 'Mali',
	'MT' => 'Malta',
	'MH' => 'Marshall Islands',
	'MQ' => 'Martinique',
	'MR' => 'Mauritania',
	'MU' => 'Mauritius',
	'YT' => 'Mayotte',
	'MX' => 'Mexico',
	'FM' => 'Micronesia, Federated States Of',
	'MD' => 'Moldova',
	'MC' => 'Monaco',
	'MN' => 'Mongolia',
	'ME' => 'Montenegro',
	'MS' => 'Montserrat',
	'MA' => 'Morocco',
	'MZ' => 'Mozambique',
	'MM' => 'Myanmar',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'AN' => 'Netherlands Antilles',
	'NC' => 'New Caledonia',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Norfolk Island',
	'MP' => 'Northern Mariana Islands',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PW' => 'Palau',
	'PS' => 'Palestinian Territory, Occupied',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reunion',
	'RO' => 'Romania',
	'RU' => 'Russian Federation',
	'RW' => 'Rwanda',
	'BL' => 'Saint Barthelemy',
	'SH' => 'Saint Helena',
	'KN' => 'Saint Kitts And Nevis',
	'LC' => 'Saint Lucia',
	'MF' => 'Saint Martin',
	'PM' => 'Saint Pierre And Miquelon',
	'VC' => 'Saint Vincent And Grenadines',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Sao Tome And Principe',
	'SA' => 'Saudi Arabia',
	'SN' => 'Senegal',
	'RS' => 'Serbia',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapore',
	'SK' => 'Slovakia',
	'SI' => 'Slovenia',
	'SB' => 'Solomon Islands',
	'SO' => 'Somalia',
	'ZA' => 'South Africa',
	'GS' => 'South Georgia And Sandwich Isl.',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard And Jan Mayen',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'SY' => 'Syrian Arab Republic',
	'TW' => 'Taiwan',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania',
	'TH' => 'Thailand',
	'TL' => 'Timor-Leste',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad And Tobago',
	'TN' => 'Tunisia',
	'TR' => 'Turkey',
	'TM' => 'Turkmenistan',
	'TC' => 'Turks And Caicos Islands',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'AE' => 'United Arab Emirates',
	'GB' => 'United Kingdom',
	'US' => 'United States',
	'UM' => 'United States Outlying Islands',
	'UY' => 'Uruguay',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VE' => 'Venezuela',
	'VN' => 'Viet Nam',
	'VG' => 'Virgin Islands, British',
	'VI' => 'Virgin Islands, U.S.',
	'WF' => 'Wallis And Futuna',
	'EH' => 'Western Sahara',
	'YE' => 'Yemen',
	'ZM' => 'Zambia',
	'ZW' => 'Zimbabwe'),
    ));


$fields[] = new PMProRH_Field (
        'users_city_1',
        'text',
        array(
            'label' => 'City',
            'profile' => true,
    ));

 $fields[] = new PMProRH_Field (
        'not_student_check',
        'radio',
        array(
            'label' => 'Are you a student?',
            'profile' => true,
            "options"=>array("yes"=>"yes", "no"=>"no"),
    ));

$fields[] = new PMProRH_Field (
        'university_name',
        'text',
        array(
            'label' => 'University/college',
	    "depends"=>array(array('id' => "not_student_check", 'value' => "yes")),
            'profile' => true,
    ));


$fields[] = new PMProRH_Field (
        'current_year',
        'text',
        array(
            'label' => 'University/college start date',
            'profile' => true,
	    "depends"=>array(array('id' => "not_student_check", 'value' => "yes")),
            'class'   => 'custom_field_datepicker',
    ));


$fields[] = new PMProRH_Field (
        'end_of_course_yr',
        'text',
        array(
            'label' => 'expected end date',
            'profile' => true,
	    "depends"=>array(array('id' => "not_student_check", 'value' => "yes")),
            'class'   => 'custom_field_datepicker',
    ));

$fields[] = new PMProRH_Field (
        'description',
        'textarea',
        array(
            'label' => 'Biographical Info',
            'profile' => true,
    ));

$fields[] = new PMProRH_Field (
        'newsletter',
        'checkbox',
        array(
            'label' => 'Newsletter',
            'profile' => true,
    ));

$fields[] = new PMProRH_Field (
        'user_consent_gdpr',
        'checkbox',
        array(
            'label' => '(GDPR) I allow the website to collect and store the data I submit through this form.',
            'profile' => true,
            'required'  => true,
    ));
    // Add the fields into a new checkout_boxes are of the checkout page.
    foreach ( $fields as $field ) {
        pmprorh_add_registration_field(
            'checkout_boxes', // location on checkout page
            $field            // PMProRH_Field object
        );
    }
}
add_action( 'init', 'my_pmprorh_init' );
