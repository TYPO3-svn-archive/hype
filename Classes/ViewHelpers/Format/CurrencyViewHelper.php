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
 * Formats a given float to a currency representation.
 *
 * = Examples =
 *
 * <code title="Defaults">
 * <f:format.currency>123.456</f:format.currency>
 * </code>
 * <output>
 * 123,46
 * </output>
 *
 * <code title="All parameters">
 * <f:format.currency currencySign="$" decimalSeparator="." thousandsSeparator=",">54321</f:format.currency>
 * </code>
 * <output>
 * 54,321.00 $
 * </output>
 *
 * <code title="Inline notation">
 * {someNumber -> f:format.currency(thousandsSeparator: ',', currencySign: '€')}
 * </code>
 * <output>
 * 54,321,00 €
 * (depending on the value of {someNumber})
 * </output>
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @api
 */
class Tx_Hype_ViewHelpers_Format_CurrencyViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param string $currencySign (optional) The currency sign, eg $ or €.
	 * @param string $decimalSeparator (optional) The separator for the decimal point.
	 * @param string $thousandsSeparator (optional) The thousands separator.
	 * @param boolean $prependCurrencySign (optional) Prepending instead of appending the currency sign.
	 * @return string the formatted amount.
	 * @author Bastian Waidelich <bastian@typo3.org>
	 * @api
	 */
	public function render($currencySign = '', $decimalSeparator = ',', $thousandsSeparator = '.', $prependCurrencySign = FALSE) {
		$stringToFormat = $this->renderChildren();
		$output = number_format($stringToFormat, 2, $decimalSeparator, $thousandsSeparator);
		if($currencySign !== '') {
			if($prependCurrencySign == TRUE) {
				$output = $currencySign . ' ' . $output;
			} else {
				$output.= ' ' . $currencySign;
			}
		}
		return $output;
	}
}
?>