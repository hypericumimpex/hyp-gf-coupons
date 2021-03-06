<?php
/*
Plugin Name: HYP Forms Cupoane
Plugin URI: https://github.com/hypericumimpex/hyp-gf-coupons/
Description: Permite adaugarea integrarea cupoanelor in formulare.
Version: 2.8.3
Author: rocketgenius
Author URI: https://github.com/hypericumimpex/
License: GPL-2.0+
Text Domain: gravityformscoupons
Domain Path: /languages

------------------------------------------------------------------------
Copyright 2009-2018 rocketgenius

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

define( 'GF_COUPONS_VERSION', '2.8.3' );

add_action( 'gform_loaded', array( 'GF_Coupons_Bootstrap', 'load' ), 5 );

class GF_Coupons_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_feed_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-coupons.php' );

		GFAddOn::register( 'GFCoupons' );
	}
}

function gf_coupons() {
	return GFCoupons::get_instance();
}
