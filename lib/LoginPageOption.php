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

namespace OCA\LoginPageButton;

use \OCP\Authentication\IAlternativeLogin;
use \OCP\IConfig;

class LoginPageOption implements IAlternativeLogin {

    private $config;
    private $appName;

    public function __construct(IConfig $config, $appName){
        $this->config = $config;
        $this->appName = $appName;
    }

    public function getLabel(): string
    {
    	return $this->config->getSystemValue('login_page_button_text', 'SUNET');
    }
    
    public function getLink(): string
    {
    	return $this->config->getSystemValue('login_page_button_link', 'https://sunet.se');
    }
    
    public function getClass(): string
    {
    	return 'login-page-button';
    }
    
    public function load(): void
    {
    }
}
