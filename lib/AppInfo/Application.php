<?php
/**
 * @copyright 2021, Mikael Nordin <kano@sunet.se>
 *
 * @author Mikael Nordin <kano@sunet.se>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\LoginPageButton\AppInfo;

use OCP\AppFramework\App;
use OCP\IConfig;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCA\LoginPageButton\LoginPageOption;

class Application extends App implements IBootstrap {
    private $appName = 'login_page_button';
    public function __construct()
    {
        parent::__construct($this->appName);
    }
    public function register(IRegistrationContext $context): void
    {
        $context->registerAlternativeLogin(LoginPageOption::class);
    }
    public function boot(IBootContext $context): void {
    }
}
