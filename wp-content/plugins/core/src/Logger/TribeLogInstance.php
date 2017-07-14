<?php
namespace Tribe\Project\Logger;

use Tribe\Libs\ACF\Group;

interface TribeLogInstance {
	public function get_label();
	public function register_logger();
	public function get_acf_settings_group( Group $group );
}