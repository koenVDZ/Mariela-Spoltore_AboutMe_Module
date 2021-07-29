<?php
/**
 * @package    M.S. About Me Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$domain = $params->get('domain', 'https://rioguides.biz');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_msaboutme', JPATH_SITE);
?>

<div class="about-me_body">
	<div class="fLower_heading">
		<img class="flower_image_corner" src="images/logos/flower_corner_90.png" alt="Corner Flower" />
		<h2 class="about-me_title"><?php echo Text::_('MOD_MSABOUTME_A_LITTLE_ABOUT'); ?></h2>
	</div>
	<div class="about-me_container">
		<div class="about-me_item about-me_item_1">
			<img class="about-me_image" src="images/articles/mariela_headshot.png" alt="Mariela Spoltore Head shot" />
		</div>
		<div class="about-me_item about-me_item_2">
			<img class="about-me_image_2" src="images/logos/tree_flower_01_60.png" alt="Flower" />
			<p><?php echo Text::_('MOD_MSABOUTME_I_AM_A_PRODUCT'); ?></p>
			<p><?php echo Text::_('MOD_MSABOUTME_MY_SHAMAN_IS_T'); ?></p>
			<br />
			<div class="byhand about-me_byhand">Mari</div>
			<div class="about-me_button">
				<a href="index.php?option=com_content&amp;view=article&amp;id=31&amp;catid=2&amp;lang=en-GB"><?php echo Text::_('MOD_MSABOUTME_KEEP_READING'); ?></a>
			</div>
		</div>
	</div>
	<div class="flower_chain_top">
		<img class="flower_image_top" src="images/logos/flower_chain_300.png" alt="Corner Flower" />
	</div>
</div>