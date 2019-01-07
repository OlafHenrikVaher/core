<?php
/**
 * @author Piotr Mrowczynski <piotr@owncloud.com>
 *
 * @copyright Copyright (c) 2018, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCP\Share\ExtraPermissions;

/**
 * Interface IPermissions
 *
 * @package OCP\Share\ExtraPermissions
 * @since 10.2.0
 */
interface IPermissions {

	/**
	 * @param $app
	 * @param $permission
	 * @return mixed
	 */
	public function addPermission($app, $permission);

	/**
	 * @param $app
	 * @param $permission
	 * @return mixed
	 */
	public function hasPermission($app, $permission);

	/**
	 * @return mixed
	 */
	public function serialize();

	/**
	 * @param $permissions
	 * @return bool
	 */
	public function load($permissions);

}
