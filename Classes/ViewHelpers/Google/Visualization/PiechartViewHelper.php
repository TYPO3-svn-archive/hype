<?php
/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * View helper for rendering gravatar images.
 * See http://www.gravatar.com
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Hype_ViewHelpers_Google_Visualization_PiechartViewHelper extends Tx_Fluid_Core_ViewHelper_TagBasedViewHelper {
	
	/**
	 * @var string
	 */
	protected $tagName = 'div';
	
	/**
	 * Initialize arguments
	 *
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerUniversalTagAttributes();
		
		//$this->registerTagAttribute('width', 'integer', TRUE);
		//$this->registerTagAttribute('height', 'integer', TRUE);
	}
	
	/**
	 * Render the google piechart data visualization
	 *
	 * @param $data The data to render including the labels
	 * @param int $width The width of the chart in pixels
	 * @param int $height The height of the chart in pixels
	 * @return string The rendered link tag
	 */
	public function render($data, $width, $height) {
		
		$id = md5(time());
		
		$code = 
		"google.setOnLoadCallback(drawChart" . $id . ");
		function drawChart" . $id . "() {
			
			var data = new google.visualization.DataTable();
			
			data.addColumn('string', 'Task');
			data.addColumn('number', 'Hours per Day');
			
			data.addRows([
				['Work', 11],
				['Eat', 2],
				['Commute', 2],
				['Watch TV', 2],
				['Sleep', 7]
			]);
			
			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.PieChart(document.getElementById('" . $id . "'));
			chart.draw(data, {width: " . $width . ", height: " . $height . ", is3D: true, title: 'My Daily Activities'});
		}"
		;
		
		$GLOBALS['TSFE']->getPageRenderer()->addJsInlineCode($id, $code);
		
		# add class attribute
		$this->tag->addAttribute('id', $id);
		
		# render children
		$this->tag->setContent($this->renderChildren());
		
		# return the rendered tag
		return $this->tag->render();
	}
}

?>